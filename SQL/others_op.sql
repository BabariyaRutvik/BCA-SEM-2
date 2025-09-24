select * from employees2;


-- NULL Operator
select first_name,last_name
from employees2
where last_name is NULL;


-- ORDER BY Opertor
select employee_id, first_name,last_name,salary from employees2
order by Employee_id ASC;

-- LIMIT Operator
select first_name,last_name,Salary,Department
from employees2
order by Salary DESC
limit 5;

-- DISTINCT Operator

select distinct department 
from employees2;





