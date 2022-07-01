<?php

namespace App\Http\Controllers\Frontend\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Frontend\StoreSettingNotificationRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
       $settings =  auth()->user()->userSettingNotifications;
        return view('lc.page-lc-notification',compact('settings'));
    }
    public function store(StoreSettingNotificationRequest $request){
        auth()->user()->userSettingNotifications->update($request->validated());
        return back();
    }
}
