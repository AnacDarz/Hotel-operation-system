<?php
include_once("config.php");
   

   $ID=$_REQUEST['ID'];
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

   $rs=mysqli_query($mysqli, "select * from amenity_inventory where ID='$ID'");

   if($result=mysqli_fetch_array($rs)){
    $ID        = $result['ID'];
   $services        = $result['amenity_name'];
   $price        = $result['price'];
  

   }


?>