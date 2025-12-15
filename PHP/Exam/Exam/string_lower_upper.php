<?php 
 
 
      // convert the input string to lowercase and uppercase
    /*
    function toUppercase
    */
   function toUppercase($str){
     return strtoupper($str);
   }
    /*
    function toLowercase
    */
    function toLowercase($str){
      return strtolower($str);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $string_input = $_POST['string'];

        echo "<h5>Original String:</h5>";
        echo $string_input;

        echo "<h5>String in Lowercase:</h5>";
        echo toLowercase($string_input);

        echo "<h5>String in Uppercase:</h5>";
        echo toUppercase($string_input);

    }
 ?>