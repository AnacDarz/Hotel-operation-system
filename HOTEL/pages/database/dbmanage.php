<?php
include_once("config.php");
   

   $ID=$_REQUEST['ID'];
   $rm="";
   $name="";
   $IDs="";
   $pillow="";
   $rug="";
   $bedsheet="";
   $towel="";
   $electricfan="";
   $bed="";

 
   $rs=mysqli_query($mysqli,"select * from reports where ID='$ID'");
   if($result=mysqli_fetch_array($rs)){
    $ID        = $result['ID'];
    $rm        = $result['rooms'];
    $name        = $result['name'];

   
  

   }



   $rss=mysqli_query($mysqli,"select * from rooms where room_number='$rm'");
   if($result=mysqli_fetch_array($rss)){
    $IDs        = $result['ID'];
    $pillow        = $result['pillow'];
    $rug        = $result['rug'];
    $bedsheet        = $result['bedsheet'];
    $towel        = $result['towel'];
    $electricfan        = $result['electricfan'];
    $bed        = $result['bed'];
   
  

   }


?>