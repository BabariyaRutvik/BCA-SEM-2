<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];

    if($year % 400== 0){
        echo "<h3>$year is a Leap Year.</h3>";
    }
    else if($year % 100 == 0){
        echo "<h3>$year is not a Leap Year.</h3>";
    }
    else if($year % 4 == 0){
        echo "<h3>$year is a Leap Year.</h3>";
    }
    else{
        echo "<h3>$year is not a Leap Year.</h3>";
    }
}
?>