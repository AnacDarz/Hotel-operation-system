

<?php





include_once("config.php");

 

 include_once("session.php");
if(isset($_POST['submitinfo'])){
  $ID=$_POST['dol'];
  



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
    $date = date("Y-m-d h:i:sa");

     $srs=mysqli_query($mysqli,"Insert Into reports( ID,name, rooms, arrival_date,departure_date,adults,children,reserve_date,employee,status,date)values
                                                ('$ids','$nm','$rm','$ci','$co','$adt','$chd','$dr','$em','Checkout','$date')");
    $srss=mysqli_query($mysqli,"update reservation set status='Checkout' where ID='$ID'");

      $srsss=mysqli_query($mysqli,"update rooms set status='available' where room_number='$rm'");
        $srssss=mysqli_query($mysqli," DELETE FROM reservation where status='Checkout'");
  }

header("Location:checkin.php");

}
?>