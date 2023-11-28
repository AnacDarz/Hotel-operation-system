<?php
session_start();
 include_once("session.php");
include_once("config.php");

$rs=mysqli_query($mysqli,"select * from reports where status = 'Approval' ");
?>
<style id="table_style" type="text/css">
    body
    {
        font-family: Arial;
        font-size: 10pt;
    }
    table
    {
        border: ;
        border-collapse: collapse;
    }
    table th
    {
         background-color: #808080;
        color: #FFFFFF;
        font-weight: bold;
    }
    table th, table td
    {
        padding: 5px;
        border: none;
    }
    h1, h5{
      text-align: center;
    }
</style>

<script type="text/javascript">
    function PrintTable() {
        var printWindow = window.open('', '', 'height=200,width=400');
        printWindow.document.write('<html><head><h1>Hotel Operation </h1> <h5>Approval Reports</h5>');
 
        //Print the Table CSS.
        var table_style = document.getElementById("table_style").innerHTML;
        printWindow.document.write('<style type = "text/css">');
        printWindow.document.write(table_style);
        printWindow.document.write('</style>');
        printWindow.document.write('</head>');
 
        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("dvContents").innerHTML;
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');
 
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();


    }
</script>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  table{text-align:left;}
th,td{padding:4px 8px;}
th{cursor:pointer;}

</style>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Reports | Hotel Operation
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

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opaciFty-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../pages/admindashboard.php">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Hotel Operation </span>
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
     
        </li>
          <li class="nav-item">
          <a class="nav-link text-white " href="../pages/adminreports.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Reports</span>
          </a>
        </li>
        
           <li class="nav-item">
          <a class="nav-link text-white active "style="background-color: #FFF01F" href="../pages/adminreports.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">Approval Reports</span>
          </a>
        </li>

           <li class="nav-item">
          <a class="nav-link text-white " href="../pages/payments.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">Payment Reports</span>
          </a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white " href="../pages/checkreport.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">Checked in/out report</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white " href="../pages/amenitiesreport.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      
            </div>
            <span class="nav-link-text ms-1">Amenities Report</span>
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
            <li class="breadcrumb-item text-sm text-dark active "  aria-current="page">Approval Reports</li>
          </ol>
          <h6 class="font-weight-bolder mb-0" >Approval Reports </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline"> <input id="suppliier" type="search" class="form-control search-input" data-table="customers-list"/>
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
    <div  class="container-fluid py-4">
      <div  class="row">

        <div class="col-12">

          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2" >
                
              <div class=" shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #FFF01F;" >
                <h6 class=" text-capitalize ps-3" style="color: rgb(0,0,0);">Approval Reports</h6>
              </div>
 <div class="input-group input-group-outline">
               <select class="form-select form-select-lg mb-3" onchange="fus();" name="reqs"id="req" aria-label=".form-select-lg example">
                  <option selected>Select</option>

                  <option value="">All</option>
                  <option value="<?php echo date("Y-m-d"); ?>">Today</option>
                  <option value="<?php echo date("w"); ?>">Weekly</option>
                  <option value="<?php echo date("m"); ?>">Monthly</option>
                  <option value="<?php echo date("Y"); ?>">This Year</option>
                </select>
            </div>
              
     
              <div class="card-body p-3" >
                 <input type="button" onclick="PrintTable();" value="Print All" style="border:none;background-color: #0000; padding-left: 90%" class="text-success font-weight-bold text-l " data-toggle="tooltip" data-original-title="Edit user" />

                 
                </div>
            </div>
            <div class="card-body px-0 pb-2" >

              <div id="dvContents" class="table-responsive p-0">
               

                <div class="col-12 col-xl-1"style="padding-left: 90%">
              <div class="card card-plain h-100">
                
              
              </div>
            </div>



                <table  class="table table-striped mt32 customers-list" id="myTable">
              
                 
                  <thead>
                    <tr>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(0)">ID</th>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7 ps-2"onclick="sortBy(1)">Name</th>
                      <th class="text-uppercase text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(2)">Rooms</th>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(3)">Arrival Date</th>
                      <th class=" text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(4)">Departure Date</th>
                      <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(5)">Reserve Date</th>
                      <th class=" text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(6)">Date</th>
                      <th class=" text-uppercase text-danger text-xxs font-weight-bolder opacity-7"onclick="sortBy(7)">Approved By</th>
                      <!--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Special Request</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Room Number</th>
                      <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Status</th>-->
         
                        <th class="text-center text-uppercase text-danger text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody >
                  <?php
                   while ( $res=mysqli_fetch_array($rs)) {
                   echo " <tr> <td class='align-middle ' style=' padding-left: 1%;'> <span class='text-secondary text-xs font-weight-bold'>".$res['ID']."</span></td>";
                    echo " <td> <div class='d-flex px-2 py-1'><div></div><div class='text-secondary text-xs font-weight-bold'>".$res['name']."</h6></div></div></td>";
                    echo " <td> <div class='d-flex px-2 py-1'><div></div><div class='text-secondary text-xs font-weight-bold'>".$res['rooms']."</h6></div>
                        </div></td>";
                    echo " <td class='align-middle text-center'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['arrival_date']."</span>
                      </td>";

                    echo " <td class='align-middle text-center'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['departure_date']."</span>
                      </td>";
                    echo "  <td class='align-middle ' style=' padding-left: 1%;'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['reserve_date']."</span>
                     </td>";
                      echo "  <td class='align-middle' style=' padding-left: 1%;'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['date']."</span>
                     </td><td class='align-middle' style=' padding-left: 1%;'>
                        <span class='text-secondary text-xs font-weight-bold'>".$res['employee']."</span>
                     </td><td class='align-middle'>
                        

                    
                  
                       
                      </td></tr>";
                                            }
                                           ?>
                     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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


