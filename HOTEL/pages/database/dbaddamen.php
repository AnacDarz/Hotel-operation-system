
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $services=$_POST['services'];
   $price=$_POST['price'];
   
  

   $srs=mysqli_query($mysqli,"Insert Into amenity_inventory (amenity_name, price) values ('$services','$price')");

    if ($srs) {
      echo '<script>alert("Amenity Added!") </script>';

    }
    else{
      echo '<script>alert("Amenity is duplicated!") </script>';

    }
  
  
}

?>