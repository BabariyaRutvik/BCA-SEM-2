<?php
  $num = 1;
  $i = 1;

  while($i <= 5){
    $j = 1;
    while($j <= $i){
        echo $num . " ";
        $num++;
        $j++;
    }
    echo "<br>";
    $i++;
  }
?>