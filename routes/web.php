<?php

use Illuminate\Support\Facades\Route;

// Admin Login Page
Route::get('/', function () {
    return view('adminLogin', ['name' => 'Sign in']);
})->name('admin');

// Admin routes
Route::prefix('Admin')->group(function () {
    // Admin Dashboard
    Route::get('/adminDashboard', function(){
        return view('Admin.adminDashboard', ['heading' => 'Admin Dashboard','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'At a glance summary of the loan system.']);
    })->name('admin.dashboard');

    // Admin User Profile
    Route::get('/userProfile', function(){
        return view('Admin.userProfile', ['heading' => 'My Profile','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'You have full control to manage user account setting.']);
    })->name('admin.user-profile');
});

// Loan routes
Route::prefix('Loans')->group(function () {
    // Loan Types Dashboard
    Route::get('/loanTypesDashboard', function(){
        return view('Loans.loanTypesDashboard', ['heading' => 'Loan Types','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'You have full control to manage user account setting.']);
    })->name('loans.loan-types');

    // Customer Loans Dashboard
    Route::get('/customerLoansDashboard', function(){
        return view('Loans.customerLoansDashboard', ['heading' => 'Loans','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'You have full control to manage user account setting.']);
    })->name('loans.customer-loans');
});

// Customer routes
Route::prefix('Customers')->group(function () {
    // Customer Management Dashboard
    Route::get('/customersDashboard', function(){
        return view('Customers.customersDashboard', ['heading' => 'Customers','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'You have full control to manage user account setting.']);
    })->name('customers.customers-dashboard');
});

// User routes
Route::prefix('Users')->group(function () {
    // Users Management Dashboard
    Route::get('/usersDashboard', function(){
        return view('Users.usersDashboard', ['heading' => 'Users','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading' => 'You have full control to manage user account setting.', 'accountStatus1' => 'Active']);
    })->name('users.users-dashboard');
});
