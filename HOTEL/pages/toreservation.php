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
    $date = date("Y-m-d h:i:sa");

    $srs=mysqli_query($mysqli,"Insert Into reports( ID,name, rooms, arrival_date,departure_date,adults,children,reserve_date,employee,status,payment,date)values
                                                ('$ids','$nm','$rm','$ci','$co','$adt','$chd','$dr','$em','Approval', '$pay','$date')");
    $srss=mysqli_query($mysqli,"update reservation set status='Approved' where ID='$ID'");

  }

header("Location:approval.php");


?>