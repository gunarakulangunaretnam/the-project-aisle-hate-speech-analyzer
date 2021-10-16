import os
import speech_recognition as sr

knowledgebase = []

def database_loader():

	with open('database/knowledgebase.txt') as f:
	  
	  for index, line in enumerate(f):
	    word = line.strip()
	    knowledgebase.append(word)

def speech_to_text():

    while True:
        r = sr.Recognizer()
        with sr.Microphone() as source:
	        print("Listening...")
	       	r.pause_threshold = 1
	        audio = r.listen(source)
	        #audio = r.listen(source, phrase_time_limit=10) # Set listening time limit.

	        try:
	            text = r.recognize_google(audio)
	            print("Recognizing...")  
	            print(text)

	        except Exception as e:
	            print(e)


if __name__ == "__main__": 
    database_loader()
    speech_to_text()