<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
    public function redirect()
    {
        // Perform any logic here if needed
        return redirect()->route('adminDashboard');
    }
}


