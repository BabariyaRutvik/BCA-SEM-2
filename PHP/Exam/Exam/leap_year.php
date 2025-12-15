<!-- 5. Write a PHP program to check whether a year is a leap year.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 50dp;
        }
        h3{
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
    <h3>Check Leap Year</h3>
    <form action="leap_year_or_not.php" method="post">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>