<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

// Admin Login Page
Route::get('/', function () {
    return view('adminLogin', ['name' => 'Sign in']);
})->name('admin');

// Admin routes
Route::prefix('Admin')->group(function () {
    // Admin Dashboard
    Route::get('/adminDashboard', function(){
        return view('Admin.adminDashboard', ['heading' => 'Main Dashboard', 'subHeading1' => 'Summary','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading2' => 'At a glance summary of the loan system.']);
    })->name('admin.dashboard');

    // Admin User Profile
    Route::get('/userProfile', function(){
        return view('Admin.userProfile', ['heading' => 'My Profile','subHeading1' => '','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading2' => 'You have full control to manage user account setting.']);
    })->name('admin.user-profile');
});

// Loan routes
Route::prefix('Loans')->group(function () {
    // Loan Types Dashboard
    Route::get('/loanTypesDashboard', function(){
        return view('Loans.loanTypesDashboard', ['heading' => 'Loan Types','subHeading1' => '', 'userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading2' => 'You have full control to manage loans.']);
    })->name('loans.loan-types');

    // Customer Loans Dashboard
    Route::get('/customerLoansDashboard', function(){
        return view('Loans.customerLoansDashboard', ['heading' => 'Loans','subHeading1' => '','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading2' => 'You have full control to manage loans.']);
    })->name('loans.customer-loans');
});

// Customer routes
Route::prefix('Customers')->group(function () {
    // Customer Management Dashboard
    Route::get('/customersDashboard', function(){
        return view('Customers.customersDashboard', ['heading' => 'Customers','subHeading1' => '','userRole1' => 'Administrator', 'userRole2' => 'Clerk', 'userName' => 'I-Am-Ivan', 'subHeading2' => 'You have full control to manage customer account setting.']);
    })->name('customers.customers-dashboard');
});

// User routes
Route::prefix('Users')->group(function () {
    // Users Management Dashboard
    Route::get('/usersDashboard', [UsersController::class, 'userDashboard'])->name('users.users-dashboard');
    // Handle form submission
    Route::post('/add',[UsersController::class, 'addNewUser'])->name('users.add-new');
});
