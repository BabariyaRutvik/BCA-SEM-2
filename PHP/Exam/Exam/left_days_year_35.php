<!-- 35. Write a PHP program to calculate the number of days left in the year from a given date.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days Left in the Year </title>

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
            background-color: #17a2b8;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #117a8b;
        }
    </style>
</head>
<body>
    <h1>Days Left in the Year Calculator</h1>
    <form method="post">
        <label for="inputDate">Enter a date (YYYY-MM-DD):</label>
        <input type="date" id="inputDate" name="inputDate" required>
        <input type="submit" name="submit" value="Calculate Days Left">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $inputDate = $_POST['inputDate'];
        $date = new DateTime($inputDate);
        $endOfYear = new DateTime($date->format('Y') . '-12-31');
        $interval = $date->diff($endOfYear);
        echo "<h2>Days left in the year: " . $interval->days . "</h2>";
    }
    ?>

    
</body>
</html>