select * from employees2;
select * from employees2 order by employee_id;


-- 1.Now()get current date and time
select Now() AS  current_date_time;

-- 2. CURRENT_DATE() TO get current date
select current_date as todays_date;

SELECT  joining_date, current_date AS todays_date, 
(current_date - joining_date) AS days_difference
FROM employees2;

-- 3. EXTRACT() Extract is a part of the date 
-- extracting the year, month and days from the joining_date column

select first_name,last_name,
extract(YEAR  from joining_date) as Year_Joined,
extract(MONTH FROM 	joining_date) as Month_joined,
extract (DAY FROM joining_date) as Day_joined
from employees2;

-- 4. AGE() Clculate age between Dates
-- caluculate time differencebetween joining_date and todays_date

select first_name,last_name,
AGE(CURRENT_DATE, joining_date) 
as Joining_since_date 
from employees2;


-- 5. TO_CHAR()- Format Date as a Strting
-- Formate joining_date in a custom_format(DD-Mon-YYYY)

select first_name,last_name,
TO_CHAR(joining_date,'DD-Month-YYYY') 
as joined_date 
from employees2;

--6. DATE_PART() Get Spacific date Part
-- Extract tje day of week from joining_date









