<?php 
   if($_SERVER["REQUEST_METHOD"] == "POST"){

        // convert the comma-separated strings into arrays
        $array_input = $_POST['array'];
        $array = array_map('intval', explode(',', $array_input));

        // getting the position(1 - based index) of element to be removed
        $position = intval($_POST['position']);

        echo "<h5>Original Array:</h5>";
        echo implode(", ", $array);


        // validating if element exists in array
        if($position < 1 || $position > count($array)){
            echo "<br>Element at position " . $position . " does not exist in the array.";
            exit;
        }
        // remove the element at the specified position
        $new_array = [];
        for($i = 0; $i < count($array); $i++){
            if($i == $position - 1){ // adjusting for 0-based index
                continue; // skip the element to be removed
            }
            else{
                $new_array[] = $array[$i]; // add other elements to new array
            }
            
        }
        echo "<h5>Array after removing element at position " . $position . ":</h5>";
        echo implode(", ", $new_array);

   }
?>