<?php


session_start();
 

 include_once("session.php");
include_once("config.php");

$ff=mysqli_query($mysqli,"select * from reservation where email='$em'");

while($result=mysqli_fetch_array($ff)){
    $pp        = $result['payment'];
    $ss     =$result['service_price'];
    $pays = $pp - $ss ;
  }

 

   $rds="update reservation set payment = '$pays' where email='$em'";


  $rs="update reservation set  service_name=' ', request=' ',request_price=' ', service_price='0', requestin = ' ', service_notif='Service and Request  been Canceled! ' where email='$em'";

   if (mysqli_query($mysqli,$rs)) {    header("Location:myaccount.php");
    }
    else{
      echo '<script>alert("e rror") </script>';
    }
if (mysqli_query($mysqli,$rds)) {
    }
    else{
      echo '<script>alert("error") </script>';
    }
         
?>