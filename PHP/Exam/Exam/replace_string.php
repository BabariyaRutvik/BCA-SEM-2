<?php

if(isset($_POST['submit'])){

    $text = $_POST['originalString'];
    $search = $_POST['searchString'];
    $replace = $_POST['replaceString'];

    $newText = str_replace($search, $replace, $text);

    echo "Original Text: <br>" . htmlspecialchars($text) . "<br><br>";
    echo "Modified Text: <br>" . htmlspecialchars($newText) . "<br>";
}

?>
