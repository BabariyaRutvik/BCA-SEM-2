<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
     echo "<h3>Prime numbers between 1 and 100 are:</h3>";

     $totalPrimes = 0;

     for($num = 2 ; $num <= 100 ; $num++){
        $isPrime = true;

        // Check divisibility only up to sqrt($num)
        for($i = 2 ; $i <= sqrt($num) ; $i++){
            if($num % $i == 0){
                $isPrime = false;
                break;
            }
        }

        if($isPrime){
            echo $num . " ";
            $totalPrimes++;
        }
     }

     echo "<br><br><strong>Total Prime Numbers are: $totalPrimes</strong>";
}

?>
