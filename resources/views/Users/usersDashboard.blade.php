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
                                                        <!-- Display Success Message -->
                                                        @if(session('success'))
                                                            <div class="alert alert-success">
                                                                {{ session('success') }}
                                                            </div>
                                                        @endif

                                                        <!-- Display Validation Errors -->
                                                        @if($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif

                                                        <div class="col-12 grid-margin stretch-card">
                                                            <div class="card card-rounded">
                                                                <div class="card-body">
                                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                                        <div>
                                                                        <h4 class="card-title card-title-dash">System Accounts Summary</h4>
                                                                        <p class="card-subtitle card-subtitle-dash">There are {{ '327' }} User Accounts</p>
                                                                        </div>
                                                                        <div>
                                                                            <label>
                                                                                <input type="search" class="form-control" placeholder="Search" aria-controls="order-listing">
                                                                            </label>
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
                                                                                    <th><i class="mdi mdi-account text-muted me-1"></i>User</th>
                                                                                    <th>Account Status</th>
                                                                                    <th><i class="mdi mdi-account-edit text-muted me-1"></i>Creator</th>
                                                                                    <th><i class="mdi mdi-calendar text-muted me-1"></i> Created On</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($users as $key => $user)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#userSettings" role="tab" aria-selected="false" tabindex="-1">
                                                                                                <span>{{ ++$key }}</span>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="d-flex">
                                                                                                <img src="../assets/images/faces/face1.jpg" alt="">
                                                                                                <div>
                                                                                                    <h6>{{ $user->username }}</h6>
                                                                                                    <p>{{ $user->role }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="badge badge-opacity-success">{{ $user->is_active }}</div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>
                                                                                                <h6>{{ $userName }}</h6>
                                                                                                <p>{{ $userRole1 }}</p>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            {{ $user->created_at->format('Y-m-d') }}
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-wrapper">
                                                                                                <a href="#" class="btn btn-default text-success me-0">
                                                                                                    <i class="icon-eye"></i> View
                                                                                                </a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <br>
                                                                        <div class="col-sm-12 col-md-8">
                                                                            <p class="card-subtitle card-subtitle-dash" id="order-listing_info" role="status" aria-live="polite">
                                                                                Showing 1 to 10 of 10 entries
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="dataTables_paginate paging_simple_numbers card-subtitle card-subtitle-dash" id="order-listing_paginate">
                                                                                <ul class="pagination">
                                                                                    <li class="paginate_button page-item previous disabled" id="order-listing_previous">
                                                                                        <a aria-controls="order-listing" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a>
                                                                                    </li>
                                                                                    <li class="paginate_button page-item active">
                                                                                        <a href="#" aria-controls="order-listing" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a>
                                                                                    </li>
                                                                                    <li class="paginate_button page-item next disabled" id="order-listing_next">
                                                                                        <a aria-controls="order-listing" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
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
                                                                              <form class="forms-sample" method="POST" action="{{ route('users.add-new') }}">
                                                                                @csrf
                                                                                <div class="form-group col-sm-10">
                                                                                  <label for="exampleInputUsername1"><i class="mdi mdi-account text-muted me-1"></i> Username</label>
                                                                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" minlength="4" @required(true)>
                                                                                  @error('username')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                  @enderror
                                                                                </div>
                                                                                <div class="form-group col-sm-10">
                                                                                  <label for="exampleInputEmail1"><i class="mdi mdi-email text-muted me-1"></i>Email address</label>
                                                                                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="">
                                                                                  @error('email')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                  @enderror
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
                                                                                        <label for="exampleInputPassword1"><i class="mdi mdi-account-key text-muted me-1"></i>Password</label>
                                                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" required="">
                                                                                        @error('password')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-12">
                                                                                    <div class=" col-sm-10">
                                                                                        <label for="exampleInputConfirmPassword1"><i class="mdi mdi-account-key text-muted me-1"></i>Confirm Password</label>
                                                                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" minlength="8" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="nk-block-head-content">
                                                                                    <h5 class="nk-block-title fw-normal">
                                                                                        User account status settings
                                                                                    </h5>
                                                                                    <div class="card-description">
                                                                                        <p>Determine the status of the new account
                                                                                            <span class="text-primary">
                                                                                                <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Tooltip on right" data-bs-original-title="Tooltip on right">
                                                                                                </em>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-12">
                                                                                    <div class=" col-sm-10">
                                                                                        <label for="exampleInputPassword1">
                                                                                            <i class="mdi mdi-account-lock text-muted me-1"></i>Account Status
                                                                                        </label>
                                                                                        <!--Dropdown foe user status-->
                                                                                        <select class="form-control js-select2" aria-hidden="true" id="is_active" name="is_active" required>
                                                                                            <option value="Pending" {{ old('is_active') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                                                            <option value="Active" {{ old('is_active') == 'Active' ? 'selected' : '' }}>Active</option>
                                                                                            <option value="Deactivated" {{ old('is_active') == 'Deactivated' ? 'selected' : '' }}>Deactivated</option>
                                                                                        </select>
                                                                                        @error('is_active')
                                                                                            <small class="text-danger">{{ $message }}</small>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-sm-10">
                                                                                  <button type="submit" class="btn btn-block btn-success btn-lg fw-medium auth-form-btn text-white">Create</button>
                                                                                  <a href="{{ route('users.users-dashboard') }}" class="btn btn-block btn-danger btn-lg fw-medium auth-form-btn text-white">Cancel</a>
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
