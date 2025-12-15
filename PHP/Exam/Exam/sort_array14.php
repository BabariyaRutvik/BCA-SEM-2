<!-- 14. Write a PHP program to sort an array in ascending and descending order.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array in Ascending and Descinding Order</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label{
            font-weight: bold;
        }
        input[type="text"]{
            width: 300px;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"]{
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: #45a049;
        }
        </style>
</head>
<body>

<form action="sort_array.php" method="post">
   <label for="array">Enter Elements of Array (comma separated)</label><br>
   <input type="text" name="array" id="array" required><br><br>
    <input type="submit" value="Sort Array">


    
</body>
</html>