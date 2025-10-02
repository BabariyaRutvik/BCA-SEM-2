-- creating Categories Table
create table Categories(categoryId SERIAL PRIMARY KEY,
categoryName varchar(50) NOT NULL UNIQUE);
select * from Categories;


-- inserting data into Categories table
insert into Categories(categoryName) values('Electronics'),
('Appliances'),
('Furniture'),
('Accessories'),
('Sports');

-- creating table products
create table products(productID SERIAL PRIMARY KEY, 
productName varchar(100) NOT NULL UNIQUE,
CategoryID int NOT NULL,
price DECIMAL(10,2) CHECK(price>0),
stock int DEFAULT 0 CHECK(stock>=0),
manufactureDate DATE DEFAULT CURRENT_DATE,
FOREIGN KEY(categoryID) REFERENCES Categories(categoryId));

-- Create Index for faster searching on productName
create index product_name on products(productName);

-- 1. 
select * from products;


-- inserting Data into products table
INSERT INTO Products (productName, categoryID, price, stock, manufactureDate) VALUES
('Laptop', 1, 55000.00, 20, '2023-05-10'),
('Smartphone', 1, 30000.00, 50, '2023-07-15'),
('Headphones', 4, 2000.00, 100, '2023-04-05'),
('Smartwatch', 1, 12000.00, 40, '2023-08-20'),
('Refrigerator', 2, 45000.00, 10, '2022-12-01'),
('Microwave Oven', 2, 15000.00, 15, '2023-01-25'),
('Bookshelf', 3, 8000.00, 12, '2023-02-14'),
('Office Chair', 3, 7000.00, 25, '2023-06-30'),
('Water Bottle', 4, 500.00, 200, '2023-09-05'),
('Gaming Console', 1, 40000.00, 8, '2023-03-12'),
('Tennis Racket', 5, 3500.00, 30, '2023-02-01'),
('Football', 5, 1200.00, 100, '2023-07-10'),
('Air Conditioner', 2, 38000.00, 5, '2022-11-15'),
('Dining Table', 3, 20000.00, 7, '2023-01-20'),
('Bluetooth Speaker', 4, 4500.00, 60, '2023-04-18'),
('Earbuds', 4, 2500.00, 120, '2023-06-22'),
('Printer', 1, 15000.00, 18, '2023-05-05'),
('Washing Machine', 2, 32000.00, 6, '2022-12-28'),
('Sofa', 3, 30000.00, 9, '2023-03-01'),
('Cricket Bat', 5, 2200.00, 50, '2023-07-25');

-- 2. Add a new column brand to Products
alter table products 
add column brand varchar(50);

select * from products;

-- 3. Drop the brand column
alter table products
drop column brand;

-- 4. Rename Products table to ProductItems
alter table products
rename to ProductsItem;

-- 5. Drop Products table
drop table products;

-- 6. Insert a new Products
INSERT INTO ProductsItem (productName, categoryID, price, stock) 
VALUES ('Tablet', 1, 25000.00, 15);

select * from ProductsItem;

--7. Update stock of Refrigerator
update ProductsItem
set stock=stock+5
where productName='Refrigerator';

-- 8. Delete products with stock = less then 10
delete from ProductsItem
where stock<10;

select * from ProductsItem order by productid asc;

-- 9. Show all Electronics products
select * from ProductsItem
p join Categories c on p.categoryId=c.categoryId
where c. categoryName='Electronics';


-- 10. Find average price of each category
select c.categoryName, avg(p.price) as AvgPrice
from ProductsItem p join Categories c on p.categoryId=c.categoryId
group by c. categoryName;

-- 11. Find top 3 most expensive products
select productName,price from ProductsItem 
order by price desc limit 3;

-- 12. Show products where stock > 50 using CASE
select productName,stock,
CASE 
		WHEN stock >50 then 'High Stocks'
		WHEN stock between 20 and 50 then 'Medium Stocks'
		ELSE 'Low Stocks'
		END AS StockStatus
		
from ProductsItem;

-- 13. Show products with "phone" in name (LIKE)
select * from ProductsItem where productName like '%phone%';

-- 14. Show total stock count
select sum(stock) as TotalStock from ProductsItem;

-- 15. Find products cheaper than average price
select * from ProductsItem 
where price<(select avg(price) from ProductsItem);

-- 16. Use IF to mark expensive items (price > 30000)



-- 17. Show products manufactured in 2023
select productName, manufactureDate
from ProductsItem
where extract(year from manufactureDate) = 2023;

-- 18. Start a transaction and update stock
BEGIN;

UPDATE ProductsItem 
SET stock = stock - 2
WHERE productName = 'Laptop';

SAVEPOINT UpdateStock;

-- if needed, rollback just this update:
ROLLBACK TO UpdateStock;

-- finish transaction
COMMIT;

select * from ProductsItem order by productid asc;




















