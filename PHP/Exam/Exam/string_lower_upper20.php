<!-- 20. Write a PHP program to convert a string to lowercase and uppercase.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert a String to Lower and Uppercase</title>

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
    <h4>Convert a String to Lowercase and Uppercase</h4>
    <form method="POST" action="string_lower_upper.php">
        <label for="string">Enter a String:</label><br>
        <input type="text" id="string" name="string" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>