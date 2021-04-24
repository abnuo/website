<?php
$target_dir = "temp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if lucette asspic is an actual boner or fake boner

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists, You may be trying to reconvert this.";
  include 'form.php';
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5555000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "vgm") {
  echo "Sorry, only VGM files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    include 'form.php';
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
