
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $id=$_POST['id'];
   $fn=$_POST['fname'];
   
   $ln=$_POST['lname'];
   $con=$_POST['contact'];
   $adds=$_POST['address'];
   $em=$_POST['email'];
   $grps=$_POST['grp'];
   $pass=MD5($_POST['pass']);
   $starts=$_POST['start'];
   $ends=$_POST['end'];
   $timestart=$_POST['timestart'];
   $timeend=$_POST['timeend'];

   $srs=mysqli_query($mysqli,"Insert Into accounts (ID, firstname, lastname, contact, address,  email, groups, 
                                            password, date_start, date_end, time_start, time_end) values ('$id','$fn','$ln',
                                            '$con','$adds','$em',
                                            '$grps','$pass','$starts', '$ends', '$timestart','$timeend')");

    if ($srs) {
      echo '<script>alert("Account has been created.") </script>';

    }
    else{
      echo '<script>alert("ID is duplicated!") </script>';

    }
  
  
}

?>