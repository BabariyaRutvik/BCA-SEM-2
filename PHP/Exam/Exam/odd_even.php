<!--4. Write a program to print odd even number-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Numbers</title>

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
    <h3>Odd Even Numbers</h3>

    <form action="odd_even_num.php" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check Odd/Even">
    </form>
</body>
</html>