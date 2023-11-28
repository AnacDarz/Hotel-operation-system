
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
   $name=$_POST['nm'];

   $em=$_POST['ems'];
   $date    = date("Y-m-d h:i:sa");
   
   $srs=mysqli_query($mysqli,"insert into reservation (name, check_in, check_out, adults, children, room_type,  request, other_request, 
                                            room, payment, status,date_reserve) values ('$name', '$ci','$co','$adl',
                                            '$kds','$trm','$req',
                                            '$oreq','$rms','$pays','Checkin','$date')");
 $STS=mysqli_query($mysqli,"Insert Into reports( name, rooms, arrival_date,departure_date,adults,children,employee,status,date)values
                                                ('$ids','$nm','$rm','$ci','$co','$adt','$chd','$dr','$em','Checkout','$date')");
    


   



    if ($srs) {

      $rsss = mysqli_query($mysqli,"update rooms set status='occupied' where room_number='$rms'");
     
      echo '<script> alert("Checked in!");
        window.location.href="walkin.php";
      </script>';

    }
    else{

echo '<script>alert(      "echo error_reporting(E_ALL)") </script>';


    }
   $hhh  = mysqli_query($mysqli,"truncate table room_dump");
  
}

?>