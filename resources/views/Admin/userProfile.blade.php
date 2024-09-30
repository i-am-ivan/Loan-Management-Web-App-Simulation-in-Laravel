@extends('layouts.default')

@section('content')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">My Profile</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-content tab-content-basic">
                          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                              <div class="col-sm-8">
                                  <div class="card">
                                      <div class="card-body">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title fw-normal">
                                                    Personal Details
                                                </h3>
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
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" minlength=4 value="{{ $userName }} ">
                                          </div>
                                          <div class="form-group col-sm-10">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                                          </div>
                                          <div class="form-group col-sm-10">
                                            <button type="submit" class="btn btn-block btn-success btn-lg fw-medium auth-form-btn text-white">Save</button>
                                            <button class="btn btn-block btn-danger btn-lg fw-medium auth-form-btn text-white">Cancel</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                      <div class="nk-block-head">
                                          <div class="nk-block-head-content">
                                              <h4 class="nk-block-title fw-normal">
                                                  Change Password
                                              </h4>
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
                                        <div class="form-group col-sm-12">
                                            <div class=" col-sm-10">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" minlength="8" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <div class=" col-sm-10">
                                                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" minlength="8" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-success btn-lg fw-medium auth-form-btn text-white">Change Password</button>
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
                <!-- content-wrapper ends -->
                <!-- content-wrapper ends -->
                @include('includes.footer')
                <!-- partial -->
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
@endsection
