<?php

    if(isset($_POST['submit'])){


        $inputString = $_POST['inputString'];


       // removing white spaces from the string
        $noSpaces = str_replace(' ', '', $inputString);

        echo "Original String: " . htmlspecialchars($inputString) . "<br>";
        echo "String without White Spaces: " . htmlspecialchars($noSpaces) . "<br>";
        
    }
?>