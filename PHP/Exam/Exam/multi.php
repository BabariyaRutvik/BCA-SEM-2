<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$number = $_POST['number'];

 $i = 1;

 while($i <= 10){
    echo $number ." * ". $i . " = ".($number * $i)."<br>";
    $i++;

 }
}
?>