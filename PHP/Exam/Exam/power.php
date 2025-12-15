<?php
 function Power($base, $exponent) {
        $result = 1;
        for ($i = 0; $i < $exponent; $i++) {
            $result *= $base;
        }
        return $result;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $base = intval($_POST['base']);
        $exponent = intval($_POST['exponent']);

        echo "<h5>Base:</h5>";
        echo $base;

        echo "<h5>Exponent:</h5>";
        echo $exponent;

        echo "<h5>Result (Base^Exponent):</h5>";
        echo Power($base, $exponent);

    } 
?>