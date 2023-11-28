
<?php
include_once("config.php");
?>

<?php
include_once("database/dbaddroom.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Manage Rooms | Hotel Operation
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opaciFty-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../pages/frontdeskdashboard.php" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Hotel Operation</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/frontdeskdashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10" >dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


        </li>
          <li class="nav-item">
          <a class="nav-link text-white " href="../pages/roomsinventory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="material-icons opacity-10">card_travel</i>
            </div>
            <span class="nav-link-text ms-1">Rooms</span>
          </a>
        </li>
        
             
           <li class="nav-item">
          <a class="nav-link text-white active"style="background-color: #FFF01F " href="../pages/roomsinventory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">Manage Rooms</span>
          </a>
        </li>

           <li class="nav-item">
          <a class="nav-link text-white " href="../pages/manageroom.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">View Rooms</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Approval.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10" >table_view</i>
            </div>
            <span class="nav-link-text ms-1">Approval</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  "  href="../pages/reservations.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons icon-black opacity-10" >table_view</i>
            </div>
            <span class="nav-link-text ms-1">Reservations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Walkin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Walk-in</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white "  href="../pages/checkin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Checked In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/fdprofile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/frontdeskreports.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">History</span>
          </a>
        </li>
        
        

      </ul>
    </div>
  
  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"> Manage Rooms</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Manage Rooms</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><a href="./destroyer.php" >Sign Out</a></span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-200 border-radius-xl mt-1" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <form method="post"  action="roomsinventory.php" enctype="multipart/form-data">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Add Rooms
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
             
              </p>
            </div>
          </div>
        
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Room Number</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Room Number</label>
              <input type="Number" class="form-control"name="roomnumber" required/>
            </div>
                </div>
              </div>
            </div>
               
               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">

                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Room Type</h6>
                 <div class="input-group input-group-outline">
               <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="grp" id="groups">
                  <option selected>Select</option>
                   <option   onclick="ttt();" value="Executive Suite">Executive Suite</option>
                  <option onclick="ttt();" value="Family Suite">Family Suite</option>
                  <option onclick="ttt();" value="Junior Suite">Junior Suite</option>
                  <option onclick="ttt();" value="De Luxe">De Luxe</option>
                  <option onclick="ttt();" value="Standard Room">Standard Room</option>
                  <option onclick="ttt();" value="Economy Room">Economy Room</option>
                </select>

            </div>
                </div>
              </div>
            </div>


                <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Price</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Price</label>
              <input type="number" class="form-control"  name="prices" required/>
            </div>
                </div>
              </div>
            </div>
             


              <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Information</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Information</label>
              <input type="text" class="form-control"  name="infos" required/>
            </div>
                </div>
              </div>
            </div>

             <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Upload Image</h6>
                   <div class="input-group input-group-outline">
                     <input style="width: 70%;" type="file" name="image"  id="file"  onchange="loadFile(event)" style="display: none;" />
                      </div>
                       </div>
                       <img id="output" width="200" />
                        </div>
                      </div>
             


       
             <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                </div>
              </div>
            </div>

         <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-s font-weight-bolder">Amenities</h6>
                 
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                </div>
              </div>
            </div>
             <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                </div>
              </div>
            </div>

         <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Pillow</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Pillow</label>
              <input type="Number" class="form-control" name="pillow" required/>
            </div>
                </div>
              </div>
            </div>
       
 <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Rug</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Rug</label>
              <input type="number" class="form-control" name="rug" required/>
            </div>
                </div>
              </div>
            </div>

               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Bedsheet</h6>
                 <div class="input-group input-group-outline">
                 
              <label class="form-label">Bedsheet</label>
              <input type="number" class="form-control" name="bedsheet" required/>
            </div>
                </div>
              </div>
            </div>

             
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">towel</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Towel</label>
              <input type="number" class="form-control"  name="towel" required/>
            </div>
                </div>
              </div>
            </div>

             <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Fan</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Fan</label>
              <input type="number" class="form-control"  name="fan" required/>
            </div>
                </div>
              </div>
            </div>
              <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Bed</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Bed</label>
              <input type="number" class="form-control"  name="bed" required/>
            </div>
                </div>
              </div>
            </div>



          



            <div class="col-12 mt-4" >
              <div class="mb-5 ps-3" style="padding-bottom: 0; margin: 0">
                <button  class="btn btn-success" type="submit" name="submitinfo"  onclick="myFunction()">Add Room</button>
                
                  
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  
  </div>
  <!--   Core JS Files   -->
   <script>
    function myFunction() {
         var x = document.getElementById("groups");
        var value=x.selectElement.options[x.selectedIndex].value;// get selected option value


      var x = document.getElementById("start");
        var value=x.selectElement.options[x.selectedIndex].value;

         var x = document.getElementById("end");
        var value=x.selectElement.options[x.selectedIndex].value;
    }


    </script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
      <script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</body>

</html>