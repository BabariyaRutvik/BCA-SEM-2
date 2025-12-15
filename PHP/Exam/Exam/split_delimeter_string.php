<?php

if(isset($_POST['submit'])){

    $string = $_POST['inputString'];
    $delimiter = $_POST['delimiter'];

    // Split string into array
    $resultArray = explode($delimiter, $string);

    echo "<div class='result'><b>Original String:</b> $string <br><br>";
    echo "<b>Delimiter:</b> '$delimiter' <br><br>";
    echo "<b>Output Array:</b><br>";

    echo "<pre>";
    print_r($resultArray);
    echo "</pre></div>";
}

?>
