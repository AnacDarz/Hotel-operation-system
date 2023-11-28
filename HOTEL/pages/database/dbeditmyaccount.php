<?php
include_once("config.php");



 include_once("session.php");

if(isset($_POST['submitinfo'])){
  
   $ems=$_POST['email'];

   $name =$_FILES['image']['name'];
   $target_dir = "picture/";
   $imgs=$target_dir . basename($_FILES["image"]["name"]);

 $imageFileType = strtolower(pathinfo($imgs,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  $srs="update reservation set images='$name' where email='$ems'";

    if (mysqli_query($mysqli,$srs)) {
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$name);
    }
    else{
      echo '<script>alert("error") </script>';
    }
  }
?>