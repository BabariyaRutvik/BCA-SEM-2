<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if ($number % 2 == 0) {
        echo "<h3>$number is an Even Number.</h3>";
    } else {
        echo "<h3>$number is an Odd Number.</h3>";
    }
}
?>
