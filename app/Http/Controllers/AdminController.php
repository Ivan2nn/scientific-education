<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		return view('admin_panel.index');
	}

    public function showRegisteredUsers()
    {
    	$users = User::with('role')->get();
    	$roles = Role::lists('label','label');
    	return view('admin_panel.users', compact('users', 'roles'));
    }

    public function editRegisteredUsersRoles(Request $request)
    {
    	foreach ($request->users as $user_id => $role) {
       		$user = User::findOrFail($user_id);
       		$user->role_id = Role::where('label',$role)->get()->first()->id;
       		$user->update();
    	}

    	$parameters = ['users' => User::with('role')->get(), 'roles' => Role::lists('label','label')];
    	return redirect('/admin/users')->with($parameters);
    }
}
