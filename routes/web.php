<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adminLogin', ['name' => 'i-am-ivan']);
});

Route::get('/Admin/adminDashboard', function(){
    return view('adminDashboard', ['heading' => 'Admin Dashboard']);
});

Route::get('/Admin/userProfile', function(){
    return view('userProfile', ['heading' => 'My Profile']);
});

Route::get('/Admin/loanManagementDashboard', function(){
    return view('loanManagementDashboard', ['heading' => 'Loans']);
});

Route::get('/Admin/customerManagementDashboard', function(){
    return view('customerManagementDashboard', ['heading' => 'Customers']);
});

Route::get('/Admin/usersManagementDashboard', function(){
    return view('usersManagementDashboard', ['heading' => 'Users']);
});

