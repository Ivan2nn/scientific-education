<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function showRegisteredUsers()
    {
    	$users = User::with('role')->get();
    	$roles = Role::lists('label','label');
    	return view('admin_panel.users', compact('users', 'roles'));
    }
}
