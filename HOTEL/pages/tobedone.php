<?php



session_start();

include_once("config.php");

 

 include_once("session.php");

  $ID=$_REQUEST['ID'];
  



  $rss = mysqli_query($mysqli,"select * from reservation  where ID='$ID'");
  while ( $res=mysqli_fetch_array($rss)) {
   $ids = $res['ID'];
    $nm = $res['name'];
    $rm = $res['room'];
    $ci = $res['check_in'];
    $co = $res['check_out'];
    $adt = $res['adults'];
    $chd = $res['children'];
    $dr = $res['date_reserve'];
    $pay = $res['payment'];

    $srs=mysqli_query($mysqli,"Insert Into reports( ID,name, rooms, arrival_date,departure_date,adults,children,reserve_date,employee,status,payment)values
                                                ('$ids','$nm','$rm','$ci','$co','$adt','$chd','$dr','$em','Approved Request', '$pay')");
    $srss=mysqli_query($mysqli,"update reservation set requestin='Ongoing' where ID='$ID'");

  }

header("Location:requestinformation.php");


?>