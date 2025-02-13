CREATE TABLE STUDENT (
    STUDENT_ID INT NOT NULL,
    NAME VARCHAR(20) NOT NULL,
    DATE_OF_BIRTH DATE,
    GENDER ENUM('MALE','FEMALE'),
    CLASSROOM_ID INT NOT NULL
); 
----------------------------------------
CREATE TABLE TEACHER (
    TEACHER_ID INT NOT NULL,
    NAME VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(50),
    PHONE_NUMBER VARCHAR(100),
    SPECIALIZATION VARCHAR(30)
);
-----------------------------------------
CREATE TABLE COURSE (
    COURSE_ID INT NOT NULL,
    COURES_NAME VARCHAR(20),
    TEACHER_ID INT NOT NULL
);
------------------------------------------
CREATE TABLE CLASSROOM (
    CLASSROOM_ID INT NOT NULL,
    CLASSROOM_NAME VARCHAR(20) NOT NULL,
    CAPACITY INT(30),
    PRIMARY KEY(CLASSROOM_ID)
);
-------------------------------------------
CREATE TABLE ATTENDANCE (
    ATTENDANCE_ID INT NOT NULL,
    STUDENT_ID INT NOT NULL,
    COURSE_ID INT NOT NULL,
    THE_DATE DATE DEFAULT CURRENT_DATE,
    PRIMARY KEY(ATTENDANCE_ID)
);
--------------------------------------------
INSERT INTO teacher VALUES(101,'John Smith','john.smith@example.com','123-456-7890','Mathematics')
INSERT INTO teacher VALUES(102,'Jane Doe','Jane.Doe@example.com','123-456-7865','English')
INSERT INTO teacher VALUES(103,'Robert Brown','Robert.Brown@example.com','987-456-7765','Science')
INSERT INTO teacher VALUES(104,'Emily Clarck','Emily.Clarck@example.com','987-422-7469','History')
INSERT INTO teacher VALUES(105,'Michael Johnson','Michael.Johnson@example.com','997-422-4449','Physics')
--------------------------------------------
INSERT INTO course VALUES (201,'Algebra |',101)
INSERT INTO course VALUES (202,'Grammar Basics',102)
INSERT INTO course VALUES (203,'Biolgy Fundamentals',103)
INSERT INTO course VALUES (204,'World History',104)
INSERT INTO course VALUES (205,'Introduction to Physics ',105)
----------------------------------------------
INSERT INTO student VALUES (302,'David Williams','2011-07-22','MALE',2);
INSERT INTO student VALUES (302,'David Williams','2011-07-22','MALE',2);
INSERT INTO student VALUES (303,'Sophia Martinez','2012-03-18','FEMALE',3);
INSERT INTO student VALUES (304,'James Anderson','2011-09-30','MALE',4);
INSERT INTO student VALUES (305,'Olivia Thomas','2012-01-25','FEMALE',5);
-----------------------------------------------
INSERT INTO attendance VALUES (401,301,201,'2025,02,12','PRESENT')
INSERT INTO attendance VALUES (402,302,202,'2025,02,12','ABSENT')
INSERT INTO attendance VALUES (403,303,203,'2025,02,12','PRESENT')
INSERT INTO attendance VALUES (404,304,204,'2025,02,12','PRESENT')
INSERT INTO attendance VALUES (405,305,205,'2025,02,12','ABSENT')
------------------------------------------------
SELECT * FROM student WHERE GENDER = 'FEMALE'

SELECT * FROM teacher WHERE SPECIALIZATION = 'Mathematics' OR SPECIALIZATION = 'Physics';

SELECT * FROM student WHERE DATE_OF_BIRTH > '2011-01-01' OR DATE_OF_BIRTH < '2012-12-31';

SELECT * FROM course ORDER BY COURES_NAME ASC;

SELECT * FROM student WHERE NAME LIKE 'A%';

SELECT * FROM student WHERE NAME LIKE '%A%';

SELECT MIN(CAPACITY) FROM classroom

SELECT MAX(CAPACITY) FROM classroom

SELECT AVG(CAPACITY) FROM classroom

SELECT COUNT(*) FROM student;

SELECT COUNT(*) FROM classroom GROUP BY CAPACITY;

SELECT student.NAME,classroom.CLASSROOM_NAME FROM student INNER JOIN classroom ON student.CLASSROOM_ID = classroom.CLASSROOM_ID

SELECT course.COURES_NAME,teacher.NAME FROM course INNER JOIN teacher ON course.TEACHER_ID = teacher.TEACHER_ID

SELECT student.NAME,attendance.ST_STATUS FROM student INNER JOIN attendance ON student.STUDENT_ID = attendance.STUDENT_ID

SELECT teacher.NAME,course.COURES_NAME FROM teacher INNER JOIN course ON teacher.TEACHER_ID = course.TEACHER_ID

SELECT teacher.NAME,course.COURES_NAME FROM teacher LEFT JOIN course ON teacher.TEACHER_ID = course.TEACHER_ID

SELECT DISTINCT STUDENT_ID FROM attendance WHERE ST_STATUS = 'PRESENT';

SELECT DISTINCT STUDENT_ID FROM attendance WHERE ST_STATUS = 'ABSENT';

SELECT DISTINCT COURSE_ID FROM attendance WHERE ST_STATUS = 'PRESENT';

SELECT TEACHER_ID, COUNT(*) AS many_course FROM course GROUP BY TEACHER_ID ORDER BY  many_course DESC;

SELECT CLASSROOM_ID, COUNT(*) AS classCap_to_student FROM student GROUP BY CLASSROOM_ID ORDER BY  classCap_to_student DESC;