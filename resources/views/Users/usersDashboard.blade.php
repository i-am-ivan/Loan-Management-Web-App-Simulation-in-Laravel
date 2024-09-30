@extends('layouts.default')

@section('content')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="home-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">System {{ $heading }} Overview</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                            <div class="row">
                                                <div class="col-lg-8 d-flex flex-column">
                                                    <div class="row flex-grow">
                                                        <div class="col-md-4 col-lg-4 grid-margin stretch-card">
                                                            <div class="card bg-info card-rounded">
                                                                <div class="card-body pb-0">
                                                                    <h5 class="card-title card-title-dash text-white mb-4"><i class="mdi mdi-account-circle-outline"></i> User Accounts Summary</h5>
                                                                    <div class="row">
                                                                        <div class="col-sm-8">
                                                                        <p class="status-summary-ight-white mb-1 text-white">System Accounts</p>
                                                                        <h2 class="text-white">357</h2>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                        <div class="status-summary-chart-wrapper pb-4">

                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-8 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body pb-0">
                                                                <h4 class="card-title card-title-dash mb-4"> System Accounts Status Summary</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="status-summary-ight-grey mb-1"><i class="mdi mdi-account-circle-outline"></i> Active System Accounts</p>
                                                                        <h2 class="text-success">257</h2>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="status-summary-chart-wrapper pb-4">
                                                                            <p class="status-summary-ight-grey mb-1"><i class="mdi mdi-account-circle-outline"></i> Deactivate System Accounts</p>
                                                                            <h2 class="text-danger">100</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Lists og Users here -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 d-flex flex-column">
                                                    <!-- Table Here -->
                                                    <div class="row flex-grow">
                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                                        <div>
                                                                        <h4 class="card-title card-title-dash">System Accounts Summary</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">There are {{ '327' }} User Accounts</p>
                                                                        </div>
                                                                        <div>
                                                                            <button class="btn btn-success btn-lg text-white mb-0 me-0" type="button">
                                                                                <i class="mdi mdi-account-plus"></i>Add new user
                                                                            </button>
                                                                            <button class="btn btn-default btn-lg text-success mb-0 me-0" type="button">
                                                                                <i class="mdi mdi-printer"></i>Print
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive  mt-1">
                                                                        <table class="table select-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>User ID</th>
                                                                                    <th>User</th>
                                                                                    <th>Account Status</th>
                                                                                    <th>Creator</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1001' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-success">Active</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1002' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-success">Active</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1003' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-warning">Pending</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1004' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-danger">Deactivated</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1005' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole2 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-success">Active</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                            <span>{{ '1006' }}</span>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex ">
                                                                                        <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole2 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-success">Active</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        {{ '1007' }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex">
                                                                                        <img src="../assets/images/faces/face2.jpg" alt="">
                                                                                        <div>
                                                                                            <h6>Laura Brooks</h6>
                                                                                            <p>{{ $userRole2 }}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="badge badge-opacity-warning">Pending</div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div>
                                                                                            <h6>{{ $userName }}</h6>
                                                                                            <p>{{ $userRole1 }}</p>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="btn-wrapper">
                                                                                            <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                <td>
                                                                                    {{ '1008' }}
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                    <img src="../assets/images/faces/face3.jpg" alt="">
                                                                                    <div>
                                                                                        <h6>Wayne Murphy</h6>
                                                                                        <p>{{ $userRole2 }}</p>
                                                                                    </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <h6>{{ $userName }}</h6>
                                                                                        <p>{{ $userRole1 }}</p>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="btn-wrapper">
                                                                                        <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                <tr>
                                                                                <td>
                                                                                    {{ '1009' }}
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                    <img src="../assets/images/faces/face4.jpg" alt="">
                                                                                    <div>
                                                                                        <h6>Matthew Bailey</h6>
                                                                                        <p>{{ $userRole2 }}</p>
                                                                                    </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-success">Active</div>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <h6>{{ $userName }}</h6>
                                                                                        <p>{{ $userRole1 }}</p>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="btn-wrapper">
                                                                                        <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                <tr>
                                                                                <td>
                                                                                    {{ '1010' }}
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                    <img src="../assets/images/faces/face5.jpg" alt="">
                                                                                    <div>
                                                                                        <h6>Katherine Butler</h6>
                                                                                        <p>{{ $userRole2 }}</p>
                                                                                    </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="badge badge-opacity-warning">Pending</div>
                                                                                </td>
                                                                                <td>
                                                                                    <div>
                                                                                        <h6>{{ $userName }}</h6>
                                                                                        <p>{{ $userRole1 }}</p>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="btn-wrapper">
                                                                                        <a href="#" class="btn btn-default text-success me-0"><i class="icon-download"></i> View </a>
                                                                                    </div>
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
                                                <div class="col-lg-4 d-flex flex-column">
                                                        <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body pb-0">
                                                                <h3 class="card-title card-title-dash mb-4"><i class="mdi mdi-account-plus"></i> Create New User </h3>
                                                                <div class="row">
                                                                    <!-- Create new user form here -->
                                                                    <div class="col-sm-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                              <div class="nk-block-head">
                                                                                  <div class="nk-block-head-content">
                                                                                      <h5 class="nk-block-title fw-normal">
                                                                                          Personal Details
                                                                                      </h5>
                                                                                      <div class="card-description">
                                                                                          <p>You have full control to manage your own account setting.
                                                                                              <span class="text-primary">
                                                                                                  <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Tooltip on right" data-bs-original-title="Tooltip on right">
                                                                                                  </em>
                                                                                              </span>
                                                                                          </p>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <form class="forms-sample">
                                                                                <div class="form-group col-sm-10">
                                                                                  <label for="exampleInputUsername1">Username</label>
                                                                                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" minlength="4">
                                                                                </div>
                                                                                <div class="form-group col-sm-10">
                                                                                  <label for="exampleInputEmail1">Email address</label>
                                                                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
                                                                                </div>
                                                                                <div class="nk-block-head-content">
                                                                                    <h5 class="nk-block-title fw-normal">
                                                                                        Password Confirmation
                                                                                    </h5>
                                                                                    <div class="card-description">
                                                                                        <p>Create New Password for the Account.
                                                                                            <span class="text-primary">
                                                                                                <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Tooltip on right" data-bs-original-title="Tooltip on right">
                                                                                                </em>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-12">
                                                                                    <div class=" col-sm-10">
                                                                                        <label for="exampleInputPassword1">Password</label>
                                                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" minlength="8" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-12">
                                                                                    <div class=" col-sm-10">
                                                                                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                                                                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" minlength="8" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-10">
                                                                                  <button type="submit" class="btn btn-block btn-success btn-lg fw-medium auth-form-btn text-white">Create</button>
                                                                                  <button class="btn btn-block btn-danger btn-lg fw-medium auth-form-btn text-white">Cancel</button>
                                                                                </div>
                                                                              </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- content-wrapper ends -->
        @include('includes.footer')
        <!-- partial -->
    </div>

@endsection
