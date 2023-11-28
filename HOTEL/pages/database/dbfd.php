<?php
 include_once("session.php");
include_once("config.php");



   $fname="";
   $lname="";
   $contact="";
   $email="";
   $address="";
   $datestart="";
   $dateend="";
   $timestart="";
   $timeend="";


 $rs=mysqli_query($mysqli,"select * from accounts where email='$em'");

   if($result=mysqli_fetch_array($rs)){
   	 $fname=$result['firstname'];
      $lname=$result['lastname'];
       $contact=$result['contact'];
      $email=$result['email'];
      $address=$result['address'];
      $datestart=$result['date_start'];
      $dateend=$result['date_end'];
     $timestart=$result['time_start'];
     $timeend=$result['time_end'];

   }


?>