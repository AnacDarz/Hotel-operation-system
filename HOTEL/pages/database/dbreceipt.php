<?php
include_once("config.php");


if(isset($_POST['submitinfo'])){
  



   $name =$_FILES['image']['name'];
   $target_dir = "picture/";
   $imgs=$target_dir . basename($_FILES["image"]["name"]);

 $imageFileType = strtolower(pathinfo($imgs,PATHINFO_EXTENSION));

  // Valid file extensions
 



$srs="update reservation set image='$name' where email='$em'";

    if (mysqli_query($mysqli,$srs)) {
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$name);
    }
    else{
      echo '<script>alert("error") </script>';
    }
  }
?>


