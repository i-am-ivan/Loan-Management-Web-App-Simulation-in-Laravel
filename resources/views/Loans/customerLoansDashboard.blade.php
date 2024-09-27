Loan Products Overview<
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $heading }} - Loan App Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="a../ssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="">
              <img src="../assets/images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="">
              <img src="../assets/images/logo-mini.svg" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text"><span class="text-black fw-bold">{{ $heading }}</span> Products Overview</h1>
              <h3 class="welcome-sub-text">Loan performance summary this week </h3>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Administration</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-bank"></i>
                <span class="menu-title">Loans</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('loans.loan-types') }}">Loan Management</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Customers</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('customers.customers-dashboard') }}">Customer Management</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-account-network"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">User Management</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user-profile') }}">
                  <i class="menu-icon mdi mdi-account-edit"></i>
                  <span class="menu-title">My Account</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="docs/documentation.html">
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                      </li>
                    </ul>
                    <div>
                      <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Total Amount Borrowed</p>
                              <h3 class="rate-percentage">{{ 'KES 1,023,455.00' }}</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Total Active Borrows</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Total Repayment</p>
                              <h3 class="rate-percentage">{{ 'KES 888,987.32' }}</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Total Defaultment</p>
                              <h3 class="rate-percentage">{{ 'KES 367,987.73' }}</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Total Defaulters</p>
                              <h3 class="rate-percentage">{{ '1,307' }}</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Total Active Loans</p>
                              <h3 class="rate-percentage">{{ '3,801' }}</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Current Loan Product Performance</h4>
                                <p class="card-description"> Shows how each Loan Product has been Performing Current Month <code>Stats are subjective to change</code>
                                </p>
                                <div>
                                    <div class="btn-wrapper">
                                      <a href="#" class="btn btn-otline-dark bg-info"><i class="icon-printer"></i> Print</a>
                                    </div>
                                  </div>
                                <div class="table-responsive">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th> Loan Product Code </th>
                                        <th> Product Type </th>
                                        <th> Total Pending </th>
                                        <th> Total Customers </th>
                                        <th> Total Disbursed </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="py-1">
                                          <p>{{ '1001' }}</p>
                                        </td>
                                        <td>  {{ 'Asset Finance' }} </td>
                                        <td>
                                            <p>
                                                {{ '1,378' }}
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                {{ '4,378' }}
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                {{ 'KES 367,987.73' }}
                                            </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1002' }}</p>
                                          </td>
                                          <td>  {{ 'Business Loan' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1003' }}</p>
                                          </td>
                                          <td>  {{ 'Personal Loan' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1004' }}</p>
                                          </td>
                                          <td>  {{ 'Mortgage' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1005' }}</p>
                                          </td>
                                          <td>  {{ 'Payday Loans' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1006' }}</p>
                                          </td>
                                          <td>  {{ 'Digital Loans' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="py-1">
                                            <p>{{ '1007' }}</p>
                                          </td>
                                          <td>  {{ 'Education Loans' }} </td>
                                          <td>
                                              <p>
                                                  {{ '1,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ '4,378' }}
                                              </p>
                                          </td>
                                          <td>
                                              <p>
                                                  {{ 'KES 367,987.73' }}
                                              </p>
                                          </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Loan Web App - Admin Panel.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>
