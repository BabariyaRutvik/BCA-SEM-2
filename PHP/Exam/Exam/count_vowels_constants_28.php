<!-- 28. Write a PHP program to count the number of vowels and consonants in a string using constants.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels and Constants</title>

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

<h2>Count Vowels and Consonants in a String</h2>
<form method="post" action="count_vowels_constants.php">
    <label for="inputString">Enter a string:</label><br><br>
    <input type="text" id="inputString" name="inputString" required>
    <br><br>
    <input type="submit" name="submit" value="Count Vowels and Consonants">
</form>

    
</body>
</html>