<?php
include_once("config.php");


   if(isset($_POST['submitinfo'])){ 
   $ID          = $_POST['IDS'];
   $roomnumber  = $_POST['roomnumber'];
   $roomtype    = $_POST['grp'];
   $price       = $_POST['prices'];
   $information = $_POST['infos'];
   $pillow      = $_POST['pillow'];
   $rug         = $_POST['rug'];
   $bedsheet    = $_POST['bedsheet'];
   $towel       = $_POST['towel'];
   $fan         = $_POST['fan'];
   $bed         = $_POST['bed'];

   $name = $_FILES['image']['name'];
   $target_dir = "picture/";
   $imgs=$target_dir . basename($_FILES["image"]["name"]);

 $imageFileType = strtolower(pathinfo($imgs,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");



   $rs="update rooms set  room_number='$roomnumber', room_type='$roomtype', price='$price',  information='$information', pillow='$pillow', 
                                            rug='$rug', bedsheet='$bedsheet', towel='$towel', electricfan='$fan', bed='$bed', images='$name' where ID='$ID'";
   
   if (mysqli_query($mysqli,$rs)) {

      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$name);
          echo '<script> alert("Room has been updated!");
        window.location.href="manageroom.php";
      </script>';

    }
    else{
      echo '<script>alert("error") </script>';
    }

}

?>
