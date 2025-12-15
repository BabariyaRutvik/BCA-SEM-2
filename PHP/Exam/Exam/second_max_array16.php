<!-- 16. Write a PHP program to find the second largest elements in an array.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Largest Elements in an Array</title>
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

    <h2>Find the Second Largest Elements in an Array</h2>
    <form method="POST" action="second_max_array.php">
        <label for="array">Enter array elements (comma-separated):</label><br>
        <input type="text" id="array" name="array" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>