--顯示學生所有課程的成績
SELECT students.cID,students.cName,scorelist.course, scorelist.score
FROM students,scorelist
WHERE students.cID = scorelist.cID


------------------------------------
--顯示學生的英文成績
SELECT students.cID,students.cName,scorelist.course, scorelist.score
FROM students,scorelist
WHERE (students.cID = scorelist.cID) AND (scorelist.course = '英文')

------------------------------------------
--顯示學生的總分及平均
SELECT students.cID,students.cName,SUM(scorelist.score) AS '總分',ROUND(AVG(scorelist.score),1) AS '平均'
FROM students,scorelist
WHERE (students.cID = scorelist.cID)
GROUP by students.cID

---------------------------------------------
--使用Join_On顯示學生國文成績
SELECT students.cID,students.cName,scorelist.course,scorelist.score
FROM students JOIN scorelist
ON students.cID = scorelist.cID
WHERE scorelist.course ="國文"

-------------------------------------------------
--使用Left Join
SELECT students.cID,students.cName,SUM(scorelist.score) AS '總分',ROUND(AVG(scorelist.score),1) AS '平均'
FROM students LEFT JOIN scorelist
ON students.cID = scorelist.cID
GROUP by students.cID,students.cName

----------------------------------------------------
--使用Right Join
SELECT students.cID,students.cName,SUM(scorelist.score) AS '總分',ROUND(AVG(scorelist.score),1) AS '平均'
FROM students RIGHT JOIN scorelist
ON students.cID = scorelist.cID
GROUP by students.cID,students.cName

--------------------------------------------------
--使用INNER JOIN
SELECT a.id,b.id
FROM table1 AS a
INNER INNER JOIN table2 AS b 
ON a.id = b.id