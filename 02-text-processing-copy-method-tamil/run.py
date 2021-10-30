import time
import pyperclip
from datetime import datetime
from pynput.keyboard import Key, Listener


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="the-project-aisle"
)


def on_press(key):
    #print('{0} pressed'.format(key))

    if str(key).strip() == "'\\x03'":
        time.sleep(1)
        copyText = pyperclip.paste()
        hate_words = []
        for x in knowledgebase:
            if x in copyText:
                hate_words.append(x)


    currentTime = now.strftime("%I:%M:%S %p")
    currentDate = datetime.today().strftime('%Y-%m-%d')

def on_release(key):
    #print('{0} release'.format(key))
    if key == Key.esc:
        return False



with Listener(on_press=on_press, on_release=on_release) as listener:
    listener.join()