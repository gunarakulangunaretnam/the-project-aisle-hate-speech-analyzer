import os
import speech_recognition as sr

speech_recognizer = sr.Recognizer()

knowledgebase = []

def database_loader():

	with open('database/knowledgebase.txt') as f:
	  
	  for index, line in enumerate(f):
	    word = line.strip().lower()
	    knowledgebase.append(word)


def speech_to_text():
    with sr.Microphone() as source:
        print("Listening...")
        speech_recognizer.pause_threshold = 1
        audio = speech_recognizer.listen(source, phrase_time_limit=10) # phrase_time_limit=10

        try:
            print("Recognizing...") 
            text = speech_recognizer.recognize_google(audio)
            return text

        except Exception as e:
	        print(e)



def hate_word_filtter(text):
	hate_words = []
	for word in knowledgebase:
		if word in text:
			hate_words.append(word)
	print(text)
	print(hate_words)



def main_function():

    while True:
    	
    	text = speech_to_text()
    	
    	if text != "" and text != None:
    		hate_word_filtter(text)



if __name__ == "__main__": 
    database_loader()
    main_function()