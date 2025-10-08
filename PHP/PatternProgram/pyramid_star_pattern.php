<?php
   $n = 5;

   $i = 1;

   while($i <= $n){
    $j =$i;
    while($j < $n){
        echo "&nbsp;&nbsp"; // spacing
        $j++;
    }
     $k =1;
     while($k <=(2* $i -1)){
        echo "*";
        $k++;
     }
    echo "<br>";
   $i++;

   }
   


?>