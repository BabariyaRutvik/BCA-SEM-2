<!-- 9. Write a PHP program to find prime numbers between 1 and 100.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label {
            display: inline-block;
            width: 250px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="prime_numbers.php" method="post">
    <label>Click to see Prime Numbers between 1 to 100:</label>
    <input type="submit" value="Show Prime Numbers">
</form>

</body>
</html>
