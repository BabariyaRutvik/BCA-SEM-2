<!-- 7. Write a PHP program to calculate the factorial of a number using both recursive and iterative methods.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 50dp;
        }
        h5{
            color: black;

        }
        label{
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
    <h5>Factorial Calculator</h5>
    <form action="factorial.php" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>