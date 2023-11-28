<?php
include_once("config.php");


   if(isset($_POST['submitinfo'])){ 
  $IDsd=$_POST['NEWid'];
   $fn=$_POST['NEWfname'];
   
   $ln=$_POST['NEWlname'];
   $con=$_POST['NEWcontact'];
   $adds=$_POST['NEWaddress'];
   $em=$_POST['NEWemail'];
   $grps=$_POST['NEWgrp'];
   $pass=$_POST['NEWpass'];
   $starts=$_POST['NEWstart'];
   $ends=$_POST['NEWend'];
   $timestart=$_POST['NEWtimestart'];
   $timeend=$_POST['NEWtimeend'];

   $rs="update accounts set  firstname='$fn', lastname='$ln', contact='$con',  address='$adds', email='$em', 
                                            groups='$grps', password='$pass', date_start='$starts', date_end='$ends', time_start='$timestart', time_end='$timeend' where ID='$IDsd'";

   if (mysqli_query($mysqli,$rs)) {
    }
    else{
      echo '<script>alert("e rror") </script>';
    }

          header("Location:accounts.php");
}
?>