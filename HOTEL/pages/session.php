<?php 

include_once("config.php");

$uname = $_SESSION['sid'];  


echo "<input type='hidden' value='$uname' name='em' required/>";

$em = $_SESSION['sid'];  


      $sr=mysqli_query($mysqli,"select * from accounts where email='$em'");
 while ( $ser=mysqli_fetch_array($sr)) {
    $getname= $ser['firstname'];
     $getlname= $ser['lastname'];
     $ult  = $ser['firstname'].' '.$ser['lastname'];
    $getid = $ser['ID'];
    $getcontact = $ser['contact'];
    $getaddress = $ser['address'];
 }
?>
