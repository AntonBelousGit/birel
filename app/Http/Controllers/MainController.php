<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mission()
    {
        return view('mission');
    }

    public function explore()
    {
        return view('explore');
    }
      public function pricing()
        {
            return view('pricing');
        }
    public function termsOfUse()
    {
        return view('front.terms-of-use');
    }


}
