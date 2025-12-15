<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $num = intval($_POST['number']); 

   $a = 0;
   $b = 1;

   echo "<h3>Fibonacci Series up to $num:</h3>";
   
   echo "$a , $b";

   while( $a +$b <= $num){
      $c = $a + $b;


      echo " , $c";
      $a = $b;
      $b = $c;

   }

}
?>