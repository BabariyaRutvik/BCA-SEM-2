create table Students_result(student_id SERIAL PRIMARY KEY,
first_name varchar(50),
last_name varchar(50),
Age int,
course varchar(50),
admission_date date,
marks int);

insert into Students_result (first_name, last_name, age, course, admission_date, marks) VALUES
('Rutvik', 'Babariya', 25, 'Java', '2022-07-12', 85),
('Karan', 'Singh', 22, 'Python', '2023-01-15', 90),
('Priya', 'Mehta', 20, 'SQL', '2022-08-20', 78),
('Neha', 'Shah', 23, 'HTML', '2023-02-01', 92),
('Amit', 'Kumar', 21, 'CSS', '2022-09-05', 70),
('Sneha', 'Patel', 22, 'Bootstrap', '2023-01-25', 88),
('Rohan', 'Desai', 24, 'Kotlin', '2022-10-10', 76),
('Anjali', 'Verma', 20, 'Java', '2023-03-12', 95),
('Vikas', 'Nair', 23, 'Python', '2022-11-18', 80),
('Meera', 'Iyer', 21, 'SQL', '2023-04-05', 89);

select * from Students_result;

-- 1. Insert a new student learning CSS:
insert into Students_result(first_name,last_name,Age,course,admission_date,marks) values
('Dhruv','Joshi',22,'CSS','2023-05-10',82);

-- 2. Update marks of student "Priya Mehta" to 85:
update Students_result
set marks=85
where first_name='Priya' and last_name='Mehta';



-- 3. Increase marks by 5 for all students learning Java:
update Students_result
set marks=marks+5
where course='Java';

-- 4. Delete a student who scored below 75 marks:
 delete from Students_result
 where marks<75;



-- 5. Delete all students enrolled in subject "Bootstrap":
delete from Students_result
where course='Bootstrap';

-- 6. Add a new column email to students:
alter table Students_result
add column email varchar(50);


-- 7. Rename column marks to score:
alter table Students_result
rename marks to Score;

--8. Drop column age:
alter table Students_result
drop column Age;


--9. Change data type of Score to bigint:

alter table Students_result
alter column Score type bigint;


-- 10. Drop table students
drop table if exists Students;

-- 11. Show students who scored between 80 and 90:
select first_name,last_name,course, Score
from Students_result
where Score between 80 and 90;

-- 12. Count how many students are in each subject:
select course, count(*) as Total_Students
from Students_result
group by course;

-- 13. Find the highest scoring student:
select first_name,last_name,Score
from Students_result
order by Score asc
limit 1;

-- 14. Find students who joined in the year 2023:
select first_name,last_name,admission_date
from Students_result
where extract(YEAR from admission_date) =2023;

-- 15. Show students who scored above the average score:
select first_name,last_name,Score
from Students_result
where Score >(select avg(Score) from Students_result);







select * from Students_result order by student_id asc;












