<?php
include_once("config.php");

if(isset($_REQUEST['btn_login'])){

  $un=$_REQUEST['uname'];
  $pass=MD5($_REQUEST['pass']);
  $btn=$_REQUEST['btn_login'];

  $rs=mysqli_query($mysqli,"select * from accounts where email ='$un' and password = '$pass'");

  $count=mysqli_num_rows($rs);
  if($count==1){
    $result=mysqli_fetch_array($rs);
    $type=$result['groups'];

    session_start();
    $_SESSION['sid']=$un;
    if (strcmp($type,"admin")==0) {
      
      header("Location:admindashboard.php");
    }
    else if (strcmp($type,"Guest")==0) {
       header("Location:homepages.php");
    }
    else if (strcmp($type,"Frontdesk")==0){
       header("Location:frontdeskdashboard.php");
    }
    else {
      header("Location:housekeepingdashboard.php");
    }
  }
  else{

    echo '<script>alert("Email or Password is incorrect")</script>';
  }
}
?>