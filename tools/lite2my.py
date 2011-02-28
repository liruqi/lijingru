#!/usr/bin/python
# coding=utf-8
import os
import re
import sys
import string 
import time
import sqlite3
import MySQLdb

db=MySQLdb.connect("localhost","root","southpark","lijingru")
my_cursor = db.cursor()
my_cursor.execute('set names utf8')
my_cursor.execute('use lijingru')
#my_cursor.execute("insert into `ljr_verycd` (`verycdid`,`title`,`status`) values(%s,%s,%s)", (123,'a','b'))

conn = sqlite3.connect('../protected/data/verycd.sqlite3.db')
conn.text_factory = str
lite_cursor = conn.cursor()

#print lite_cursor
#print len(lite_cursor)

trunk_size = 1000
cnt = trunk_size
current_offset = 0
while cnt == trunk_size:
    lite_cursor.execute("""select * from verycd  limit ? offset ?""", ( trunk_size, current_offset))
    cnt = 0
    for row in lite_cursor:
        cnt += 1
        if not row[8]:
            print row
            continue
        try:
            #my_cursor.execute("delete from `ljr_verycd` where `verycdid`=%s", (row[0]))
            my_cursor.execute("insert into `ljr_verycd` values(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)", row)
        except TypeError, m:
            print (TypeError,m)

    current_offset += cnt
    print current_offset
