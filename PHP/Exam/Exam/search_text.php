<?php


   if(isset($_POST['submit'])) {
       $searchText = $_POST['search'];
       $filename = 'exam.txt';
       $lineNumber = 1;

      if(file_exists($filename)){
        $lines = file($filename);
        $found = false;
        foreach($lines as $lineNumber => $lineContent){
            if(stripos($lineContent, $searchText) !== false){
                echo "Found on line " . ($lineNumber + 1) . ": " . htmlspecialchars($lineContent) . "<br>";
                $found = true;
            }
            $lineNumber++;
        }
        if (!$found) {
            echo "The text '<strong>" . htmlspecialchars($searchText) . "</strong>' was not found in the file.";
        }
        } else {
            echo "File does not exist.";
      }

   }
?>