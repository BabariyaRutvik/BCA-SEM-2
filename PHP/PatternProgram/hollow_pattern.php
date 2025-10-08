<?php
$n = 5;

$i = 1;
echo "<pre>"; // keeping alignment and spacing
while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        if ($i == 1 || $i == $n || $j == 1 || $j == $n) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;"; 
        }
        $j++;
    }
    echo "<br>";
    $i++;
}
echo "</pre>";
?>
