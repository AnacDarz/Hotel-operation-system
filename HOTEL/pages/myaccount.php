<?php

session_start();
 

 include_once("session.php");
include_once("config.php");

 $rs=mysqli_query($mysqli,"select * from rooms where room_type='Executive Suite'");
 $res=mysqli_query($mysqli,"select * from reservation where email='$em'");
 $rss=mysqli_query($mysqli,"select * from reservation where email='$em'");
$rsss=mysqli_query($mysqli,"select * from reservation_fee");

if($result=mysqli_fetch_array($rsss)){
    $fee        = $result['fee'];
  }

?>

<?php
include_once("database/dbeditmyaccount.php");
?>
<?php
include_once("cancelaccount.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>






    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account | Hotel Operation</title>

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
                                <ul>
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
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="page-nav">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="card card-body mx-3 mx-md-4 mt-n6">

        <form method="post"  action="myaccount.php" enctype="multipart/form-data">
             <div class="row gx-4 mb-2">
          <div class="col-auto">
            
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h2 class="mb-1">
               <?php echo $getname; ?>
              </h2>
              
              <p class="mb-0 font-weight-normal text-sm">
             
              </p>
            </div>
          </div>
        
        </div>
               <div class="row">
                 

                <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Email</h6>

          
                 <div class="input-group input-group-outline">
               <input type="email" class="form-control"value=" <?php echo $em; ?>" name="email" readonly/>
              <input type="hidden" class="form-control" name="payhide" value="<?php echo $ser['room'];?>"readonly/>
            </div>
            
                </div>
              </div>
            </div> <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Contact</h6>

          
                 <div class="input-group input-group-outline">
               <input type="text" class="form-control"value=" <?php echo $getcontact; ?>" name="getcontact" required/>

            </div>
            
                </div>
              </div>
            </div>
    <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Address</h6>
                 <div class="input-group input-group-outline">
              <input type="text" class="form-control" name="adults" value=" <?php echo $getaddress; ?>" readonly/>
            </div>
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
          <div class="col-auto my-auto">
            <div class="h-100">
              <h4 class="mb-1">
               My Transaction        
             </h4>
    
              <h6 class="mb-1">
               Gcash Number : 09309070108
              </h6>
            </div>
               <p class="mb-0 font-weight-normal text-sm">
               <?php  

                        while ( $ress=mysqli_fetch_array($rss)) {

                                  
                                
                                $type=$ress['status'];

                                if (strcmp($type,"Pending")==0) {

                                    echo "<span class='badge badge-sm bg-gradient-secondary'>Ongoing</span>";
                                }else if (strcmp($type,"Approved")==0){
                                   echo "<span class='badge badge-sm bg-gradient-warning'>Approved</span>";
                                }else if (strcmp($type,"Checkin")==0){
                                     echo "<span class='badge badge-sm bg-gradient-success'>Checked in</span>";
                                }
                                 else if (strcmp($type,"Fully Paid")==0){
                                     echo "<span class='badge badge-sm bg-gradient-success'>Reservation Paid</span>";
                                }
                                 else if (strcmp($type,"Downpayment")==0){
                                     echo "<span class='badge badge-sm bg-gradient-warning'>Downpayment</span>";
                                }
                                
                    }

                   ?> 
               
              
              </p>
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


        <?php 

          while ( $ser=mysqli_fetch_array($res)) {
           
   

         ?>

          <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Date of check-in</h6>

          
                 <div class="input-group input-group-outline">
               <input type="text" class="form-control" name="checkin" value="<?php echo $ser['check_in'];?>"readonly/>

            </div>
            
                </div>
              </div>
            </div> <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Date of check-out</h6>

          
                 <div class="input-group input-group-outline">
               <input type="text" class="form-control" name="checkout" value="<?php echo $ser['check_out'];?>"readonly/>

            </div>
            
                </div>
              </div>
            </div>
    <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Number of guest</h6>
                 <div class="input-group input-group-outline">
              <input type="Text" class="form-control" name="adults" value="<?php echo $ser['adults'];?> Adults and <?php echo $ser['children'];?> Kids"readonly/>
            </div>
                </div>
              </div>
            </div>
     
          <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Types of room</h6>
                 <div class="input-group input-group-outline">
              <input type="text" class="form-control"  name="typerm" value="<?php echo $ser['room_type'];?>"readonly/>
            </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">

                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Request</h6>
                 <div class="input-group input-group-outline">
               <input type="text" class="form-control"  name="typerm" value="<?php echo $ser['request'];?>, <?php echo $ser['other_request'];?>"readonly/>

            </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="ems" value="<?php echo $em ?>">
            <input type="hidden" name="name" value="<?php echo $getname ?>">
  

        

     

               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Room Number</h6>
                 <div class="input-group input-group-outline">
             
              <input type="number" class="form-control" name="pay" value="<?php echo $ser['room'];?>"readonly/>
            </div>
                </div>
              </div>
            </div>

             
             
               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">To pay</h6>
                 <div class="input-group input-group-outline">
             
              <input type="number" class="form-control" name="pay" value="<?php echo $ser['payment'];?>"readonly/>
            </div>
                </div>
              </div>
            </div>



               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Upon Reservation Fee</h6>
                 <div class="input-group input-group-outline">
              <input type="number" class="form-control" name="reservefee" id="reservefee" value="<?php echo $ser['reservation_fee'];?>"  readonly/> <!-- fee -->
            </div>
                </div>
              </div>
            </div>





                  <?php  }?>
             <?php  
                 $rosas=mysqli_query($mysqli,"select * from reports where name='$ult'");
                        while ( $ros=mysqli_fetch_array($rosas)) {
                                   $types=$ros['status'];

                                if (strcmp($types,"Checkout")==0) {
                                      echo " 
                                          
                                        <h4 class='text-uppercase text-body text-s font-weight-bolder'> </h4>
                                        <h4 class='text-uppercase text-body text-s font-weight-bolder'>Details of Transaction</h4>
                                       <h5 class='mb-1'>Room # : ".$ros['rooms']."</h5>
                                       <h5 class='mb-1'>Arrived Date: ".$ros['arrival_date']."</h5>
                                        <h5 class='mb-1'>Departure Date: ".$ros['departure_date']."</h5>
                                        <h5 class='mb-1'>Bills: Php ".number_format($ros['payment'],2)."</h5>
                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                }
                        }

?>
         <div class="h-100">
              <h4 class="mb-1">
               My Services        
             </h4>

            </div>
                  <p class="mb-0 font-weight-normal text-sm">
               <?php  
               $rsds=mysqli_query($mysqli,"select * from reservation where email='$em'");
                        while ( $ress=mysqli_fetch_array($rsds)) {

                                  
                                
                                $type=$ress['requestin'];

                                if (strcmp($type,"Pending")==0) {

                                    echo "<span class='badge badge-sm bg-gradient-secondary'>Pending</span>";
                                }else if (strcmp($type,"Ongoing")==0){
                                   echo "<span class='badge badge-sm bg-gradient-success'>Approved</span>";
                                }else if (strcmp($type,"Done")==0){
                                     echo "<span class='badge badge-sm bg-gradient-success'>Done</span>";
                                }
                                 else if (strcmp($type,"Fully Paid")==0){
                                     echo "<span class='badge badge-sm bg-gradient-success'>Reservation Paid</span>";
                                }
                                 else if (strcmp($type,"Downpayment")==0){
                                     echo "<span class='badge badge-sm bg-gradient-warning'>Downpayment</span>";
                                }
                                
                    }

                   ?> 
               
              
              </p> 


                   <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Service</h6>
                 <div class="input-group input-group-outline">

                <?php  
                        $ross=mysqli_query($mysqli,"select * from reservation where email='$em'");
                        while ( $res=mysqli_fetch_array($ross)) {
                          ?>
 <input type="text" class="form-control" name="serv" id="serv" value="<?php echo $res['service_name']; ?> "  readonly/> <!-- fee -->
                 <?php  } ?>
             
            </div>
                </div>
              </div>
            </div>

                  



                <?php  
                 $rosa=mysqli_query($mysqli,"select * from reservation where email='$em'");
                        while ( $ros=mysqli_fetch_array($rosa)) {

                                
                                
                                $types=$ros['status'];

                                if (strcmp($types,"Pending")==0) {
                                      echo "  
                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                    echo " <button type='submit' name='submitinfos' onclick='myFunction()' class='btn bg-gradient-danger'>Cancel</button>";
                                }else if (strcmp($types,"Approved")==0){
                                   echo "   <div class='col-12 col-xl-4'>
                                       <div class='card card-plain h-100'>
                                        <div class='card-body p-3'>
                                        <h6 class='text-uppercase text-body text-xs font-weight-bolder'>Upload Image if Online Transaction</h6>

                                        <div class='input-group input-group-outline'>
                                         <input style='width: 70%;' type='file' name='image'  id='file'  onchange='loadFile(event)' style='display: none;' />
                                        
                                         </div>
                                          </div> <img id='output' width='200' />
                                          </div>
                                          </div>
                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                        echo " <button  class='btn btn-success' type='submit' name='submitinfo'  onclick='myFunction()'>Submit</button>";
                                        
                                        echo " <button type='button' class='btn bg-gradient-danger'>Cancel</button>";
                                }else if (strcmp($types,"Checkin")==0){
                                   echo "  
                                            
                                  
                  <h6 class='text-uppercase text-body text-xs font-weight-bolder'>".$ros['service_notif']."</h6>
              

                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                        echo " <a href='myrequest.php' type='button' class='btn bg-gradient-success'>Request</a>"; 
                                        echo " <a href='cancelreq.php' type='button' class='btn bg-gradient-danger'>Cancel</a>";
                                }else if (strcmp($type,"Fully Paid")==0){
                                   echo "  
                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                      echo " <button  type='submit' name='submitinfo'class='btn bg-gradient-danger'>Cancel</button>";
                                
                                 }else if (strcmp($type,"Downpayment")==0){
                                   echo "  
                                          <div class='col-12 mt-4' >
                                          <div class='mb-5 ps-3' >";
                                     echo " <button  type='submit' name='submitinfo'class='btn bg-gradient-danger'>Cancel</button>";
                                }



                                
                    }

                   ?> 
              
              
      
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
    <script type="text/javascript">
    var lolz;
    function onload() { 
        lolz = document.getElementById('lolz');
    }
    function kk(){
        //alert(lolz.value);
        document.getElementById("s").value = lolz.value;
    }
</script>
<script>
    function myFunction() {
        

         var x = document.getElementById("req");
        var value=x.selectElement.options[x.selectedIndex].value;
    }


    </script>

    <script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
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