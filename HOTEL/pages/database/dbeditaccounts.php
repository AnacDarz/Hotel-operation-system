<?php
include_once("config.php");
   

   $item_code=$_REQUEST['item_code'];
   $fn="";
   $ln="";
   $con="";
   $adds="";
   $em="";
   $grps="";
   $pass="";
   $starts="";
   $ends="";
   $timestart="";
   $timeend="";

   $rs=mysqli_query($mysqli, "select * from accounts where ID='$item_code'");

   if($result=mysqli_fetch_array($rs)){
    $item_code        = $result['ID'];

   $fn        = $result['firstname'];
   
   $ln        = $result['lastname'];
   $con       = $result['contact'];
   $adds      = $result['address'];
   $em        = $result['email'];
   $grps      = $result['groups'];
   $pass      = $result['password'];
   $starts    = $result['date_start'];
   $ends      = $result['date_end'];
   $timestart = $result['time_start'];
   $timeend   = $result['time_end'];

   }


?>