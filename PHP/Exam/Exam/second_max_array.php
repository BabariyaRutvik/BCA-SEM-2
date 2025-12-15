<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // convert the comma-separated strings into arrays
        $array_input = $_POST['array'];
        $array = array_map('intval', explode(',', $array_input));

        // if array has less than 2 elements
        if(count($array) < 2){
            echo "Array must contain at least two elements.";
            exit;
        }
        //find the largest element
        $max = $array[0];
        $i = 1;

        while($i < count($array)){
            if($array[$i] > $max){
                $max = $array[$i];
            }
            $i++;
        }
        //find the second largest element
        $second_max = PHP_INT_MIN;
        $i = 0;

        while($i < count($array)){
            if($array[$i] != $max && $array[$i] > $second_max){
                $second_max = $array[$i];
            }
            $i++;
        }
        // IF all elements are same
        if($second_max == PHP_INT_MIN){
            echo "There is no second largest element in the array.";
            

        }
        else{
            echo "The largest element in the array is: " . $max . "<br>";
            echo "<br>";
            echo "The second largest element in the array is: " . $second_max;

        }

       
    }
?>