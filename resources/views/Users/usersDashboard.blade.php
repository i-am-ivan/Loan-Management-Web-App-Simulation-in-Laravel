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
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">User Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Main User Stats Cards -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                                        <div class="card bg-info card-rounded">
                                                            <div class="card-body pb-0">
                                                            <h4 class="card-title card-title-dash text-white mb-4"><i class="mdi mdi-account-circle-outline"></i> User Accounts Summary</h4>
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
                                                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
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
                                                </div>
                                                </div>
                                                <div class="col-lg-8 d-flex flex-column">
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
                                                                                        <a href="#">
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
                                                                                    {{ '1002' }}
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                    <img src="../assets/images/faces/face2.jpg" alt="">
                                                                                    <div>
                                                                                        <h6>Laura Brooks</h6>
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
                                                                                    {{ '1003' }}
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
                                                                                    {{ '1004' }}
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
                                                                                    {{ '1005' }}
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                    <img src="../assets/images/faces/face5.jpg" alt="">
                                                                                    <div>
                                                                                        <h6>Katherine Butler</h6>
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
                                        <div class="tab-pane fade show" id="userSettings" role="tabpanel" aria-labelledby="userSettings">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Main User Stats Cards -->

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 d-flex flex-column">
                                                    <div class="row flex-grow">
                                                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body pb-0">
                                                                <h4 class="card-title card-title-dash mb-4"> System Account Settings</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <h2 class="text-success">{{ $userName }}</h2>
                                                                        <p class="status-summary-ight-grey mb-1"><i class="mdi mdi-account-circle-outline"></i>{{ $userRole1 }}</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row flex-grow">
                                                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                                <div class="card card-rounded">
                                                                    <div class="card-body pb-0">

                                                                            <div class="card-inner card-inner-lg">
                                                                                <div class="nk-block">
                                                                                    <div class="nk-block-head">
                                                                                        <h4 class="title">Personal Information</h4>
                                                                                        <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                                                        <hr>
                                                                                    </div>
                                                                                    <div class="profile-ud-list pt-2">
                                                                                        <div class="profile-ud-item">
                                                                                            <div class="profile-ud wider">
                                                                                                <span class="profile-ud-label">User ID: </span>
                                                                                                <span class="profile-ud-value">{{ '1001' }}</span>
                                                                                            </div><br>
                                                                                            <div class="profile-ud-item">
                                                                                                <div class="profile-ud wider">
                                                                                                    <span class="profile-ud-label">Username: </span>
                                                                                                    <span class="profile-ud-value">{{ $userName }}</span>
                                                                                                </div>
                                                                                            </div><br>
                                                                                            <div class="profile-ud-item">
                                                                                                <div class="profile-ud wider">
                                                                                                    <span class="profile-ud-label">User Email: </span>
                                                                                                    <span class="profile-ud-value">{{ $userName }}</span>
                                                                                                </div>
                                                                                            </div><br>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nk-block">
                                                                                    <div class="nk-block-head nk-block-head-line">
                                                                                        <h4 class="title overline-title text-base">Additional Information</h4>
                                                                                        <hr>
                                                                                    </div>
                                                                                    <div class="profile-ud-list">
                                                                                        <div class="profile-ud-item">
                                                                                            <div class="profile-ud wider">
                                                                                                <span class="profile-ud-label">Account Status: </span>
                                                                                                <span class="profile-ud-value">{{ $accountStatus1 }}</span>
                                                                                            </div>
                                                                                        </div><br>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nk-divider divider md"></div>
                                                                                    <div class="nk-block">
                                                                                        <div class="bq-note">
                                                                                            <div class="bq-note-item">
                                                                                                <div class="bq-note-meta">
                                                                                                    <span class="bq-note-added">Added on
                                                                                                        <span class="date">September 15, 2024</span> at
                                                                                                        <span class="time">5:34 PM</span>
                                                                                                    </span>
                                                                                                    <span class="bq-note-sep sep">|</span>
                                                                                                    <span class="bq-note-by">By
                                                                                                        <span>{{ $userName }}</span>
                                                                                                    </span>
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
            </div>
        </div>
    </div>

        <!-- content-wrapper ends -->
        @include('includes.footer')
        <!-- partial -->
    </div>

@endsection
