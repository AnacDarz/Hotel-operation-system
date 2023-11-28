<?php
include_once("config.php");


   if(isset($_POST['submitinfo'])){ 
  $IDsd=$_POST['newid'];
   $services=$_POST['services'];
   
   $price=$_POST['price'];
  

   $rs="update amenity_inventory set  amenity_name='$services', price='$price' where ID='$IDsd'";

   if (mysqli_query($mysqli,$rs)) {
     echo '<script>alert("Successfully Updated") </script>';
    }
    else{
      echo '<script>alert("error") </script>';
    }

          header("Location:viewamen.php");
}
?>