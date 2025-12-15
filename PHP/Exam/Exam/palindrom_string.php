<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // convert the comma-separated strings into arrays
    $string_input = $_POST['string'];
    $string = str_replace(' ', '', $string_input); // remove spaces

   
    // check if the string is a palindrome
    $is_palindrome = true;
    $length = strlen($string);

    // for loop to compare characters from start and end
    for($i = 0; $i < $length / 2; $i++){
        if($string[$i] != $string[$length - $i - 1]){
            $is_palindrome = false;
            break;
        }
    }
    echo "<h5>Input String:</h5>";

    if($is_palindrome){
       echo "<h3 style=\"color: green;\">" . "\"" . $string_input . "\" is a palindrome.</h3>";
    }
    else{
        echo "<h3 style=\"color: red;\">" . "\"" . $string_input . "\" is not a palindrome.</h3>";
    }

}
?>