<?php
include_once("config.php");

$userid=$_REQUEST['ID'];

$rs=mysqli_query($mysqli,"delete from rooms where ID=$userid");
if($rs){
header("Location:manageroom.php");
}else{
	echo'<script>alert("deleting failed!")</script>';
}
?>