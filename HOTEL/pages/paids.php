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
     $pr = $res['price'];


  $de = $_POST['de'];
  $ps = $_POST['pr'];
  $indys = $_POST['indys'].' Day/s - Php '.$_POST['pay']. '.00';

  $pay =$_POST['pay'];

    $srss=mysqli_query($mysqli,"update reservation set check_out='$de',extend='$indys',credit ='$pay' where ID='$ID'");
header("Location:checkin.php");
  }

}
?>
