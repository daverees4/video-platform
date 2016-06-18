<?php
  
use Aws\S3\Exception\S3Exception;
  
require 'start.php';

if(isset($_FILES['file'])) {
  
  echo "FILE!";
  
  $file = $_FILES['file'];
  
  // File details
  
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  
  $extension = explode('.', $name);
  $extension = strtolower(end($extension));
  
  // Temp details
  
  $key = md5(uniqid());
  $tmp_file_name = "{$key}.{$extension}";
  $tmp_file_path = "./files/{$tmp_file_name}";
  
  // Move tempfile
  
  move_uploaded_file($tmp_file_name, $tmp_file_path);
  

  }

?>

<? include('layouts/header.php'); ?>
  <div class="row">
    <div class="columns">
      <h1>Upload</h1>
      <form action="upload.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="Upload">     	
      </form>
    </div>
  </div>
<? include('layouts/footer.php'); ?>
