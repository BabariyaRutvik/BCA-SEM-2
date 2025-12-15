<!--10. write a php program to find a multiplication table for a given number-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

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

<h3>Multiplication Table</h3>

<form action="multi.php" method="post">
<label>Enter a number:</label>
<input type="number" name="number" required>
<input type="submit" value="Generate Table">
</form>
<body>
    
</body>
</html>