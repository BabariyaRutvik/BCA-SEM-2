-- create employees table
create table employees(
    employees_id serial primary key,
    first_name varchar(50) not null, 
    last_name varchar (50) not null,
    department varchar(50),
    salary decimal(10,2) check (salary>0),
    joining_date date not null,
    age int check (age>=18)
);

-- insert sample employee records
insert into employees(first_name,last_name,department,salary,joining_date,age) values
('amit','sharma','it',60000,'2022-05-01',29),
('neha','patel','hr',55000,'2021-08-15',32),
('ravi','kumar','finance',70000,'2020-03-10',35),
('dhaval','babariya','it',65000,'2019-11-12',28),
('suresh','varma','operations',50000,'2023-01-10',26);

-- q1: retrieve all employees’ first_names and their departments
select first_name,department from employees;

-- q2: update the salary of all employees in the 'it' department by increasing it by 10%
update employees 
set salary = salary * 1.10
where department = 'it';

-- show updated records
select * from employees order by employees_id asc;

-- q3: delete all employees who are older than 34 years
delete from employees
where age > 34;

-- q4: add a new column 'email' to the employees table
alter table employees
add column email varchar(50);

-- q5: rename the 'department' column to 'dept_name'
alter table employees
rename column department to dept_name;

-- show table after alteration
select * from employees order by employees_id;

-- q6: retrieve the names of employees who joined after january 1, 2021
select first_name,last_name,joining_date 
from employees
where joining_date > '2021-01-01';

-- q7: change the data type of the 'salary' column to integer
alter table employees
alter column salary type integer;

-- q8: list all employees with their age and salary in descending order of salary
select first_name,last_name,salary,age 
from employees
order by salary desc;

-- q9: insert a new employee with given details
insert into employees(first_name, last_name, dept_name, salary, joining_date, age) values
('raj','singh','marketing',60000,'2023-09-15',30);

-- show all employees after insertion
select * from employees order by employees_id;

-- q10: update age of employee +1 to every employee
update employees
set age = age + 1;
