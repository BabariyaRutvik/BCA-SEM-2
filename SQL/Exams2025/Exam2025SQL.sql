--  1. Creating  Studens table 
CREATE TABLE Students(StudentID INT PRIMARY KEY,
FirstName VARCHAR(50), LastName VARCHAR (50),
EnrollmentDate DATE);

-- 2. Use the alter command to  named EmailHAR VARCHAR to the Students table
ALTER TABLE Students
ADD COLUMN Email VARCHAR(100);

-- 3. Write a SQL Commands to delete the Students table
DROP TABLE IF EXISTS Students;

-- 4. now creating a Course table Modified a course table to 
-- add a primary kay constraints to CourseID Column

CREATE TABLE Courses(CourseID INT PRIMARY KEY,
CourseName  VARCHAR(100),
StudentID INT,
FOREIGN KEY (StudentID) REFERENCES Students(StudentID));

-- 6. Write a SQL Commands to insert three new records to Students table

TRUNCATE TABLE  Students CASCADE;

INSERT INTO Students(StudentID,FirstName,LastName,EnrollmentDate,Email)
VALUES
(1, 'Rutvik','Babariya','2023-06-15','rutvik@gmail.com'),
(2,'Dhaval','Babariya','2023-07-01','dhaval@gmail.com'),
(3,'Bhavin','Babariya','2023-08-10','bhavin@gmail.com');

select * from Students;

-- deleting column email
ALTER TABLE Students
ADD COLUMN Email VARCHAR(100);

-- 7. Use the Update Command to Change the email adress for 
-- specific Students in the Students table
UPDATE Students
SET Email = 'rutvik101324@gmail.com'
where Email ='rutvik@gmail.com';

select * from Students order by StudentID;

-- 8. Write a SQL Statment to delete a specific records fromn the table
-- Students based on StudentsID

DELETE FROM Students
WHERE StudentID = 2;

-- 9. Perform a bulk insert from an existing TempStudents into the Table Students
-- First creating TempStudents table
CREATE TABLE TempStudents (
    StudentID INT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    EnrollmentDate DATE,
    Email VARCHAR(100)
);

INSERT INTO TempStudents(StudentID,FirstName,LastName,EnrollmentDate,Email)
VALUES
(4,'Ruturaj', 'Jadeja','2019-04-19','ruturaj@gmail.com'),
(5,'Ronak', 'Dholakiya','2019,03-12','ronak@gmail.com'),
(6,'Narendra',' Raathod','2015-09-10','naren@gmail.com'),
(7,'Raju', 'Karmata','2019-09-17','raju@gmail.com'),
(8,'Pratik' ,'Rajkotiya','2013,08-12','pratik@gmail.com'),
(9,'Bhavin','Dangar','2014,09-19','bhavindangar@gmail.com'),
(10,'Parth','Soni','2025-03-24','parth@gmail.com');
select * from TempStudents;


-- 10. Use the SELECT Commands to retrive all records from Students table
select * from Students;

-- 11. Write a SELECT Statement that retrive Student enrolled after specific data
-- using WHERE  Clause.

select * from Students
where enrollmentdate > '2023-07-01';


-- 12. Use DISTINCT to selet unique Last Name entries from the Students table 
select DISTINCT LastName from Students;

-- 13. write a query using ORDER BY Clause to sort students by LastName in ascending Order
select * from Students
order by LastName asc;

-- 14. Use GROUP BY to group Students by EnrollmentDate 
-- and count the number of Students enrolled in each date

select EnrollmentDate , count(*) as TotalStudents
from Students
group by EnrollmentDate
order by EnrollmentDate

-- 15. write a command to grant a 
-- SELECT privileges on the Students table to a user name db_user.
CREATE USER db_user;
GRANT SELECT ON Students TO db_user;


-- 16. Write a command to revoke Update Privileges 
-- from db_user on the Students table
REVOKE UPDATE ON Students from db_user;


-- 17.write a transaction that 
-- insert a new Student record and then commit the transactionBEGIN;

ROLLBACK;

