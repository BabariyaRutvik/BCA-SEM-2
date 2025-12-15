<!-- 18. Write a PHP function to check whether a string is a palindrome.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrom String</title>

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

    <h3>Check if a String is a Palindrome</h3>
    <form method="POST" action="palindrom_string.php">
        <label for="string">Enter a String:</label><br>
        <input type="text" id="string" name="string" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>