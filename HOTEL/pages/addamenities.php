
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
  $roomnumber=$_POST['roomnumber'];
   $guest=$_POST['guest'];
   $pillows=$_POST['pillowvalue'].' '.$_POST['pillow'];
   $rugs=$_POST['rugvalue'].' '.$_POST['rug'];
   $bedsheets=$_POST['bedsheetvalue'].' '.$_POST['bedsheet'];
   $towels=$_POST['towelvalue'].' '.$_POST['towel'];
   $fans=$_POST['fanvalue'].' '.$_POST['fan'];
   $beds=$_POST['bedvalue'].' '.$_POST['bed'];
     $date    = date("Y-m-d h:i:sa");


   $srs=mysqli_query($mysqli,"Insert Into amenities (room_number, guest, pillow,  rug, bedsheet, 
                                            towel, electricfan,bed,dates) values ('$roomnumber','$guest','$pillows','$rugs',
                                            '$bedsheets','$towels','$fans', '$beds', '$date')");

    if ($srs) {
       echo '<script> alert("Done!");
      window.location.href="manage.php";
    </script>';

    }
    else{
      echo '<script>alert("Room Number is duplicated!") </script>';

    }
  
  
}

?>