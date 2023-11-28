<?php



include_once("config.php");

 


  $ID=$_REQUEST['ID'];
  
 
    $srss=mysqli_query($mysqli,"delete from services where ID='$ID'");


header("Location:viewservice.php");


?>