<?php

session_start();
 

 include_once("session.php");
include_once("config.php");

 $rs=mysqli_query($mysqli,"select * from rooms where room_type='Standard Room'");
$rss=mysqli_query($mysqli,"select * from reservation_fee");

if($result=mysqli_fetch_array($rss)){
    $fee        = $result['fee'];
  }


?>

<?php
include_once("database/dbreserve.php");
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
     <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
 
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body onload="onload();">
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
        <div class="card card-body mx-3 mx-md-4 mt-n6">

        <form method="post"  action="standardrm.php">
             <div class="row gx-4 mb-2">
          <div class="col-auto">
            
                    
          </div>
            <div class="col-lg-4 " >
                      <?php
          

            $dd = mysqli_query($mysqli,"SELECT * from rooms where room_type='Standard Room'");
             if ( $rses=mysqli_fetch_array($dd)) {
               $image = $rses['images'];
                $image_src = "picture/".$image;
           

                       echo "  <div class='room-pic-slider owl-carousel'>";
                          echo "   <div class='single-room-pic'>";
                           echo "      <img src='$image_src' alt=''>";
                          echo "   </div>";
                    } ?>          
                        </div>
                    </div>
          <div class="col-lg-6">
            <?php
          

            $result = mysqli_query($mysqli,"SELECT room_type FROM rooms where room_type='Standard Room'");
            $pric   = mysqli_query($mysqli,"SELECT price FROM rooms where room_type='Standard Room'");
            $info   = mysqli_query($mysqli,"SELECT information FROM rooms where room_type='Standard Room'");
            if($rowsi = mysqli_fetch_array($info)) {
                if($row = mysqli_fetch_array($pric)) {
              if($rows = mysqli_fetch_array($result)) {

                if ( $res=mysqli_fetch_array($rs)) {
                 
            ?>
            <div class="h-100">
              <h2 class="mb-1">
                <?php } ?><?php echo $rows['room_type']  ?>  <?php } ?> / Php <?php echo number_format(round($row['price'],2),2,'.', '')?>
              </h2>
                <input type="hidden" id="dayday" value="<?php echo number_format(round($row['price'],2),2,'.', '')?>" name="">
               <h6 class="mb-1">
               <?php } ?><?php echo $rowsi['information']  ?><br><br>
              </h6>
              <p class="mb-0 font-weight-normal text-sm">
             
              </p>
            </div>
            <?php } ?>
          </div>
        
        </div>
               <div class="row">
                 

                <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder" >Date of check-in</h6>

          
                 <div class="input-group input-group-outline" >

               <input type="date" class="form-control" name="checkin" id="dd1" onchange="kk();"   min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>" required/>

            </div>
            
                </div>
              </div>
            </div> <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Date of check-out</h6>

          
                 <div class="input-group input-group-outline">
               <input type="date" class="form-control" name="checkout" id="dd2"  min="<?php echo date("Y-m-d"); ?>" onchange="kk();" required/>

            </div>


                </div>
              </div>
            </div>
    <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Number of Adults</h6>
                 <div class="input-group input-group-outline">
              <input type="Number" class="form-control" name="adults" min="1"  id="timer02_min"  max="5" required/>
            </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Number of Kids</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label"></label>
               <input type="Number" class="form-control" name="kids" min="1"  id="kido"  max="5" />
            </div>
                </div>
              </div>
            </div>
          
 <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Types of room</h6>
                 <div class="input-group input-group-outline">
              <input type="text" class="form-control" value="Standard Room" name="typerm" readonly="">
            </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">

                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Request</h6>
                 <div class="input-group input-group-outline">
               <select class="form-select form-select-lg mb-3" name="reqs"id="req" aria-label=".form-select-lg example">
                  <option selected>Select</option>
                  <option value="pillow">extra pillow</option>
                </select>

            </div>

             <h6 class="text-uppercase text-body text-xs font-weight-bolder">Other Request</h6>
            
                <div class="input-group input-group-outline">
                   
              <input type="text" class="form-control" name="othreq">
            </div>
                </div>
              </div>
            </div>
           
            <input type="hidden" name="ems" value="<?php echo $em ?>">
            <input type="hidden" name="name" value="<?php echo $getname ?>">
  
 <input type="text" class="form-control" name="s" id="ikwalsd">

            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100"style="padding-right: 30%;">
                <div class="card-body p-3 " >
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder" >Choose Room</h6>
                <div class="mb-5 ps-3" >
                   <?php  
                        while ( $res=mysqli_fetch_array($rs)) {

                                  
                                
                                $type=$res['status'];

                                if (strcmp($type,"available")==0) {

                                    echo " <input type='button' class='btn btn-success' name='rm' id='lolz' value='".$res['room_number']."'></input>";
                                }else{
                                    echo "<a title='Occupied'> <input type='button'  type='button' class='btn btn-danger' value='".$res['room_number']."' disabled ></a>   ";
                                }
                                
                    }

                   ?> 
               <input type="hidden" name="rms"  id="s">
          
      
              </div>
            </div>
                </div>
              </div>

          
 <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
               
              </div>
            </div>
                  <div class="col-12 col-xl-4">
              <div class="card card-plain h-100"style="padding-right: 10%;">
                <div class="card-body p-3 " >
                
            </div>
                </div>
              </div>


          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               Payment Policy
              </h5>
               
              <p class="mb-0 font-weight-normal text-sm">
             
              </p>
            </div>
          </div>

                  <div class="col-12 col-xl-4">
              <div class="card card-plain h-100"style="padding-right: 10%;">
                <div class="card-body p-3 " >
                
            </div>
                </div>
              </div>

              

                  <div class="col-12 col-xl-4">
              <div class="card card-plain h-100"style="padding-right: 10%;">
                <div class="card-body p-3 " >
                
            </div>
                </div>
              </div>

              

               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                 
 <p class="text-uppercase text-body text-xs font-weight-bolder">


  <input type="text" style="outline: none; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="indys"  id="vald" value = "0"readonly/>days</p>
   
  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Total to Pay</h6>
                 <div class="input-group input-group-outline">
           <input type="hidden" class="form-control"id="pays"   readonly/>

                  
              <input type="number" class="form-control" name="pay" id="payer"  readonly/>


                  
            </div>
            <div style="padding-bottom: 2% "></div>
              <h6 class="text-uppercase text-body text-xs font-weight-bolder">Upon Reservation Fee (<?php echo $fee; ?>%)</h6>
                <input type="hidden" name="rates" id="rates" value="<?php echo $fee; ?>">
                   <input type="number" class="form-control" name="reservefee" id="reservefee"  readonly/> <!-- fee -->
                </div>
              </div>
            </div>
         
            <div class="col-12 mt-4" >
              <div class="mb-5 ps-3" >
                <button  class="btn btn-success" type="submit" name="submitinfo"  onclick="myFunction()">Reserve</button>
                <button type="button" class="btn bg-gradient-danger">Cancel</button>
      
              </div>
            </div>
               </div>
        </div>
      </form>
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
    <script>  

     

