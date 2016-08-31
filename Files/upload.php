<?php
$target_dir = "uploads/uploadedFile.csv";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if($imageFileType == 'csv') {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir);
    }
    $fileLines = file($target_dir);
    foreach ($fileLines as $key=>$value) {
        echo "$value</br>";
    }
}