<!-- 32. Write a PHP program to display the current date and time in the format "DD-MM-YYYY HH:MM:SS AM/PM" for the India timezone.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date and Time</title>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
    </style>

</head>
<body>
    <div class="box">
<h2>Current Date and Time</h2>

<?php
   
    date_default_timezone_set("Asia/Kolkata"); // India timezone
        
        $date = date("d-m-Y");
        $time = date("h:i:s A");

        echo "<p><b>Date:</b> $date</p>";
        echo "<p><b>Time:</b> $time</p>";



    

?>
    </div>


    
</body>
</html>