BEGIN;

INSERT INTO Students (StudentID, FirstName, LastName, EnrollmentDate, Email)
VALUES (11, 'Amit', 'Kumar', '2024-01-15', 'amit@gmail.com');

COMMIT;

-- 18. Create a Transation that attempts to insert the data but rollsback if error occurred
ROLLBACK;


BEGIN;

SAVEPOINT insert_student;

INSERT INTO Students(StudentID,FirstName,LastName,EnrollmentDate,Email)
VALUES
(12,'Parth','Soni','2025-09-12','parth@gmail.com');

-- If any error happens, rollback to savepoint
ROLLBACK TO insert_Student;

-- Finish the transaction
COMMIT;


-- 19. create a courses table and define 
-- entity integration constraints 
-- ensuring that CourseID cannot be NULL.

Create table Courses1(CourseID INT NOT NULL PRIMARY KEY,
CourseName VARCHAR(60));


-- 20. Now Define referential integration constraints 
-- between Enrollments and Students, 
--ensuring StudentID in enrollments references StudentsId in Students.

CREATE TABLE Enrollments(EnrollmentId INT PRIMARY KEY,
StudentID INT,
CourID INT,
FOREIGN KEY (StudentID) references Students(StudentID));



-- 21.Create table for Faculty that includes Foreign key , Primary key and Composite key

CREATE TABLE Faculty
(FacultyID INT,
FacultyName VARCHAR(70),
CourseId INT,
DepartmentId INT,
StudentID INT,
PRIMARY KEY(FacultyID,DepartMentId),  -- composite key
FOREIGN KEY (CourseID) references Courses1(CourseID));

-- 22. write a query that select Current date and time using DUAL table

 CREATE TABLE DUAL(Dummy CHAR(1));
 INSERT into DUAL VALUES('R');
 
 
Select NOW() AS Current_dateTime
From DUAL;


-- 23. Use Arithmetic Operators in a SELECT Statement to
-- calculate total fee for Student based on their EnrollmentCount

select * from Students order by StudentId;

Alter table Students
Add Column EnrollmentCount INT;

UPDATE Students SET EnrollmentCount = 2 WHERE StudentID = 1;
UPDATE Students SET EnrollmentCount = 7 WHERE StudentID = 2;
UPDATE Students SET EnrollmentCount = 1 WHERE StudentID = 3;
UPDATE Students SET EnrollmentCount = 3 WHERE StudentID = 11;
UPDATE Students SET EnrollmentCount = 6 WHERE StudentID = 4;

-- i have assumed my fees to 15,000
-- now making a final Query
Select StudentID,
       FirstName,
	   LastName,
	   EnrollmentCount,
(EnrollmentCount * 15000) As TotalFees
From Students;


-- 24.  Write a query that retrieves who are either enrolled in 
-- the Math or have an Email Address ending with .edu. 

select * from Students;


insert into Courses1(CourseID,CourseName)
values
(101,'Math');


insert into Enrollments (EnrollmentID,StudentID)
values(2,2);

update Students
set Email ='dhaval@college.edu.'
where StudentID=2;

UPDATE Students
SET Email = 'dhaval@college.edu'
WHERE StudentID = 2;


UPDATE Enrollments
SET CourID = 101
WHERE EnrollmentID = 2;

SELECT DISTINCT 
    s.StudentID, 
    s.FirstName,
    s.LastName,
    s.Email
FROM Students s
LEFT JOIN Enrollments e ON s.StudentID = e.StudentID
LEFT JOIN Courses1 c ON e.CourID = c.CourseID
WHERE c.CourseName = 'Math'
   OR s.Email LIKE '%.edu';
   

-- 25. Use Relational Operators in a WHERE Clause to filter 
-- records from Students with EnrollmentDate in the year 2023.

select * from Students
where EnrollmentDate >= '2023-01-01'
and EnrollmentDate <= '2023-12-31';


-- 26. Use like Operator to search for the Students whose Name Starts with 'A'
select * from Students
Where FirstName like 'A%';


