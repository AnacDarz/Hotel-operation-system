<?php
include_once("config.php");



if(isset($_POST['submitpaid'])){
  $ID=$_REQUEST['ids'];



  



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
    $bal = $res['payment'];
    $fee = $res['reservation_fee'];

    $newbal = $bal - $fee;

    $srss=mysqli_query($mysqli,"update reservation set status='Fully Paid',reservation_fee='0',payment='$newbal' where ID='$ID'");
header("Location:reservations.php");
  }

}
?>
