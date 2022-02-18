# The Project AISLE Hate Speech Analyzer

## Introduction

The project AISLE is aimed to develop an automatic hate speech detector in social media posts. This software application analyzes given social media account's posts automatically and produce reports.

It is an effective way of analyzing social media posts. It can read and filter hate speech words much quicker than humans. It goes through one post by one in the given social media account/page.

This project has two main components those are frontend (hate speech analyzer) and backend (management panel). The frontend is responsible for analyzing social media posts automatically, frontend is written in Python. The management panel is the backend for this system. Hate speech keywords, social media accounts/pages, hate speech contexts could be added in the management panel.

This system has manual and automatic processing methods. In the manual processing, the user needs to copy the post contents via pressing CTRL + C, when the contents are copied, they are processed in background to detect hate keywords. In the automatic processing method, no need to have a user to copy the posts' contents, all of the copy and processing works are done by the system itself.

## Features

- Automatic social media post analyzation.
- Top ten trending hate keywords.
- It supports all languages (Unicode).
- Good looking management panel.
- Hate keywords could be inserted from the backend (management panel)
- Social media accounts could be added from the backed.
- Hate speech spreaders rankings
- Hate keywords could be divided by contexts.

## Diagram

![](github-readme-content/diagram.png)


## Technologies & Frameworks

#### Frontend & Main Technology
  - C#
  - Python
  - pyttsx3    - For text to speech
  - pynput     - For keyboard
  - pyperclip  - For copy and paste clipboard functions.


#### Backend
  - Laravel 8.68.1
  - MySQL


## Configuration and Setup

### Setup Backend

##### Step 01:
  - Create an empty database called **"the-project-aisle"** in the MySQL and import the database that is found on the **"2-the-project-aisle-database"** folder of this repository.


![](github-readme-content/database-import.jpg)


##### Step 02:
 - Host the Laravel backend management panel (1-the-project-aisle-backend).


### Setup frontend

##### Step 01:

- Install pyttsx3

  ```
    pip install pyttsx3
  ```

- Install pyperclip

  ```
    pip install pyperclip
  ```

- Install MySQL connector

  ```
    pip install mysql-connector-python
  ```

- Install MySQL pynput

  ```
    pip install pynput
  ```


## Execution and Running

  - After the backed hosting, database configuration and frontend frameworks are installed, the project AISLE can be run.


##### Step 01:
 - Open the project using visual studio and click debugging to start the frontend of the application. (Note: This fronted part is written is Python and C#. C# is used for GUI purpose, Python scripts are connected with C#.)

##### Step 02:

  - The second way of running the fronted is manually open the EXE file that is found on the following path.

  ```
    the-project-aisle-hate-speech-analyzer/0-the-project-aisle-frontend/the_project_aisle_client/bin/Debug/the_project_aisle_client.exe
  ```

  ![](github-readme-content/open-exe.jpg)


## Frontend Explained

The frontend part is the main component of this application that does the hate speech analyzing.

 ![](github-readme-content/frontend.jpg)

It will show all of the target social media accounts and pages in the bellow table. The user needs to select the account or page in order to start the processing. Click the start processing green button to begin the hate keywords analyzing in the selected account or page. (Note: The list of social media accounts and pages are coming from the backend of this application. These social media details could be entered from the management panel (backend), The backend management panel will be explained later).



## Demo

 ![](github-readme-content/demo.gif)

**Note:** By default, the system is ready perform manual processing. If you press **CTRL + C**, It will process the copied clipboard text in the background. However, in the manual processing user needs to scroll down and copy and copy. If user wants to process automatically without many involvement such as scrolling, press **CTRL + Q** to turn on the automatic processing method. In the automatic processing, no need to scroll, the system automatically handles all works. To turn of automatic mode, again press **CTRL + Q**.

Note:- To turn on automatic processing mode: Press **CTRL + Q**
