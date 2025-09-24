select * from employees2;


-- between salary 45000 to 60000
select first_name,last_name,salary from employees2
where salary between 45000 AND 60000;

-- LIKE  operator
select first_name,last_name from employees2
where first_name like 'R%';

-- IN Operator
select first_name,last_name, Department
from employees2
where department in('Marketing','IT');







