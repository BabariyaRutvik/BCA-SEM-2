DROP TABLE IF EXISTS Students;

CREATE TABLE Students (
    ID SERIAL PRIMARY KEY,
    Name VARCHAR(50) not null,
    Address VARCHAR(50) not null,
    Course VARCHAR(50),
    Age INT,
    Phone_Number BIGINT
);

INSERT INTO Students (Name, Address, Course, Age, Phone_Number) VALUES
('Rutvik Babariya','Ahmedabad','BCA',25,6351202090),
('Dhaval Babariya','Rajkot','BBA',26,6543216756),
('Jayraj Babariya','Junagadh','B.COM',28,6545342189),
('Narendra Rathod','Manavadar','BA',32,6355053550),
('Bhavin Babariya','Junagadh','B.ED',33,6456789065);

select * from Students;

alter table Students
rename column Name to StudentName;

-- change datatype age
alter table Students
alter column age type SMALLINT;

-- TO ADD a not null constraaints to phone number
alter table Students
alter column phone_number set NOT NULL;

select * from Students;

-- adding a check constarain to age column

alter table Students
add constraint age check(age>=25);






