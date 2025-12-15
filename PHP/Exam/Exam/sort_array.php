<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

   // convert the comma-separated strings into arrays
    $array_input =$_POST['array'];
    $array =array_map('intval', explode(',', $array_input));
    // copy the original array to a new array in ascending and descending order
    $asc = $array;
    $desc = $array;


    //------------ Asceding Order ------------------    
    for($i = 0; $i < count($asc) - 1; $i++){
        for($j = 0; $j < count($asc) - $i - 1; $j++){
            if($asc[$j] > $asc[$j + 1]){
                // swap
                $temp = $asc[$j];
                $asc[$j] = $asc[$j + 1];
                $asc[$j + 1] = $temp;
            }
        }
    }
    // ----------- Descending Order ------------------
   for($i = 0; $i < count($desc) - 1; $i++){
        for($j = 0; $j < count($desc) - $i - 1; $j++){
            if($desc[$j] < $desc[$j + 1]){
                // swap
                $temp = $desc[$j];
                $desc[$j] = $desc[$j + 1];
                $desc[$j + 1] = $temp;
            }
        }
    }

    // Display results
    echo "<h2>Original Array:</h2>";
    echo implode(", ", $array);

    echo "<h2>Sorted Array in Ascending Order:</h2>";
    echo implode(", ", $asc);

    echo "<h2>Sorted Array in Descending Order:</h2>";
    echo implode(", ", $desc);

    
}
?>