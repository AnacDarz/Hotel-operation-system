<?php
;
include_once("config.php");


   if(isset($_POST['submitinfo'])){ 
   $fn=$_POST['Sup'];
   
   $ln=$_POST['reqs'];
   $fee="";
  
$rsss=mysqli_query($mysqli,"select * from services where service_name = '$fn'");

while($result=mysqli_fetch_array($rsss)){
    $fee        = $result['price'];
    $SN     =$result['service_name'];
  }


$fs=mysqli_query($mysqli,"select * from amenity_inventory where amenity_name = '$fn'");

while($result=mysqli_fetch_array($fs)){
    $fees        = $result['price'];
    $SNs    =$result['service_name'];
  }
   $rs="update reservation set  service_name='$fn', request='$ln', service_price='$fee', request_price='$fees', requestin = 'Pending', service_notif='Service $fn (Php $fee) and Request $ln (Php $fees ) been added into your bill! ' where email='$em'";


$ff=mysqli_query($mysqli,"select * from reservation where email='$em'");

while($result=mysqli_fetch_array($ff)){
    $pp        = $result['payment'];
    $ss     =$result['service_price'];
    $pays = $pp + $ss ;
  }

   $rds="update reservation set payment = '$pays' where email='$em'";
if (mysqli_query($mysqli,$rds)) {
    }
    else{
      echo '<script>alert("error") </script>';
    }
   if (mysqli_query($mysqli,$rs)) {
    }
    else{
      echo '<script>alert("error") </script>';
    }

          
    header("Location:myaccount.php");
}
?>