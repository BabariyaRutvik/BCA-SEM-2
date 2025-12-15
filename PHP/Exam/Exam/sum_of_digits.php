<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number=$_POST['number'];
    $sum = 0;
    $temp = $number;
    $digits = array();

    while($temp > 0){
        $digit = $temp % 10;
        $sum += $digit;
        $digits[] = $digit;
        $temp = (int)($temp / 10);


    }
    $digits = array_reverse($digits);
    echo "Digits: " . implode(" + ", $digits) . "<br>";

    echo "<h3>Sum of digits of $number is: $sum</h3>";

}

?>