<!-- 2. Write a PHP script to swap two numbers without using the third variable -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Numbers</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h3 {
            color: #333;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
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
    <h3>Swapping Numbers</h3>
    <form action="swap_num.php" method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Swap Numbers">

    </form>
</body>
</html>