<script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>


    <script type="text/javascript">
/*
A few requirements for configuring the table:
1. The table must have id="sortable", i.e. <table id="sortable">
2. The table needs to have a table header, and the table header must have
   onclick="sortBy(n)", where n is the column number starting with 0
   i.e. <th onclick="sortBy(0)">Title of First Column</th>
*/

cPrev = -1; // global var saves the previous c, used to
            // determine if the same column is clicked again

function sortBy(c) {
    rows = document.getElementById("myTable").rows.length; // num of rows
    columns = document.getElementById("myTable").rows[0].cells.length; // num of columns
    arrTable = [...Array(rows)].map(e => Array(columns)); // create an empty 2d array

    for (ro=0; ro<rows; ro++) { // cycle through rows
        for (co=0; co<columns; co++) { // cycle through columns
            // assign the value in each row-column to a 2d array by row-column
            arrTable[ro][co] = document.getElementById("myTable").rows[ro].cells[co].innerHTML;
        }
    }

    th = arrTable.shift(); // remove the header row from the array, and save it
    
    if (c !== cPrev) { // different column is clicked, so sort by the new column
        arrTable.sort(
            function (a, b) {
                if (a[c] === b[c]) {
                    return 0;
                } else {
                    return (a[c] < b[c]) ? -1 : 1;
                }
            }
        );
    } else { // if the same column is clicked then reverse the array
        arrTable.reverse();
    }
    
    cPrev = c; // save in previous c

    arrTable.unshift(th); // put the header back in to the array

    // cycle through rows-columns placing values from the array back into the html table
    for (ro=0; ro<rows; ro++) {
        for (co=0; co<columns; co++) {
            document.getElementById("myTable").rows[ro].cells[co].innerHTML = arrTable[ro][co];
        }
    }
}

    </script>
   <script>
    function fus() {
        
      var ddd = document.getElementById('req').value;
      var suppliier = document.getElementById('suppliier');
      suppliier.value = ddd;
      suppliier.dispatchEvent(new Event('input'));
    }


    </script>
</body>

</html>