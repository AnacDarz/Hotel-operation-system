<?php
include_once("config.php");
if(isset($_POST['submitinfos'])){
$userid=$_POST['payhidden'];
$email=$_POST['email'];

 $rs="update rooms set  status='available' where room_number='302'";

   if (mysqli_query($mysqli,$rs)) {
		$rts=mysqli_query($mysqli,"delete from reservation where email='$email'");
     	echo '<script>alert("Successfully Updated") </script>';
    }else{
	echo'<script>alert("deleting failed!")</script>';
}
}
?>