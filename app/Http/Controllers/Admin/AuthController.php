<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
           'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if (auth('admin')->attempt($data))
        {
            return redirect(route('index'));
        }

        return redirect(route('admin.login'))->withErrors(['email'=>"User  doesn't exists"]);
    }

    public function adminLogout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
