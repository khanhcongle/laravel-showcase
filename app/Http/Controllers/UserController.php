<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users', ['users' => User::all()]);
    }

    public function create()
    {
        return view('users_create');
    }

    public function store(Request $request) {
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'Member',
            ]);

        $user->save();
        return redirect('users');
    }
}
