<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AISLE Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard-page-asset')}}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('dashboard-page-asset')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('dashboard-page-asset')}}/images/logo.ico" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/view-dashboard"><img src="{{asset('dashboard-page-asset')}}/images/logo.png" style="width: 150px; height: 46px;" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/view-dashboard"><img src="{{asset('dashboard-page-asset')}}/images/logo-mini.png" style="width: 40px;" alt="logo"/></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/view-dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Social Media</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Keyword</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Context</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-bar-chart-alt menu-icon"></i>
              <span class="menu-title">Analytics</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> General Settings </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> User Settings </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="handle-logout" class="nav-link">
              <i class="ti-power-off menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        

        <div class="row" style="margin-top:2%; margin-left:2%; margin-right:2%;">

        <div class="col-md-4 stretch-card grid-margin">
              <div class="card" style="background-color:#ebeff5;">
                <div class="card-body">
                  
                <p class="card-title" style="text-align:center;">Top 10 Hate Speech Spreaders</p>
                 
                  <hr>
                 
                  <ul class="icon-data-list" style="width:100%;">

                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         

                        </div>
                      </div>
                    </li>


                    <li>
                      <div class="d-flex">
                        <img src="{{asset('dashboard-page-asset')}}/images/faces/face1.jpg" alt="user">
                        <div style="width:100%;">

                          <p class="text-info mb-1">Isabella Becker  (No: 01)</p>

                            <div class="progress progress-md flex-grow-1 mr-12">
                                    <div class="progress-bar bg-inf0" role="progressbar" style="width: 100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0" style="margin-top:1%;">140 (Times)</p>
                         
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4 grid-margin">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card" style="background-color:#ebeff5;">
                            <div class="card-body">
                                <p class="card-title" style="text-align:center;">Top 10 Trending Words</p>
                                <hr>
                                <div class="charts-data">
                                <div class="mt-3">
                                    <p class="mb-0">Data 1</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">5k</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 2</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">1k</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 3</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">992</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                </div>  
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid-margin">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card" style="background-color:#ebeff5;">
                            <div class="card-body">
                                <p class="card-title" style="text-align:center;">Top 10 Trending Contexts</p>
                                <hr>
                                <div class="charts-data">
                                <div class="mt-3">
                                    <p class="mb-0">Data 1</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">5k</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 2</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">1k</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 3</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">992</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Data 4</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="progress progress-md flex-grow-1 mr-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mb-0">687</p>
                                    </div>
                                </div>
                                </div>  
                            </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
    </div>
  </div>

  <footer class="footer"">
        <p style="text-align: center;">Copyright © <a href="https://dreamspace.academy/pages/1-0-index.php" target="_blank">DreamSpace Academy</a> | All Rights Reserved |  Co-created by <a href="https://www.linkedin.com/in/gunarakulan-gunaratnam-161119156/" target="_blank">Gunarakulan Gunaratnam</a></p>
  </footer>

  <!-- plugins:js -->
  <script src="{{asset('dashboard-page-asset')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('dashboard-page-asset')}}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('dashboard-page-asset')}}/js/off-canvas.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/template.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/settings.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('dashboard-page-asset')}}/js/dashboard.js"></script>
  <script src="{{asset('dashboard-page-asset')}}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

