<!-- 27. Write a PHP program to upload a file to the server.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload text file to the Server</title>

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
        input[type="file"] {
            padding: 10px;
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
    <h2>Uploading a Text File to the Server</h2>
    <form action="upload_php.php" method="post" enctype="multipart/form-data">
        <input type="file" name="textfile" accept=".txt" required>
        <input type="submit" name="submit" value="Upload">
    </form>


    
</body>
</html>