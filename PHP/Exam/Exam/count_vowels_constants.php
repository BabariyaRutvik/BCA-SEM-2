<?php

if(isset($_POST['submit'])){
    $str = strtolower($_POST['inputString']);
    $vowels = 0;
    $consonants = 0;

    for($i = 0; $i < strlen($str); $i++){
        $char = $str[$i];
        if($char >= 'a' && $char <= 'z'){
            if(in_array($char, ['a','e','i','o','u'])){
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }

    echo "Number of Vowels: $vowels<br>";
    echo "Number of Consonants: $consonants<br>";
}

?>
