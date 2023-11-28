
<?php


 

 include_once("session.php");
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
 
   $ci=$_POST['checkin'];
   
   $co=$_POST['checkout'];
   $adl=$_POST['adults'];
   $kds=$_POST['kids'];
   $trm=$_POST['typerm'];
   $req=$_POST['reqs'];
   $oreq=$_POST['othreq'];
   $rms=$_POST['rms'];
   $pays=$_POST['pay'];
   $name=$_POST['name'];

   $em=$_POST['ems'];
   $rf = $_POST['reservefee'];
   $date    = date("Y-m-d h:i:sa");
   
   $srs=mysqli_query($mysqli,"Insert Into reservation (check_in, check_out, adults, children, room_type,  request, other_request, 
                                            room, payment,name, status,email,date_reserve,requestin,reservation_fee) values ('$ci','$co','$adl',
                                            '$kds','$trm','$req',
                                            '$oreq','$rms','$pays', '$name', 'Pending', '$em','$date', 'Pending','$rf')");



   



    if ($srs) {

      $rsss=mysqli_query($mysqli,"update rooms set status='occupied' where room_number='$rms'");
      echo '<script>alert("Your reservation is on proccess!") </script>';
      header("Location:myaccount.php");

    }
    else{

echo '<script>alert(      "echo error_reporting(E_ALL)") </script>';


    }
  
  
}

?>