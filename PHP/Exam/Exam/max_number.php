<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Using nested if else
    if ($a > $b) {
        if ($a > $c) {
            echo "Largest number is: $a";
        } else {
            echo "Largest number is: $c";
        }
    } else {
        if ($b > $c) {
            echo "Largest number is: $b";
        } else {
            echo "Largest number is: $c";
        }
    }
}
?>
