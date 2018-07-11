import pandas as pd
import pymysql

train=pd.read_csv("C:/wamp/www/New folder/train2.csv")
test=pd.read_csv("C:/wamp/www/New folder/test1.csv")

from sklearn.model_selection import train_test_split

target=train["Survived"]

predictors=train.drop(['Survived','PassengerId'],axis=1)

x_train,x_val,y_train,y_val=train_test_split(predictors,target,test_size=0.22,random_state=0)

from sklearn.linear_model import LogisticRegression
from sklearn.metrics import accuracy_score

log_reg=LogisticRegression()
log_reg.fit(x_train,y_train)

y_pred=log_reg.predict(x_val)
acc_log_reg=round(accuracy_score(y_pred,y_val)*100,2)

conn=pymysql.connect(host='127.0.0.1',user='root',password='',db='dgga')

a=conn.cursor()

sql='SELECT * from `test`;'
a.execute(sql)

data=a.fetchall()

predictions=log_reg.predict(data)

if predictions==1:
    print("Survived......predicted with ",acc_log_reg,"% accuracy")
else:
    print("Died......predicted with ",acc_log_reg,"% accuracy")


