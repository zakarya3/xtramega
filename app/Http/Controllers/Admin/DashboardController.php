<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function users(Type $var = null)
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function viewusers($id)
    {
        $user = User::find($id);
        return view('admin.users.view', compact('user'));
    }
}
