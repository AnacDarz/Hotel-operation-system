
<?php
include_once("config.php");
?>

<?php
include_once("database/dbcreateacc.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Accounts | Hotel Operation
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
      <a class="navbar-brand m-0" href="../pages/admindashboard.php" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Hotel Operation</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/admindashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10" >dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


          <a class="nav-link text-white " href="../pages/reservationfee.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10" ><mat-icon>swap_horizontal_circle</mat-icon></i>
            </div>
            <span class="nav-link-text ms-1">Reservation Fee</span>
          </a>

          <li class="nav-item">
          <a class="nav-link  "  href="../pages/createacc.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons icon-black opacity-10" >table_view</i>
            </div>
            <span class="nav-link-text ms-1">Manage Accounts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active"style="background-color: #FFF01F" href="../pages/createacc.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             
            </div>
            <span class="nav-link-text ms-1">Create Account</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link  "  href="../pages/accounts.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  
            </div>
            <span class="nav-link-text ms-1">Accounts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Archived.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             
            </div>
            <span class="nav-link-text ms-1">Archived</span>
          </a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white " href="../pages/adminreports.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Reports</span>
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Accounts / Create Account</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Create Account</h6>
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
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
             
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
             
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
               
               
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
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
        <form method="post"  action="createacc.php">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Create an Account
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
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">ID Number</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">ID Number</label>
              <input type="Number" class="form-control"name="id" required/>
            </div>
                </div>
              </div>
            </div>
               
             


                <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">First Name</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control"  name="fname" required/>
            </div>
                </div>
              </div>
            </div>
             


              <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Last Name</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control"  name="lname" required/>
            </div>
                </div>
              </div>
            </div>
             


           

         <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Contact Number</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Contact Number</label>
              <input type="Number" class="form-control" name="contact" required/>
            </div>
                </div>
              </div>
            </div>
       
 <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Address</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" name="address" required/>
            </div>
                </div>
              </div>
            </div>

               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Email Address</h6>
                 <div class="input-group input-group-outline">
                 
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" required/>
            </div>
                </div>
              </div>
            </div>

               <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">

                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Group</h6>
                 <div class="input-group input-group-outline">
               <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="grp" id="groups">
                  <option selected>Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="Frontdesk">Frontdesk</option>
                </select>

            </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Password</h6>
                 <div class="input-group input-group-outline">
              <label class="form-label">Password</label>
              <input type="password" class="form-control"  name="pass" required/>
            </div>
                </div>
              </div>
            </div>
          <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Schedule</h6>

             <h7 class="text-uppercase text-body text-xs font-weight-bolder">Date</h7>
                 <div class="input-group input-group-outline">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="start" id="start">
                  <option selected>Select</option>
                  <option value="Sunday">Sunday</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                </select>

                 <h2 class="mb-0" style="padding: 2%">-</h2>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="end" id="end">
                 <option selected>Select</option>
                  <option value="Sunday">Sunday</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                </select>
            </div>
             <h6 class="text-uppercase text-body text-xs font-weight-bolder">Time</h6>
               <div class="input-group input-group-outline">
              <input type="Time" class="form-control" name="timestart" required/>
               <h2 class="mb-0" style="padding: 2%">-</h2>
               <input type="Time" class="form-control"  name="timeend" required/>
            </div>
                </div>
              </div>
            </div>


          



            <div class="col-12 mt-4" >
              <div class="mb-5 ps-3" style="padding-bottom: 0; margin: 0">
                <button  class="btn btn-success" type="submit" name="submitinfo"  onclick="myFunction()">Create</button>
                <button type="button" class="btn bg-gradient-danger">Cancel</button>
      
              </div>
            </div>
          
        </div></form>
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
</body>

</html>