<!-- 3. Find the largest number out of Three-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Number out of three</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 50dp;
        }
        h2{
            color: #333;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        input[type="number"]{
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
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
    <h2>largest Number</h2>

    <form action="max_number.php" method="post">
        <label for="a" >Enter 1st Number</label>
        <input type="number" name="a" id="a" required><br><br>
        <label for="b">Enter 2nd Number</label>
        <input type="number" name="b" id="b" required><br><br>
        <label for="c">Enter 3rd Number</label> 
        <input type="number" name="c" id="c" required><br><br>
        <input type="submit" value="Find Largest Number">   

    </form>
</body>
</html>