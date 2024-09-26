<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adminLogin', ['name' => 'i-am-ivan']);
});

Route::get('/adminDashboard', function(){
    return view('adminDashboard', ['heading' => 'Admin Dashboard']);
});
