<!-- 34. Write a PHP program to format a date in the "Y-m-d" format.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Formatter (Y-m-d)</title>

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
        input[type="text"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 300px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Date Formatter (Y-m-d)</h1>

<form method="post">
    <label for="inputDate">Enter a date (any format):</label>
    <input type="text" id="inputDate" name="inputDate" required>
    <input type="submit" name="submit" value="Format Date">
</form>

<?php
if (isset($_POST['submit'])) {
    $inputDate = $_POST['inputDate'];

    // Explicitly define the format d/m/Y
    $date = DateTime::createFromFormat('d/m/Y', $inputDate);

    // Check for valid date
    if ($date && $date->format('d/m/Y') === $inputDate) {
        echo "<h2>Formatted Date (Y-m-d): " . $date->format('Y-m-d') . "</h2>";
    } else {
        echo "<h2>Invalid date format. Please use DD/MM/YYYY</h2>";
    }
}
?>


</body>
</html>
