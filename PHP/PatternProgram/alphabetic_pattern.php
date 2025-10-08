<?php
  $char = 'A';
  $i = 1;

  while($i <= 5){
    $j = 1;
    while($j <= $i){
        echo $char . " ";
        $j++;
    }
    $char++;
    echo "<br>";
    $i++;

  }
?>