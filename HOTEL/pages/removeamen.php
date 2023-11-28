<?php



include_once("config.php");

 


  $ID=$_REQUEST['ID'];
  
 
    $srss=mysqli_query($mysqli,"delete from amenity_inventory where ID='$ID'");


header("Location:viewamen.php");


?>