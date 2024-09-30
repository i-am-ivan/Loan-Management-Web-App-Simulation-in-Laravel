<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Show all system users dashboard with all users
    public function userDashboard(){

        $systemUsers = SystemUsers::all();

        #dd($systemUsers);

        return view('Users.usersDashboard',[
            'heading' => 'Users',
            'subHeading1' => 'Management',
            'userRole1' => 'Administrator',
            'userRole2' => 'Clerk',
            'userName' => 'I-Am-Ivan',
            'subHeading2' => 'You have full control to manage user account settings.',
            'accountStatus1' => 'Active',
            'users' => $systemUsers // Pass users to view
        ]);
    }

    // Add new user to the Database table
    public function addNewUser(Request $request){
        // Validate form inputs
        $validator = Validator::make(request()->all(), [
            'username' => 'required|string|min:4|max:100|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Admin,Clerk',
            'is_active' => 'required|in:Active,Pending,Deactivated',
        ]);

        if ($validator->fails()){
            return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
        }

        // Create new user
        $systemUsers = SystemUsers::create([
            'username' => $request->input('username'),
            'email'=> $request->input('email'),
            'password' => $request->input('password'),
            'role'=> $request->input('role'),
            'is_active'=> $request->input('is_active'),
        ]);

        // Reload with success message
        return redirect()->route('Users.users-dashboard')->with('success', 'User created successfully');
    }
}
