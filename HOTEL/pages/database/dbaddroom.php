
<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
  
   $roomnumber = $_POST['roomnumber'];
   $grps       = $_POST['grp'];
   
   $prices     = $_POST['prices'];
   $infos      = $_POST['infos'];
   $pillow     = $_POST['pillow'];
   $rug        = $_POST['rug'];
   $bedsheet   = $_POST['bedsheet'];
   $towel      = $_POST['towel'];
   $fan        = $_POST['fan'];
   $bed        = $_POST['bed'];

   $name =$_FILES['image']['name'];
   $target_dir = "picture/";
   $imgs=$target_dir . basename($_FILES["image"]["name"]);

 $imageFileType = strtolower(pathinfo($imgs,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

 $srs="Insert Into rooms (room_number, room_type, price, information, pillow,  rug, bedsheet, 
                                            towel, electricfan,bed,status,images) values ('$roomnumber','$grps','$prices',
                                            '$infos','$pillow','$rug',
                                            '$bedsheet','$towel','$fan', '$bed', 'available','$name')";

    if (mysqli_query($mysqli,$srs)) {
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$name);
      echo '<script>alert("Success") </script>';
    }
    else{
      echo '<script>alert("error") </script>';
    }
  }
?>


