create table Students(studentID SERIAL PRIMARY KEY,
Name varchar(50),
Age int);

insert into Students(Name,Age) values('Rutvik Babaria',25),
('Dhaval Babariya',27),
('Jayraj Babariya',27),
('Narendra Rathod',31),
('Bhavin Babariya',29);


select * from Students;


create table Courses(CourseID SERIAL PRIMARY KEY, 
CourseName varchar(50),StudentID int, FOREIGN KEY(StudentID) references Students(StudentID) );

select * from Courses;

insert into Courses(CourseID,CourseName,StudentID) values(101,'Java',1),
(102,'C language',2),
(103,'C++',3),
(104,'Kotlin',5),
(105,'Python',4);

 select c. CourseID,c.CourseName, s. Name as Student_Name, s.Age
 from Courses c
 join Students s on c.StudentID=s.StudentID;
 


