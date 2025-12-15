<!-- 8. write a php program to print the sum of digits of a given number-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>

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

<h3> Sum of Digits</h3>

<form action="sum_of_digits.php" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Calculate Sum of Digits">
    
</form>
</body>
</html>