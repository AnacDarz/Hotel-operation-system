<?php
include_once("config.php");
   

   $ID=$_REQUEST['ID'];
   $roomnumber="";
   $roomtype="";
   $price="";
   $information="";
   $pillow="";
   $rug="";
   $bedsheet="";
   $towel="";
   $fan="";
   $bed="";

   $rs=mysqli_query($mysqli, "select * from rooms where ID='$ID'");

   if($result=mysqli_fetch_array($rs)){
    $ID        = $result['ID'];

   $roomnumber        = $result['room_number'];
   
   $roomtype        = $result['room_type'];
   $price       = $result['price'];
   $information      = $result['information'];
   $pillow        = $result['pillow'];
   $rug      = $result['rug'];
   $bedsheet      = $result['bedsheet'];
   $towel    = $result['towel'];
   $fan      = $result['electricfan'];
   $bed = $result['bed'];

   }
?>
