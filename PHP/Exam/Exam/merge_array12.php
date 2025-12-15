<!-- 12. Write a PHP program to merge two arrays and remove duplicates. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge two Arrays and remove duplicates</title>

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

<form action="merge_array.php" method="post">
   <label for="array1">Enter Elements of First Array (comma separated)</label><br>
   <input type="text" name="array1" id="array1" required><br><br>

   <label for="array2">Enter Elements of Second Array (comma separated)</label><br>
   <input type="text" name="array2" id="array2" required><br><br>
    <input type="submit" value="Merge Arrays">
    
</body>
</html>