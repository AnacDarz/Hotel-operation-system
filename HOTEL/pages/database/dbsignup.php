<?php
include_once("config.php");

if(isset($_POST['btn_submit'])){
  
  $password=$_POST['password'];
  $confirm=$_POST['confirm'];
  if (strcmp($password, $confirm)==0) {
  $fname=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $password=MD5($_POST['password']);
  $confirm=$_POST['confirm'];

$rs=mysqli_query($mysqli,"Insert Into accounts(firstname, email, contact, 
                                            password,groups,address)values
                                            ('$fname','$email','$contact',
                                            '$password','Guest','$address')");
    if ($rs) {
      echo '<script> alert("Registed!");
      window.location.href="login.php";
    </script>';
    }
    else{
      echo '<script>alert("error") </script>';
    }
  }
  else{
  echo '<script>alert("password does not match") </script>';
  }
}

?>