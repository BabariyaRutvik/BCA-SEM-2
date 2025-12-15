<!-- 25. Write a PHP program to count the number of lines, words, and characters in a text file.-->
<?php 
$filename = 'exam.txt';

// chick if the file exists
if(!file_exists($filename)){
  echo "File does not exist.";
  exit;
}
//reading the full content of the file
$content = file_get_contents($filename);

// counting the number of Lines in the content
$lines = substr_count($content, PHP_EOL);
echo "Number of lines: " . $lines;
echo "<br><br>";
// counting the number of Words in the content
$words = str_word_count($content);
echo "Number of words: " . $words;
echo "<br><br>";

// counting the number of Characters in the content
$characters = strlen($content);
echo "Number of characters: " . $characters;
echo "<br><br>";


?>