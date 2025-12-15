<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $array1_input = $_POST['array1'];
    $array2_input = $_POST['array2'];

    // Convert the comma-separated strings into arrays
    $array1 = array_map('intval', explode(',', $_POST['array1']));
    $array2 = array_map('intval', explode(',', $_POST['array2']));


    // Merge arrays and remove duplicates
    function MergeArrays($array1, $array2){
       
        // size = size of both arrays
        $newsize = count($array1) + count($array2);
        $newarray = array_fill(0, $newsize , 0);

        $i = 0;
        $j = 0;
        $k = 0;

        while($i < count($array1) || $j < count($array2)){

            
            if($j == count($array2) || ($i < count($array1) && $array1[$i] < $array2[$j])){
                $newarray[$k] = $array1[$i];
                $i++;
                $k++;
            }else{
                $newarray[$k] = $array2[$j];
                $j++;
                $k++;
            }
        }

        return $newarray; // return merged array (with duplicates)
    }

    // remove duplicates from Merged array
    function RemoveDuplicates($array){
        return array_unique($array);
    }

    // get merged array
    $merged_array = MergeArrays($array1, $array2);
    $result_array = RemoveDuplicates($merged_array);
    
    // Display results
    echo "<h2>Merged Array with Duplicates:</h2>";
    echo implode(", ", $merged_array);

    echo "<br>";
    echo "<h2>Merged Array without Duplicates:</h2>";
    echo implode(", ", $result_array);

  }
?>
