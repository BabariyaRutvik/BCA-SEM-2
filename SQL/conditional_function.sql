select * from employees2;

/*
 CASE Function - Categorised Based on condition
 i will categorised all Employess Salary into Particular range

 Highest Salary if the Salary is Greater then 50,000
 Midium Salary if the Salary between 10,000 to 39,999
 Lower Salary if Salary is Less then 20,000
*/

select first_name,last_name,Salary,
CASE
    WHEN Salary>=50000 then 'Highest Salary'
	WHEN Salary>=10000 and Salary<=39999 then 'Medium Salary'
	
ELSE
  'Lower Salary'
  END AS Salary_Range
  from employees2;

  

