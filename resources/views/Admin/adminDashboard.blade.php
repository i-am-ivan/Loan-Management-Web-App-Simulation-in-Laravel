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
    <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
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
              <h1 class="welcome-text"><span class="text-black fw-bold"> <i class="menu-icon mdi mdi-chart-areaspline"></i> {{ $heading }}</span> Overview </h1>
              <h3 class="welcome-sub-text">Loan performance summary this week </h3>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <p class="mb-1 mt-3 fw-semibold"><i class="menu-icon mdi mdi-account-circle-outline"></i> Allen Moreno</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                    <p class="mb-1 mt-3 fw-semibold">{{ 'username' }}</p>
                  </div>
                  <a class="dropdown-item" href="{{ route('admin.user-profile') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
                  <a class="dropdown-item" href="{{ route('admin') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                </div>
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
                  <li class="nav-item"> <a class="nav-link" href="{{ route('loans.customer-loans') }}">Loan Management</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="{{ route('users.users-dashboard') }}">User Management</a></li>
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
              <a class="nav-link" href="{{ route('admin') }}">
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
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-printer"></i> Print</a>
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
                                  <h4 class="card-title">Data table</h4>
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="table-responsive">
                                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="order-listing_length"><label>Show <select name="order-listing_length" aria-controls="order-listing" class="custom-select custom-select-sm form-control"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="order-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                          <thead>
                                            <tr><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Order #: activate to sort column ascending" style="width: 115.203px;">Order #</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 192.797px;">Purchased On</th><th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column descending" style="width: 141.938px;" aria-sort="ascending">Customer</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 111.109px;">Ship to</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 152.688px;">Base Price</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased Price: activate to sort column ascending" style="width: 218.281px;">Purchased Price</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 127.078px;">Status</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 120.922px;">Actions</th></tr>
                                          </thead>
                                          <tbody>










                                          <tr class="odd">
                                              <td class="">7</td>
                                              <td>2011/03/11</td>
                                              <td class="sorting_1">Cris</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-success">Closed</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="even">
                                              <td class="">2</td>
                                              <td>2015/04/01</td>
                                              <td class="sorting_1">Doe</td>
                                              <td>Brazil</td>
                                              <td>$4500</td>
                                              <td>$7500</td>
                                              <td>
                                                <label class="badge badge-danger">Pending</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="odd">
                                              <td class="">1</td>
                                              <td>2012/08/03</td>
                                              <td class="sorting_1">Edinburgh</td>
                                              <td>New York</td>
                                              <td>$1500</td>
                                              <td>$3200</td>
                                              <td>
                                                <label class="badge badge-info">On hold</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="even">
                                              <td class="">9</td>
                                              <td>2016/11/12</td>
                                              <td class="sorting_1">John</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-success">Closed</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="odd">
                                              <td class="">3</td>
                                              <td>2010/11/21</td>
                                              <td class="sorting_1">Sam</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-success">Closed</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="even">
                                              <td class="">4</td>
                                              <td>2016/01/12</td>
                                              <td class="sorting_1">Sam</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-success">Closed</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="odd">
                                              <td class="">5</td>
                                              <td>2017/12/28</td>
                                              <td class="sorting_1">Sam</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-success">Closed</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="even">
                                              <td class="">6</td>
                                              <td>2000/10/30</td>
                                              <td class="sorting_1">Sam</td>
                                              <td>Tokyo</td>
                                              <td>$2100</td>
                                              <td>$6300</td>
                                              <td>
                                                <label class="badge badge-info">On-hold</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="odd">
                                              <td class="">8</td>
                                              <td>2015/06/25</td>
                                              <td class="sorting_1">Tim</td>
                                              <td>Italy</td>
                                              <td>$6300</td>
                                              <td>$2100</td>
                                              <td>
                                                <label class="badge badge-info">On-hold</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr><tr class="even">
                                              <td class="">10</td>
                                              <td>2003/12/26</td>
                                              <td class="sorting_1">Tom</td>
                                              <td>Germany</td>
                                              <td>$1100</td>
                                              <td>$2300</td>
                                              <td>
                                                <label class="badge badge-danger">Pending</label>
                                              </td>
                                              <td>
                                                <button class="btn btn-outline-primary">View</button>
                                              </td>
                                            </tr></tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="order-listing_previous"><a aria-controls="order-listing" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="order-listing_next"><a aria-controls="order-listing" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li></ul></div></div></div></div>
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
    <script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../assets/js/data-table.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>
