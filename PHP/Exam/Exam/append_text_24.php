<!-- 24. Write a PHP program to append text to an existing file.-->
<?php 
$filename = 'exam.txt';
$appended_text = "\nRutvik Babariya Getting closer to PHP";

// open the file in append mode
$file = fopen($filename, 'a');

if($file){
    // append the text to the file
    fwrite($file, $appended_text);
    // close the file
    fclose($file);
    echo "Text appended successfully.";
} else {
    echo "Unable to open the file.";
}
?>