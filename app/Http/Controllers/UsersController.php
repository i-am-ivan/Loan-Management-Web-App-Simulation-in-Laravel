<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function addNewUser(Request $request){
        // Validate form inputs
        $systemUsers = SystemUsers::create($request->all());
        return $systemUsers;
    }

    //
    public function getAllUsers(){
        $systemUsers = SystemUsers::all();
    }
}
