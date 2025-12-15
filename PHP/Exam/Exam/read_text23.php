<!-- 23. Write a PHP program to read a text file and display its content.-->
<?php

$filename = 'exam.txt';


if(file_exists($filename)){
    $content = readfile($filename);
}
else
{
    echo "File does not exist.";
}
?>