import mysql.connector
from openpyxl import workbook
from openpyxl import load_workbook

conn=mysql.connector.connect(host="localhost", user="root", passwd="", database="bdo")

cur=conn.cursor("create table coba(id int primary key, name varchar(30))")

conn.close()
