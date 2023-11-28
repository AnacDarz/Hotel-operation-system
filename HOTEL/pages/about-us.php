<?php
session_start();
 include_once("session.php");
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Hotel Operation</title>

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
    <section class="hero-section set-bg" data-setbg="img/about-us-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./homepages.php" class="left-nav"><i class="lnr lnr-arrow-left"></i> Home</a>
                    <a href="./rooms.php" class="right-nav">Rooms <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Room Section Begin -->
    <div class="about-us-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2>“Customers may forget what you said  but they will never forget how you made them
                        feel”.</h2>
                </div>
            </div>
            <div class="about-para">
                <div class="row">
                    <div class="col-lg-6">
                         <p>Welcome to Data Hotel, which is located in North of Laoag City where we provide 
                            hotel rooms whether De Luxe or Standard which is available and be accessible to everyone 
                        to stay and relax when visiting the town or having a place to stay and luxuriate.</p>
                        </div>
                        <div class="col-lg-6">
                            <p>We have services that will complete your stay, it maybe cuisine, laundry or assistance with your belongings. You can book us in advance incase of an event or visit so that we can clean and arrange your accommodation in time that your booking is near.  </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Room Section End -->

    <!-- Video Tour Section Begin -->
    <section class="video-tour set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="video-text">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Video Hotel Tour</h2>
                    </div>
                </div>
                <div class="video-play-btn">
                    <a href="https://www.youtube.com/watch?v=hGsVLXnFgbA" class="pop-up"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Tour Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-text">
                        <h2>Hotel Gallery</h2>
                        <p>Hotel Gallery
Simple, fresh and warm styles and pleasing tones, each room meets the city's latest  design and comfort standards. Stylish interiors completed with LCD Television and high-speed wireless internet connection.
</p>
                        <a class="primary-btn">View Gallery <i class="lnr"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
                                <img src="img/gallery/gallery-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
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