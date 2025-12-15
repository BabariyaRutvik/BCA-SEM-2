<?php

   if(isset($_POST['submit'])) {
      
    // folders to store upload files
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["textfile"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    // Check if file is a actual text file
    if($fileType != "txt" ) {
        echo "Sorry, only TXT files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

   }
    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES["textfile"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["textfile"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
   }
   

?>