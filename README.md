# WebApp-for-Titanic-Survival-Prediction

This is a small Web-App with basic Frontend which gives the prediction for a user about the chance of his/her survival if he would have been on the Titanic Ship.

This code for the app is written in 3 languages which serve different purposes -
(1) Python - for applying Machine Learning
(2) PHP - for server side, database handling and running the Python Script
(3) SQL - for quering the database
(4) HTML - for the basic frontend, forms and delivering the user input to the backend

For Machine Learning, Logistic Regression from Scikit learn library is used and Pandas is used for data manipulation.

In this App, the user fills the form which asks for some details such as users name, age, sex, income, etc and accordingly analyze the data and predict that whether he would have survived in that tragedy because in that tragedy survival was dependent on various factors such as the type of ticket purchased, the position of the persons seat, age of the person etc.

The app basically takes the data from user and sends it to PHP script which in turn save the data in the database server and then runs the Python script. The python script loads the previous record dataset and apply the logistic regression Algorithm on that dataset to train the classifier and then loads the data stored in the database and then as per user input and trained classifier predicts the chances of survival in terms of 0(Died)/1(Survived).

For running the program put all the files in "WWW" named folder of wamp Folder after installing wamp.
