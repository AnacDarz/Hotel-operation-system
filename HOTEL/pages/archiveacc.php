<?php



session_start();

include_once("config.php");

 

 include_once("session.php");

  $ID=$_REQUEST['ID'];
 
    $srss=mysqli_query($mysqli,"update accounts set groups='Archived' where ID='$ID'");


header("Location:accounts.php");


?>