<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function edit()
    {
        return view('setting.edit_setting');
    }

    public function update(StoreSetting $request)
    {
 
        $setting = Setting::first();
        $setting->company_name = $request->company_name;
        $setting->company_address = $request->company_address;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->about_us = $request->about_us;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linked_in = $request->linked_in;

        $setting->save();
        
        return back()->with('success','Site Setting Updated Successfully');
    }
}
