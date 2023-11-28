<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $req=$_POST['req'];
  

   $srs=mysqli_query($mysqli,"Insert Into room_dump (roomdump) values ('$req')");

    if ($srs) {
     
       header("Location:walkinfinal.php");
    }
    else{
      echo '<script>alert("ID is duplicated!") </script>';

    }
  
  
}

?>