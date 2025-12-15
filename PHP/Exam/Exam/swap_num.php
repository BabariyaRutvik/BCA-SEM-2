<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Swapping without a third variable
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;

    echo "<h3>After Swapping:</h3>";
    echo "First Number: " . $num1 . "<br>"; 
    echo "Second Number: " . $num2 . "<br>";    
}
?>