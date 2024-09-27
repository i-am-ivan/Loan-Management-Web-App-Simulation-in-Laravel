<?php

use Illuminate\Support\Facades\Route;

// Admin Login Page
Route::get('/', function () {
    return view('adminLogin', ['name' => 'i-am-ivan']);
});

// Admin routes
Route::prefix('Admin')->group(function () {
    // Admin Dashboard
    Route::get('/adminDashboard', function(){
        return view('Admin.adminDashboard', ['heading' => 'Admin Dashboard']);
    })->name('admin.dashboard');

    // Admin User Profile
    Route::get('/userProfile', function(){
        return view('Admin.userProfile', ['heading' => 'My Profile']);
    })->name('admin.user-profile');
});

// Loan routes
Route::prefix('Loans')->group(function () {
    // Loan Types Dashboard
    Route::get('/loanTypesDashboard', function(){
        return view('Loans.loanTypesDashboard', ['heading' => 'Loan Types']);
    })->name('loans.loan-types');

    // Customer Loans Dashboard
    Route::get('/customerLoansDashboard', function(){
        return view('Loans.customerLoansDashboard', ['heading' => 'Loans']);
    })->name('loans.customer-loans');
});

// Customer routes
Route::prefix('Customers')->group(function () {
    // Customer Management Dashboard
    Route::get('/customersDashboard', function(){
        return view('Customers.customersDashboard', ['heading' => 'Customers']);
    })->name('customers.customers-dashboard');
});

// User routes
Route::prefix('Users')->group(function () {
    // Users Management Dashboard
    Route::get('/usersDashboard', function(){
        return view('Users.usersDashboard', ['heading' => 'Users']);
    })->name('users.users-dashboard');
});
