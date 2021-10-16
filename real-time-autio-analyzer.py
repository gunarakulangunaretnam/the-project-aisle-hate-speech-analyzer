import os

knowledgebase = []


def database_loader():

	with open('database/knowledgebase.txt') as f:
	  
	  for index, line in enumerate(f):
	    word = line.strip()
	    knowledgebase.append(word)




if __name__ == "__main__": 
    database_loader()