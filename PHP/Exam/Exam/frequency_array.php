<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // convert the comma-separated strings into arrays
    $array_input = $_POST['array'];
    $array = array_map('intval', explode(',', $array_input));


    echo "<h5>Frequency Array:</h5>";

    // create a another array to marked counted elements
    $array2 = array_fill(0, count($array), false);


    // for loop for each elements
    for($i = 0; $i < count($array); $i++){

        // skip already counted elements
        if($array2[$i] == true){
            continue;
        }

        $count = 1; // initialize count

        // count frequency of current element
        for($j = $i + 1; $j < count($array); $j++){
            if($array[$i] == $array[$j]){
                $count++;
                $array2[$j] = true; // mark as counted
            }
        }

        // display frequency of current element
        echo "Element " . $array[$i] . " occurs " . $count . " times.<br>";
    }



}
?>