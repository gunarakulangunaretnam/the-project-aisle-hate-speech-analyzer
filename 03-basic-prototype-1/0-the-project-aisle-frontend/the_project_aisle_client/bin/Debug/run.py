import os
import time
import signal
import pyttsx3
import pyperclip
import threading
import mysql.connector
from datetime import datetime
from pynput.keyboard import Key, Listener

#Establish mysql connection
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="the-project-aisle"
)


#Create mysql select object
SelectDataCursor = mydb.cursor()

engine = pyttsx3.init()
en_voice_id = "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\TTS_MS_EN-US_ZIRA_11.0"  # female
ru_voice_id = "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\TTS_MS_RU-RU_IRINA_11.0"  # male
engine.setProperty('voice', en_voice_id)
rate = engine.getProperty('rate')
engine.setProperty('rate', rate - 20)

processing_language = ""
account_id = ""

tamil_knowledgebase   = []
sinhala_knowledgebase = []

def kill_current_process():
    os.kill(os.getpid(), signal.SIGTERM) #or signal.SIGKILL 

def on_press(key):
    global processing_language, account_id

    if str(key).strip() == "'\\x03'":
        time.sleep(1)
        target_text = pyperclip.paste()

        hate_words_list = []
        result = "[NON-HATE]"

        if processing_language.lower() == "tamil":
            
            for word in tamil_knowledgebase:
                if word.strip() in target_text:
                    hate_words_list.append(word)
                    result = "[HATE]"

        elif processing_language.lower() == "sinhala":

            for word in sinhala_knowledgebase:
                if word.strip() in target_text:
                    hate_words_list.append(word)
                    result = "[HATE]"

                
                


        current_date_object = datetime.today()

        current_date = current_date_object.strftime('%m-%d-%Y')
        current_time = current_date_object.strftime('%H:%M:%S')

        hate_words_list_str = str(hate_words_list).replace("'","")

        insert_cursor = mydb.cursor()
        sqlCode = "INSERT INTO processed_data VALUES ('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}')".format("", account_id, target_text, str(hate_words_list_str), current_date, current_time, "[TEXT-DATA]", result)
        insert_cursor.execute(sqlCode)
        mydb.commit()

        if len(hate_words_list)  > 0:
            number_of_hate_words = len(hate_words_list)

            text1 = ""
            text2 = ""


            if number_of_hate_words > 1:
                text1 = "are"
                text2 = "keywords"

            else:
                text1 = "is"
                text2 = "keyword"

            thread3 = threading.Thread(target=talk_function, args=(f"Warning, Hate speech is identified. There {text1} {number_of_hate_words} hate {text2} found.",))
            thread3.start()

        else:
            thread3 = threading.Thread(target=talk_function, args=(f"Good, No hate speech found.",))
            thread3.start()

 




def database_loader():
    global tamil_knowledgebase, keyword_sinhala_data

    SelectDataCursor.execute("SELECT keyword FROM knowledgebase WHERE  language = 'Tamil'")
    keyword_tamil_data = SelectDataCursor.fetchall()
    mydb.commit()

    for words in keyword_tamil_data:
        tamil_knowledgebase.append(words[0])

    SelectDataCursor.execute("SELECT keyword FROM knowledgebase WHERE  language = 'Sinhala'")
    keyword_sinhala_data = SelectDataCursor.fetchall()
    mydb.commit()

    for words in keyword_sinhala_data:
        sinhala_knowledgebase.append(words[0])


def talk_function(audio):
    if engine._inLoop:
        engine.endLoop()

    print("Computer: {}".format(audio))
    engine.say(audio)
    engine.runAndWait()
    

def change_csharp_input_to_normal():
    file = open("csharp-input.txt", "w")                      
    file.write("[NULL] | [NULL] | [NULL] | [NULL]") 
    file.close()


def input_listener_from_csharp():
    global processing_language, account_id

    while True:

        try:
          file = open("csharp-input.txt", "r")                      
          read_data = file.readline()

          split_read_data =read_data.split("|")

          if split_read_data[0].strip() == "[EXIT]":
             kill_current_process()

          elif split_read_data[0].strip() == "[MESSAGE]":
            file.close()
            change_csharp_input_to_normal() # Change to [NULL]
            processing_language = split_read_data[3].strip()
            account_id = split_read_data[1].strip()
            thread2 = threading.Thread(target=talk_function, args=(f"Start processing on {split_read_data[1].strip()} {split_read_data[2].strip()} in {split_read_data[3].strip()} language.",))
            thread2.start()
        
          else:
            file.close()     

        except Exception as e:                   
            print(e)

    
def key_listener():
    with Listener(on_press=on_press) as listener:
        listener.join()


if __name__ == "__main__":
    thread1 = threading.Thread(target=input_listener_from_csharp, args=())
    thread1.start()
    database_loader()
    key_listener()
    



