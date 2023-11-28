
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $services=$_POST['services'];
   $price=$_POST['price'];
   
  

   $srs=mysqli_query($mysqli,"Insert Into services (service_name, price) values ('$services','$price')");

    if ($srs) {
      echo '<script>alert("Service Added!") </script>';

    }
    else{
      echo '<script>alert("service is duplicated!") </script>';

    }
  
  
}

?>