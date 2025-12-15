<?php

  // only update if form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $elements = intval($_POST['elements']);
    $array_input = $_POST['array'];

    // Convert the comma-separated string into an array
    $array = array_map('trim', explode(',', $array_input));

    // Validate the number of elements
    if(count($array) != $elements){
        echo "Error: Number of elements entered does not match the specified count.";
        exit;
    }

    // Calculate sum and average
    // function to calculate sum
    function Sum($array){
        $sum = 0;
        $i = 0;

        while($i < count($array)){
            $sum += floatval($array[$i]);
            $i++;
        }
        return $sum;
    }  
    // function to calculate average
    function Average($array){
        $sum = Sum($array);
        return $sum / count($array);
    }
    // get sum and average
    $sum = Sum($array);
    $average = Average($array);
    
      

    }

    // Display results
    echo "<h2>Results:</h2>";
    echo "Sum: " . $sum . "<br>";
    echo "Average: " . $average . "<br>";
  
?>