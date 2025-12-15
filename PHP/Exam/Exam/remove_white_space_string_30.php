<!-- 30. Write a PHP program to remove a white space from a string.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove a White Space from a String</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<h2>Remove a White Space from a String</h2>
<form method="post" action="remove_white_space_string.php">
    <label for="inputString">Enter a string:</label><br><br>
    <input type="text" id="inputString" name="inputString" required>
    <br><br>
    <input type="submit" name="submit" value="Remove White Space">
</form>
    
</body>
</html>