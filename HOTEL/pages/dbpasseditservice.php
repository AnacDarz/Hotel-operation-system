<?php
include_once("config.php");


   if(isset($_POST['submitinfo'])){ 
  $IDsd=$_POST['newid'];
   $services=$_POST['services'];
   
   $price=$_POST['price'];
  

   $rs="update services set  service_name='$services', price='$price' where ID='$IDsd'";

   if (mysqli_query($mysqli,$rs)) {
    }
    else{
      echo '<script>alert("e rror") </script>';
    }

          header("Location:viewservice.php");
}
?>