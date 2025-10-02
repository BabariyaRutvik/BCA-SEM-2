CREATE TABLE Products (
    ProductID SERIAL PRIMARY KEY,
    ProductName VARCHAR(50),
    Category VARCHAR(30),
    Price DECIMAL(10,2),
    Quantity INT
);
INSERT INTO Products (ProductName, Category, Price, Quantity) VALUES
('Laptop', 'Electronics', 55000.00, 10),
('Smartphone', 'Electronics', 25000.00, 20),
('Headphones', 'Electronics', 2000.00, 50),
('Keyboard', 'Electronics', 1500.00, 30),
('Refrigerator', 'Home Appliances', 30000.00, 5),
('Washing Machine', 'Home Appliances', 22000.00, 8),
('Microwave Oven', 'Home Appliances', 12000.00, 12),
('Sofa', 'Furniture', 18000.00, 4),
('Dining Table', 'Furniture', 25000.00, 3),
('Chair', 'Furniture', 3000.00, 15);

select * from products;

-- Total Quantity of all Products (SUM Function)
select SUM(quantity) as Total_Quantity from products;

select SUM(quantity) as Total_Electronics
from products
where category='Electronics' and price >45000;


-- Total product(COUNT)

select count(*) as Total_Product
from products;

-- count wqith condition
SELECT COUNT(*) AS Total_Phones
FROM Products
WHERE ProductName LIKE '%phone%';


-- Average of Price
select avg(price) as Average_Price
from products;

-- Average price with condition
select avg(price) as Average_Price
from products
where category='Furniture';

select * from products;


-- MAX FUNCTION() and MIN FINCTION()

select max(price) as Max_Price,
       min(price) as Min_Price
from products;


	   