</script> 
   
<script >
  

      document.getElementById("timer02_min").addEventListener("keydown", e => e.preventDefault());
</script>
<script >
  

      document.getElementById("kido").addEventListener("keydown", e => e.preventDefault());
</script>
    <script type="text/javascript">
      date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
    </script>
    <script type="text/javascript">
    var lolz;


    function onload() { 
        lolz = document.getElementById('lolz');
    }
    function kk(){
        //alert(lolz.value);
        document.getElementById("s").value = lolz.value;
        var d1 = new Date(document.getElementById('dd1').value);   
        var d2 = new Date(document.getElementById('dd2').value);
        var py  = new Date(document.getElementById('pays').value);
        var ddd = document.getElementById('dayday').value;
        var rates = document.getElementById('rates').value;

var diff = d2.getTime() - d1.getTime();   
    
var daydiff = diff / (1000 * 60 * 60 * 24);   
var price = daydiff * ddd ;
var reserve = (rates / 100)*price; 
document.getElementById("vald").value = daydiff;
document.getElementById("payer").value = price;

document.getElementById("reservefee").value = reserve;

    }
</script>
<script>
    function myFunction() {
        

         var x = document.getElementById("req");
        var value=x.selectElement.options[x.selectedIndex].value;
    }


    </script>
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