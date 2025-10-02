create table employees2 (
    employee_id serial primary key,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    department varchar(50),
    salary decimal(10,2) check (salary > 0),
    joining_date date not null,
    age int check (age >= 18)
);

insert into employees2 (first_name, last_name, department, salary, joining_date, age) values
('Rutvik', 'Babariya', 'IT', 55000.00, '2022-07-15', 25),
('Aarav', 'Sharma', 'Finance', 48000.00, '2021-03-10', 28),
('Neha', 'Patel', 'HR', 42000.00, '2020-11-01', 30),
('Priya', 'Mehta', 'IT', 60000.00, '2023-01-20', 26),
('Rahul', 'Verma', 'Marketing', 45000.00, '2022-05-25', 29),
('Sneha', 'Joshi', 'Finance', 50000.00, '2021-09-18', 32),
('Vikas', 'Kumar', 'Operations', 47000.00, '2020-06-12', 35),
('Karan', 'Singh', 'IT', 65000.00, '2023-03-05', 27),
('Anjali', 'Desai', 'HR', 43000.00, '2022-12-10', 24),
('Manish', 'Gupta', 'Marketing', 52000.00, '2021-08-30', 31);

-- 1. Show all employee details from the table.
select * from employees2;

-- 2. Display only first name, last name, and salary of employees.
select first_name,last_name,salary from employees2;

-- 3. Find employees working in the IT department.
select * from employees2
where department='IT';

-- 4. Find employees with salary greater than 50,000.
select * from employees2
where salary>50000;

-- 5. Find employees who joined after 1st Jan 2022.
select employee_id,first_name,last_name,joining_date from employees2
where joining_date>'2022-01-01';

-- 6. Find employees whose age is between 25 and 30.
select * from employees2
where age between 25 and 30;

--7. List employees in descending order of salary.
select * from employees2
order by salary desc;

-- 8. List employees in ascending order of joining date.
select * from employees2
order by joining_date asc;

-- 9. Count the total number of employees.
select count(*) as Total_Employees
from employees2;

-- 10. Count how many employees work in each department.
select department, count(*) as Total_Employees
from employees2
group by department;

-- 11. Find the average salary of all employees.
select avg(salary) as Average_Salary
from employees2;

-- 12. Find the employee(s) who has the highest salary.
select * from employees2
where salary=(select max(salary) from employees2);

-- 13. Find the employee(s) who has the lowest salary.
select * from employees2
where salary =(select min(salary) from employees2);

-- 14. Find employees whose first name starts with 'R'.
select * from employees2
where first_name like 'R%';

-- 15. Find employees whose last name ends with 'a'.
select * from employees2
where first_name like '%a';

-- 16. Increase the salary of all employees in the HR department by 10%.
update employees2
set salary=salary*1.10
where department='HR';

-- 17. Delete all employees younger than 25 years.
delete from employees2
where age<25;
select * from employees2 order by employee_id;

-- 18. Find employees with salary between 45,000 and 60,000.
select first_name,last_name,salary from employees2
where salary between 45000 and 60000;

-- 19. Find employees who joined in the year 2021.
select * from employees2
where extract (year from joining_date)=2021;

-- 20. Show the department-wise average salary.
select department, avg(salary) avarage_salary from employees2
group by department;

-- retrive first_name,last_name, salary and calculate 10% bonus on the salary
select first_name, last_name, salary, (salary * 1.10) as Bonus
from employees2;

-- calculate the annual salary and salary increment by 5% show yhe monthly new salary as well.
select first_name,last_name,salary,
		(salary*12) as Annual_salary,
		(salary*0.05) as increment_salary,
		(salary+salary*0.05) as new_salary,
		(salary*1.05)as new_salary2
from employees2;

--

























