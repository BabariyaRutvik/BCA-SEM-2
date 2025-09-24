create table employees(
    empid int primary key,
    firstname varchar(50),
    lastname varchar(50),
    hiredate date,
    salary float
);

insert into employees(empid, firstname, lastname, hiredate, salary)
values(1, 'john', 'smith', '2024-01-01', 50000);

update employees
set salary = 55000
where empid = 1;

select firstname, lastname, salary
from employees
where empid = 1;
