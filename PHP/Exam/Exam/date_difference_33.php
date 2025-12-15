<!-- 33. Write a PHP program to calculate the difference between two dates.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Difference Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="date"] {
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>

    
</head>
<body>

    <h1>Date Difference Calculator</h1>
    <form method="post">
        <label for="date1">Enter first date (YYYY-MM-DD):</label>
        <input type="date" id="date1" name="date1" required>
        <br><br>
        <label for="date2">Enter second date (YYYY-MM-DD):</label>
        <input type="date" id="date2" name="date2" required>
        <br><br>
        <input type="submit" value="Calculate Difference">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];

        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        echo "<h2>Difference:</h2>";
        echo "<p>" . $interval->days . " days</p>";
    }
    ?>
    
</body>
</html>