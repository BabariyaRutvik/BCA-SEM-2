-- create table Employee(EMPID INT PRIMARY kEY ,Name varchar(50), Salary DECIMAL(10,2));
select * from Employee;

alter table Employee
add Department varchar(30);

-- insert into Employee(EMPID, Name,Salary, Department) values (101,'Raj',50000,'HR');

update Employee
set Salary=60000
where EMPID=101;

delete from Employee
where Name='Raj';

truncate table Employee;

select * from Employee;

insert into Employee(EMPID,Name,Salary,Department) values (101,'Daval Babariya',60000,'HR'),
                                                          (102,'Jayraj Babariya',7000,'Marketing'),
														  (103,'Bhavin Babariya',40000,'Finance');

														  
