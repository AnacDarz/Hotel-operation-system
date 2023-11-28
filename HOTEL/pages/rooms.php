<?php

session_start();
 

 include_once("session.php");
include_once("config.php");

$rs=mysqli_query($mysqli,"select * from rooms");

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms | Hotel Operation</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./homepages.php"><img src="img/logo.png" alt=""></a>

                </div>
            
               
                    <div class="container" align="">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu" >
                               <?php include_once("menuhome.php");?>
                            </nav>
                            
                        </div>
                    </div>
                </div>
                 <div id="mobile-menu-wrap"></div>
            </div>

        </div>

    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./about-us.php" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href="./contact.php" class="right-nav">Contact <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Executive Suite'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Executive Suite'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Executive Suite'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                           <?php
          

            $dd = mysqli_query($mysqli,"SELECT * from rooms where room_type='Executive Suite'");
             if ( $rses=mysqli_fetch_array($dd)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?> 
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="executiverm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>


                    <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Family Suite'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Family Suite'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Family Suite'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                        <?php
          

            $ddd = mysqli_query($mysqli,"SELECT * from rooms where room_type='Family Suite'");
             if ( $rses=mysqli_fetch_array($ddd)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?> 
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="familyrm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>



                    <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Junior Suite'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Junior Suite'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Junior Suite'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                         <?php
          

            $dddd = mysqli_query($mysqli,"SELECT * from rooms where room_type='Junior Suite'");
             if ( $rses=mysqli_fetch_array($dddd)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?> 
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="juniorrm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>



                 <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='De Luxe'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='De Luxe'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='De Luxe'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                      <?php
          

            $dddsdd = mysqli_query($mysqli,"SELECT * from rooms where room_type='De Luxe'");
             if ( $rses=mysqli_fetch_array($dddsdd)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?>
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="deluxerm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>





                 <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Standard Room'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Standard Room'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Standard Room'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                        <?php
          

            $sr = mysqli_query($mysqli,"SELECT * from rooms where room_type='Standard Room'");
             if ( $rses=mysqli_fetch_array($sr)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?>
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="standardrm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>



                 <div class="container">    
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Economy Room'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Economy Room'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Economy Room'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="rooms-page-item">

                <div class="row">
             
                    <div class="col-lg-6">
                        <?php
          

            $er = mysqli_query($mysqli,"SELECT * from rooms where room_type='Economy Room'");
             if ( $rses=mysqli_fetch_array($er)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
                        echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "    <div class='single-room-pic'>";
                            echo "      <img src='$image_src' alt=''>";
                            echo "  </div>";
                         
                       echo "   </div>";
                          } ?>
                    </div>
                    <div class="col-lg-6">

                        <div class="room-text">
                            <div class="room-title">
                                <h2> <?php } ?><?php echo $rows['room_type']  ?></h2>
                                     <?php }?>


                                <div class="room-price">
                                    
                                    <h2>Php <?php echo number_format(round($row['price'],2),2,'.', '')?></h2>
                                    <sub>/night</sub>
                                </div>

                            </div>
                            <div class="room-desc">
                                <p><?php }?><?php echo $rowsi['information']  ?></p>
                            </div>

                       
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                           <a class="primary-btn" href="economyrm.php">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
                 <?php }?>
      
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
  <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>A. G. Tupaz, Cor Fari?As Street Barangay 8, San Vicente 2900 Laoag City Ilocos Norte</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(077) 770 3975</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(077) 770 3975</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(077) 770 3975</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>