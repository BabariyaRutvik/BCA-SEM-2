<!-- 22. Write a PHP function to calculate the power of a number without using pow() function.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculating a Number's Power (without using pow()) function</title>
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
    <h2>Calculating a Number's Power (without using pow() function) using PHP</h2>
    <form method="POST" action="power.php">
        
        <label for="base">Enter Base Number:</label><br>
        <input type="number" id="base" name="base" required><br><br>

        <label for="exponent">Enter Exponent:</label><br>
        <input type="number" id="exponent" name="exponent" required><br><br>

        <input type="submit" value="Calculate Power">
    </form>
    
</body>
</html>