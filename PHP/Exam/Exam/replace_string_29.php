<!-- 29. Write a PHP program to find and replace words in a string.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find And Replace Words in a String</title>
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
        <h2>Find And Replace Words in a String</h2>
        <form action="replace_string.php" method="post">
            <input type="text" name="originalString" placeholder="Enter original string" required><br><br>
            <input type="text" name="searchString" placeholder="Enter word to find" required><br><br>
            <input type="text" name="replaceString" placeholder="Enter word to replace with" required><br><br>
            <input type="submit" name="submit" value="Replace">
        </form>

        
    </body>
    </html>