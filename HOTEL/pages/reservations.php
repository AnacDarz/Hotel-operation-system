

<?php
session_start();
 include_once("session.php");
include_once("config.php");

$rs=mysqli_query($mysqli,"select * from reservation where status = 'Approved' or status = 'Fully Paid' or status = 'Downpaymet'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Reservation | Hotel Operation
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


   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
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
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/roomsinventory.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="material-icons opacity-10">card_travel</i>
            </div>
            <span class="nav-link-text ms-1">Rooms</span>
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
          <a class="nav-link  active"style="background-color: #FFF01F" href="../pages/reservations.php">
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
   <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active "  aria-current="page">Reservations</li>
          </ol>
          <h6 class="font-weight-bolder mb-0" >Reservations </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i style="color:#7b809a" class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><a style="color:#7b809a"  href="./destroyer.php" >Sign Out</a></span>
              </a>
            </li>
         
          
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2" >
              <div class=" shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #FFF01F;" >
                <h6 class=" text-capitalize ps-3" style="color: rgb(0,0,0);">Reservations</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2" >
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
              
                  <thead>
                    <tr >
                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                      <!--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Special Request</th>-->
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>-->

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    </tr>
                   <tr >
                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                      <!--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Special Request</th>-->
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>-->

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    </tr>
                    <tr >
                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                      <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                      <!--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Special Request</th>-->
                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                     <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>-->

                     <th style="border-right:none;border-left:none;border-bottom:none;border-top:none"></th>
                    </tr>
                  </thead>

                  <thead>
                    <tr>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Reservation ID</th>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7 ps-2">Name of Guest</th>
                      <th class="text-uppercase text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Rooms</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Arrival date</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Total to Pay</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Reservation Fee</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Reserve Date</th>
                      <!--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Special Request</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Room Number</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Status</th>-->
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7"></th> <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody >
                 
                       <?php
                   while ( $res=mysqli_fetch_array($rs)) {

                    echo " <tr> <td class='align-middle ' style=' padding-left: 2%;'> <span class='text-secondary text-xs font-weight-bold'>".$res['ID']."</span></td>";
                    echo " <td> <div class='d-flex px-2 py-1'><div></div><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$res['name']."</h6></div></div></td>";
                    echo " <td> <div class='d-flex px-2 py-1'><div></div><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$res['room']."</h6></div>
                        </div></td>";
                    echo " <td class='align-middle text-center'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['check_in']."</span>
                      </td>";

                    echo " <td class='align-middle text-center'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['payment']."</span>
                      </td>";
                    echo "  <td class='align-middle ' style=' padding-left: 2%;'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['reservation_fee']."  </span>
                     </td>";
                      echo "  <td class='align-middle' style=' padding-left: 2%;'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['date_reserve']."</span>
                     </td>";

                     $type=$res['status'];

                                if (strcmp($type,"Approved")==0) {

                                    echo " <td class='align-middle' style=' padding-left: 2%;'>
                                          <span class='badge badge-sm bg-gradient-secondary'>Unpaid</span></td>";

                    echo "  <td class='align-middle'>
                <div class='dropup'>
                          <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                            Option
                          </button>
                           <ul class='dropdown-menu' style='width: 40%' >
                            <li><a class='dropdown-item' href='paymentreceipt.php?ID=$res[ID]'>Payment</a></li>
                             <li><a class='dropdown-item' href='#''>Cancel</a></li>
                           </ul>
                         </div>
                      </td>
                       </tr>";   
                                }else if (strcmp($type,"Fully Paid")==0){
                                   echo "<td class='align-middle' style=' padding-left: 2%;'>
                                          <span class='badge badge-sm bg-gradient-success'>Reservation <br> Paid</span>";

                    echo "  <td class='align-middle'>
                <div class='dropup'>
                          <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                            Option
                          </button>
                           <ul class='dropdown-menu' style='width: 40%' >

                            <li><a class='dropdown-item' href='tocheckin.php?ID=$res[ID]'>Check In</a></li>
                             <li><a class='dropdown-item' href='#''>Cancel</a></li>
                           </ul>
                         </div>
                      </td>
                       </tr>";   
                                }else{
                                     echo "<td class='align-middle' style=' padding-left: 2%;'>
                                           <span class='badge badge-sm bg-gradient-warning'>Downpayment</span>";
                                              
                    echo "  <td class='align-middle'>
                <div class='dropup'>
                          <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                            Option
                          </button>
                           <ul class='dropdown-menu' style='width: 40%' >
                            <li><a class='dropdown-item' href='paymentreceipt.php?ID=$res[ID]'>Payment</a></li>

                            <li><a class='dropdown-item' href='tocheckin.php?ID=$res[ID]'>Check In</a></li>
                             <li><a class='dropdown-item' href='#''>Cancel</a></li>
                           </ul>
                         </div>
                      </td>
                       </tr>";   
                                }





                  
                      } ?>
                      


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

<!-- Modal -->

      </div>
     
    </div>
  </main>

  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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