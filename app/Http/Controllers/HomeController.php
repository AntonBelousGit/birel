<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;

// use App\Models\User;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('lc.home');
    }

    public function orders()
    {
        return view('lc.page-lc-orders');
    }

    public function update(UserUpdateRequest $request)
    {

        auth()->user()->update($request->validated());

        return redirect()->back()->with('success', 'Profile updated.');
    }

    public function changepass(Request $request)
    {

        $validated = $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        auth()->user()->update(['password' => Hash::make($validated['password'])]);


        return redirect()->back()->with('success', 'password updated.');
    }

}
