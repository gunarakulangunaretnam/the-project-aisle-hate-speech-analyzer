import os
import time
import signal
import pyttsx3
import keyboard
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
engine.setProperty('rate', rate)

is_automatic_analyzer = False

processing_language = ""
account_id = ""

tamil_knowledgebase   = []
sinhala_knowledgebase = []

def automatic_analyzer():
    global is_automatic_analyzer

    while True:

        if is_automatic_analyzer == True:

            keyboard.press_and_release('ctrl+a')
            keyboard.press_and_release('ctrl+c')

            target_text = pyperclip.paste()
            target_text = target_text.replace("'","")

            hate_words_list = []

            result = "[NON-HATE]"

            if processing_language.lower() == "tamil":
                
                for word in tamil_knowledgebase:
                    if word in target_text.strip().lower():
                        hate_words_list.append(word)
                        result = "[HATE]"

            elif processing_language.lower() == "sinhala":

                for word in sinhala_knowledgebase:
                    if word in target_text.strip().lower():
                        hate_words_list.append(word)
                        result = "[HATE]"

                    
            current_date_object = datetime.today()

            current_date = current_date_object.strftime('%Y-%m-%d')
            current_time = current_date_object.strftime('%H:%M:%S')

            hate_words_list_str = str(hate_words_list).replace("'","")

            insert_cursor = mydb.cursor()
            sqlCode = "INSERT INTO processed_data VALUES ('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}')".format("", account_id, target_text, str(hate_words_list_str), current_date, current_time, "[TEXT-DATA]", result)
            insert_cursor.execute(sqlCode)
            mydb.commit()

            if len(hate_words_list)  > 0:
                number_of_hate_words = len(hate_words_list)


                #talk_function(f"Warning, {number_of_hate_words} hate {text2} found.")

                thread1 = threading.Thread(target=talk_function, args=(f"Warning, {number_of_hate_words} hate keywords found.",))
                thread1.start()
               

            else:
                #talk_function(f"Good, No hate speech found.")

                thread2 = threading.Thread(target=talk_function, args=(f"Good, No hate speech found.",))
                thread2.start()

            keyboard.press_and_release('page down')
        
            time.sleep(1)



def kill_current_process():
    os.kill(os.getpid(), signal.SIGTERM) #or signal.SIGKILL 

def on_press(key):
    global processing_language, account_id, is_automatic_analyzer


    if is_automatic_analyzer == False:

        if str(key).strip() == "'\\x03'":
            
            target_text = pyperclip.paste()
            target_text = target_text.replace("'","")

            hate_words_list = []


            result = "[NON-HATE]"

            if processing_language.lower() == "tamil":
                
                for word in tamil_knowledgebase:
                    if word in target_text.strip().lower():
                        hate_words_list.append(word)
                        result = "[HATE]"

            elif processing_language.lower() == "sinhala":

                for word in sinhala_knowledgebase:
                    if word in target_text.strip().lower():
                        hate_words_list.append(word)
                        result = "[HATE]"

                    
            current_date_object = datetime.today()

            current_date = current_date_object.strftime('%Y-%m-%d')
            current_time = current_date_object.strftime('%H:%M:%S')

            hate_words_list_str = str(hate_words_list).replace("'","")

            insert_cursor = mydb.cursor()
            sqlCode = "INSERT INTO processed_data VALUES ('{}', '{}', '{}', '{}', '{}', '{}', '{}', '{}')".format("", account_id, target_text, str(hate_words_list_str), current_date, current_time, "[TEXT-DATA]", result)
            insert_cursor.execute(sqlCode)
            mydb.commit()

            if len(hate_words_list)  > 0:
                number_of_hate_words = len(hate_words_list)


                thread3 = threading.Thread(target=talk_function, args=(f"Warning, {number_of_hate_words} hate keywords found.",))
                thread3.start()

            else:
                thread3 = threading.Thread(target=talk_function, args=(f"Good, No hate speech found.",))
                thread3.start()

    if str(key).strip() == "'\\x11'":
        
        if is_automatic_analyzer == True:
            
            thread1 = threading.Thread(target=talk_function, args=(f"Automatic analyzer turned off",))
            thread1.start()
            
            is_automatic_analyzer = False
        
        else:
            thread2 = threading.Thread(target=talk_function, args=(f"Automatic analyzer turned on",))
            thread2.start()

            is_automatic_analyzer = True

 

def database_loader():
    global tamil_knowledgebase, keyword_sinhala_data

    SelectDataCursor.execute("SELECT keyword FROM knowledgebase WHERE  language = 'Tamil'")
    keyword_tamil_data = SelectDataCursor.fetchall()
    mydb.commit()

    for words in keyword_tamil_data:
        tamil_knowledgebase.append(words[0].strip().lower())

    SelectDataCursor.execute("SELECT keyword FROM knowledgebase WHERE  language = 'Sinhala'")
    keyword_sinhala_data = SelectDataCursor.fetchall()
    mydb.commit()

    for words in keyword_sinhala_data:
        sinhala_knowledgebase.append(words[0].strip().lower())
        


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

    thread2 = threading.Thread(target=key_listener, args=())
    thread2.start()

    database_loader()
    automatic_analyzer()
    