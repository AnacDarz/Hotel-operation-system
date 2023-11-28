
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $feed=$_POST['fees'];

 $rs="update reservation_fee set fee='$feed' where ID='1'";

   if (mysqli_query($mysqli,$rs)) {
       echo '<script> alert("Fee has been updated.");
      window.location.href="reservationfee.php";
    </script>';

    }
    else{
      echo '<script>alert("error!") </script>';

    }
  

  
}



?>