import os
import time
import signal
import pyttsx3
import pyperclip
import threading
from datetime import datetime
from pynput.keyboard import Key, Listener

engine = pyttsx3.init()
en_voice_id = "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\TTS_MS_EN-US_ZIRA_11.0"  # female
ru_voice_id = "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\TTS_MS_RU-RU_IRINA_11.0"  # male
engine.setProperty('voice', en_voice_id)
rate = engine.getProperty('rate')
engine.setProperty('rate', rate - 20)


def kill_current_process():
    os.kill(os.getpid(), signal.SIGTERM) #or signal.SIGKILL 

def on_press(key):

    if str(key).strip() == "'\\x03'":
        time.sleep(1)
        copyText = pyperclip.paste()
        


    #currentTime = now.strftime("%I:%M:%S %p")
    #currentDate = datetime.today().strftime('%Y-%m-%d')


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
    key_listener()
    



