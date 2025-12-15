<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);

    // Function to calculate GCD
    function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    $result = gcd($num1, $num2);
    echo "<h5>Input Numbers:</h5>";
    echo "<p>Number 1: $num1</p>";
    echo "<p>Number 2: $num2</p>";
    echo "<h3>GCD: $result</h3>";
}
?>