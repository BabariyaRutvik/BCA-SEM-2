<?php

    // Function to reverse a string
    function reverseString($str) {
        $reversed = "";
        $length =0;

        // find length of the string
        while (isset($str[$length])) {
            $length++;
        }
        // reverse the string
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        return $reversed;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $string_input = $_POST['string'];

        echo "<h5>Original String:</h5>";
        echo $string_input;

        echo "<h5>Reversed String:</h5>";
        echo reverseString($string_input);

    }
?>