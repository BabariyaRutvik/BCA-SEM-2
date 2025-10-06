--drop table if exists Students;

create table Students(Studentid SERIAL PRIMARY KEY,
first_name varchar(50),
last_name varchar(50),
age int,
subjects varchar(50),
marks int,
admission_date date);

-- creating table Course
create table Course(course_id SERIAL PRIMARY KEY,
course_name varchar(50),
duration_month int);

-- create table Enrollments
create table Enrollments(
    enroll_id SERIAL PRIMARY KEY,
    student_id int,
    course_id int,
    FOREIGN KEY (student_id) references Students(Studentid),
    FOREIGN KEY (course_id) references Course(course_id)
);

-- inserting data into Students table
insert into Students(first_name,last_name,age,subjects, marks, admission_date)values
('Rutvik','Babariya',25,'Java',98,'2022-07-12'),
('Dhaval','Babariya',28,'Kotlin',66,'2023-02-18'),
('Jayraj','Babariya',30,'C++',50,'2023-11-23'),
('Neha', 'Shah', 23, 'Java', 89, '2023-03-15'),
('Raj', 'Mehta', 21, 'HTML', 70, '2021-09-20');

-- inserting data into Course table
insert into Course(course_name,duration_month) values
('Java', 6),
('Python', 4),
('C++', 5);

-- inserting data into Enrollments table
INSERT INTO Enrollments (student_id, course_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 1);

--1.  Retrieve all student data (simple SELECT)
select * from Students;

-- 2. Update marks for student 'Raj Mehta' to + 5
update Students
set marks = marks +5
where first_name='Raj' and last_name='Mehta';

-- 3. Add a new column for student’s email
alter table Students
add column email varchar(50);

-- 4. Update the new email column for one student
update Students
set email='babariyarutvik1013@gmail.com'
where Studentid=1;
select * from Students order by Studentid;

-- 5. Delete one student record with marks less than 70
DELETE FROM Enrollments
WHERE student_id IN (
    SELECT Studentid FROM Students WHERE marks < 70
);
delete from Students
where marks < 70;

-- 6. Find total number of students enrolled in each course (using JOIN + GROUP BY)
SELECT s.subjects, COUNT(e.student_id) AS total_students
FROM Students s
JOIN Enrollments e ON s.Studentid = e.student_id
JOIN Course c ON e.course_id = c.course_id
GROUP BY s.subjects
ORDER BY s.subjects;

-- 7. Find highest marks in each subject
SELECT subjects, MAX(marks) AS highest_marks
FROM Students
GROUP BY subjects;

-- 8. Show all students who joined after 2022
select * from Students 
where admission_date > '2020-12-31';

-- 9. Rename the subject column to course_name
alter table Students
rename column subjects to course_name;
select * from Students order by Studentid;

-- 10. Create a view showing student name, course, and marks
create view StudentSummary as 
select first_name,last_name,course_name,marks
from Students;

select * from StudentSummary;

-- 11. 
drop view StudentSummary;

-- 12 drop table Enrollments
drop table if exists Enrollments;

-- 13. Find students who scored above the average marks of all students
select first_name,last_name,marks
from Students
where marks > (select avg(marks) from Students);

-- 14. Display full name (concatenation) and sort alphabetically
select concat(first_name, ' ' ,last_name) as FullName,marks
from Students
order by FullName asc;

-- 15. Find the second-highest marks in the Students table
select max(marks) as Second_Highest
from Students
where marks < (select max(marks) from Students);















 


