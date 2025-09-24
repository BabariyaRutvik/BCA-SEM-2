create table Students(student_id serial primary key ,
name varchar(50), age int, course varchar(50),admission_date date, marks int);

insert into Students(name,age,course,admission_date,marks) values
('Rutvik Babariy',25,'Computer Scince','2023-07-12',89),
('Aarav', 19, 'Mathematics', '2022-08-01', 76),
('Neha', 20, 'Physics', '2021-09-15', 92),
('Priya', 22, 'Chemistry', '2023-01-10', 68),
('Rahul', 23, 'Computer Science', '2022-02-20', 81),
('Sneha', 18, 'Mathematics', '2023-03-14', 59),
('Vikas', 24, 'Chemistry', '2021-06-05', 74),
('Karan', 20, 'Physics', '2022-10-22', 88);



select * from Students;
