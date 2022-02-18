from pynput.keyboard import Key, Listener
import pyperclip
import time


def on_press(key):
    #print('{0} pressed'.format(key))

    if str(key).strip() == "'\\x03'":
        time.sleep(1)
        copyText = pyperclip.paste()
        print(copyText)


def on_release(key):
    #print('{0} release'.format(key))
    if key == Key.esc:
        return False



with Listener(on_press=on_press, on_release=on_release) as listener:
    listener.join()