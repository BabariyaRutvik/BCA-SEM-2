<!-- 26 . Write a PHP program to search for a specific word in a text file.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching the Text From TEXT File</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
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
    
<div style="text-align: center;">
    <h2>Searching the Text From TEXT File</h2>
    <form action="search_text.php" method="post">
        <input type="text" name="search" placeholder="Enter text to search" required>
        <input type="submit" name="submit" value="Search">
    </form>
</div>
</body>
</html>