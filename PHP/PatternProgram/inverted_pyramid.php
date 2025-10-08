<?php
$n = 5;
$i = $n;

while ($i >= 1) {
    // Print spaces
    $j = $n;
    while ($j > $i) {
        echo "&nbsp;&nbsp;";
        $j--;
    }

    // Print stars
    $k = 1;
    while ($k <= (2 * $i - 1)) {
        echo "*";
        $k++;
    }

    echo "<br>";
    $i--; 
}
?>
