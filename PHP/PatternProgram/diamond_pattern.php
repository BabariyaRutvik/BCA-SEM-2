<pre>
<?php

  $n = 5;
  
  // Upper Pyramid

  $i = 1;
  while($i <= $n){
    // Printing the Space
    $j = $i;
    while($j < $n){
        echo " ";
        $j++;

    }
    // Printing the Star
    $k = 1;
    while($k <= (2 * $i -1 )){
        echo "*";
        $k++;
    }
    echo "\n";
    $i++;

  }
  // Lower inverted Pyramid
  $i = $n - 1;
  while($i >= 1){
    // Printing the space for the inverted pyramid
    $j = $n;
    while($j > $i){
        echo " ";
        $j--;

    }
    // Printing the inverted Pyramid Star

    $k = 1;
    while($k <= (2 * $i -1)){
        echo "*";
        $k++;
    }
    echo "\n";
    $i--;

  }
?>

</pre>