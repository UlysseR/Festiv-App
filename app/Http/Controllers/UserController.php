<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('user.index');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return view('user.index');
    }

    
}
