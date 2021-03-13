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
        $setting_edit = Setting::first();
        return view('setting.edit_setting',compact('setting_edit'));
    }

    public function update(StoreSetting $request)
    {
        if(isset($request->id)){
            $setting = Setting::first();
        }else {
            $setting = new Setting;
        }
        $setting->company_name_ar = $request->company_name_ar;
        $setting->company_name_en = $request->company_name_en;
        $setting->company_address_ar = $request->company_address_ar;
        $setting->company_address_en = $request->company_address_en;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->about_us_ar = $request->about_us_ar;
        $setting->about_us_en = $request->about_us_en;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linked_in = $request->linked_in;

        $setting->save();
        
        return back()->with('success',__('messages.Site Setting Updated Successfully'));
    }
}