-- 27. Write a query that calculate average EnrollmentCount for Student in each course

SELECT 
    c.CourseName,
    AVG(s.EnrollmentCount) AS AverageEnrollmentCount
FROM Students s
JOIN Enrollments e ON s.StudentID = e.StudentID
JOIN Courses1 c ON e.CourID = c.CourseID
GROUP BY c.CourseName;

-- 28. Perform a UNION Operation between two Tables CurrentStudents and Alumni , 
-- to list all unique Students  

-- Alumni table
CREATE TABLE Alumni (
    StudentID INT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    GraduationYear INT
);

INSERT INTO Alumni (StudentID, FirstName, LastName, GraduationYear)
VALUES
(15, 'Jay', 'Patel', 2021),
(16, 'Meet', 'Gohil', 2020),
(1, 'Rutvik', 'Babariya', 2023); 


-- Main Query

select StudentID , FirstName,LastName
from Students

UNION

Select StudentID,FirstName,LastName
from Alumni;


-- 29 . Write a SELECT Statement that Retrieves 
-- all Students enrolled in courses with more then 20 Students using a Sub-Query


SELECT s.StudentID, s.FirstName, s.LastName, c.CourseName
FROM Students s
JOIN Enrollments e ON s.StudentID = e.StudentID
JOIN Courses1 c ON e.CourID = c.CourseID
WHERE e.CourID IN (
    SELECT CourID
    FROM Enrollments
    GROUP BY CourID
    HAVING COUNT(StudentID) > 20
);

-- 30 write a query that demonstrate the 
-- Cartesian Product of Students and Courses table


select s.StudentID,
       s.FirstName,
	   s.LastName,
	   c.CourseID,
	   c.CourseName
From Students s
cross join Courses1 c;


-- 31 . Use a CROSS JOIN to Combine Students and Courses without a join condition

SELECT 
    s.StudentID,
    s.FirstName,
    s.LastName,
    c.CourseID,
    c.CourseName
FROM Students s
CROSS JOIN Courses1 c;


-- 32. Write a Query that uses a INNER JOIN to combine data from Students and Enrollments based on StudentsID
SELECT 
    s.StudentID,
    s.FirstName,
    s.LastName,
    e.EnrollmentID,
    e.CourID
FROM Students s
INNER JOIN Enrollments e
ON s.StudentID = e.StudentID;


-- 33. Write a Example of LEFT, RIGHT , and FULL OUTER JOIN using Students and Enrollments

-- left Outer join
SELECT 
    s.StudentID,
    s.FirstName,
    s.LastName,
    e.EnrollmentID,
    e.CourID
FROM Students s
LEFT JOIN Enrollments e
ON s.StudentID = e.StudentID;


-- right Outer join

SELECT 
    s.StudentID,
    s.FirstName,
    s.LastName,
    e.EnrollmentID,
    e.CourID
FROM Students s
RIGHT JOIN Enrollments e
ON s.StudentID = e.StudentID;

-- Full Outer join
SELECT 
    s.StudentID,
    s.FirstName,
    s.LastName,
    e.EnrollmentID,
    e.CourID
FROM Students s
FULL OUTER JOIN Enrollments e
ON s.StudentID = e.StudentID;



-- 34. Use a Self Join to relate records within the Students table based on Shared LastName
SELECT 
    s1.StudentID AS Student_1_ID,
    s1.FirstName AS Student_1_FirstName,
    s1.LastName AS Shared_LastName,
    s2.StudentID AS Student_2_ID,
    s2.FirstName AS Student_2_FirstName
FROM Students s1
JOIN Students s2
ON s1.LastName = s2.LastName
AND s1.StudentID <> s2.StudentID;



-- 35 . write a queries that uses Scalar Function
-- (e,g, UPPER,LOWER , TRIM ) and Display the FirstName Field From Students Table.


SELECT 
    FirstName,
    UPPER(FirstName) AS UpperCaseName,
    LOWER(FirstName) AS LowerCaseName,
    TRIM(FirstName) AS TrimmedName
FROM Students;












































































