-- create table users(ID SERIAL PRIMARY KEY, Name varchar(50) NOT NULL,
                 --  email varchar(100) UNIQUE, Age INTEGER CHECK (Age>=20),Hire_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

				 alter table users
				 add column Departments varchar (30);

select * from users;  

insert into users(Name,email,Age,Departments) values ('Rutvik Babariya','rutvik@gmail.com',25,'Java Android'),
                                                     ('Jayraj Babariya','jayraj@gmail.com',28,'Kotlin Android'),
													 ('Narendra Rathod','naren@gmail.com',32,'Python Developer'),
													 ('Dhaval Babariya','dhaval@gmail.com',26,'Sql Developer'),
													 ('Bhavin Babariya','bhavin@gmail.com',30,'Taster');
													 
update users
set Age=31
where ID=5;

update users
set Age=33, departments='Java'
where Name='Dhaval Babariya';


select * from users order by ID ASC;

UPDATE users
set age=age+1
where Name like '%Bhavin';