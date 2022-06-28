<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::whereIn('setting_name', ['email','social'])->get();
        return view('admin.setting.edit',compact('settings'));
    }

    public function updateSetting(Setting $setting, Request $request)
    {
        $setting->update($request->all());
        return back();
    }

}
