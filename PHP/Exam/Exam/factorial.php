<?php

 function FactorialRecursive($n){
    if($n <= 1){
        return 1;
    } else {
        return $n * FactorialRecursive($n - 1);
    }

 }

function FactorialIterative($n){
    $factorial = 1;
    $i = 1;
    while($i <= $n){
        $factorial = $factorial * $i;

        $i++;
    } // end while
    return $factorial;

}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = intval($_POST['number']); 

    $factorial_recursive = FactorialRecursive($num);
    $factorial_iterative = FactorialIterative($num);

    echo "<h3>Factorial of $num:</h3>";
    echo "<p>Using Recursion: $factorial_recursive</p>";
    echo "<p>Using Iteration: $factorial_iterative</p>";
}
?>