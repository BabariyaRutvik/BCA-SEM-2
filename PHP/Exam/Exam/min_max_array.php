<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $array_input = $_POST['array'];

        // Convert the comma-separated string into an array
       $arrayName =array_map('intval', explode(',', $array_input));


      


    }
    // function to find max value
   function Max_number($array){
       // if array is empty return null or return a very small number
       if(count($array) == 0){
           return PHP_INT_MIN;
       }
       $max = $array[0];
       $i = 1;

       while($i < count($array)){
           if($array[$i] > $max){
               $max = $array[$i];
           }
           $i++;
       }
       return $max;

   }
   function Min_number($array){
       // if array is empty return null or return a very large number
       if(count($array) == 0){
           return PHP_INT_MAX;
       }
       $min = $array[0];
       $i = 1;

       while($i < count($array)){
           if($array[$i] < $min){
               $min = $array[$i];
           }
           $i++;
       }
       return $min;

   }
    // get max and min
    $max = Max_number($arrayName);
    $min = Min_number($arrayName);

    // Display results
    echo "<h2>Results:</h2>";
    echo "Maximum Value: " . $max . "<br>";
    echo "Minimum Value: " . $min . "<br>";