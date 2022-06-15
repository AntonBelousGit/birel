<?php

namespace App\Http\Controllers;

use App\Events\OrderUpdateEvent;
use App\Events\SendFormMailEvent;
use App\Http\Requests\Question\ContactUsRequest;

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

    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }

    public function disclaimer()
    {
        return view('front.disclaimer');
    }

    public function contactUsRequest(ContactUsRequest $request)
    {
        event(new SendFormMailEvent($request->validated()));
        return back();
    }

}
