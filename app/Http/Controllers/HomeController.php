<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('lc.home');
    }
     public function companies()
    {
        return view('lc.companies');
    }
    public function addcompany()
    {
        return view('lc.addcompany');
    }
    public function info(Request $request)
    {
        dd($request);
        return->back();
    }
}
