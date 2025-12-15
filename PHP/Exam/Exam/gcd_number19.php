<!-- 19. Write a PHP program to find the GCD (Greatest Common Divisor) of two numbers.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD Number of Two Numbers</title>

    <style>
       body{
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label{
            font-weight: bold;
        }
        input[type="number"]{
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
    <h4>Find GCD of Two Numbers</h4>
    <form method="POST" action="gcd_number.php">
        <label for="num1">Enter first number:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calculate GCD">
    </form>

    
</body>
</html>