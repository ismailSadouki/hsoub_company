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
        
        $data = [
            'company_name_ar' => $request->company_name_ar,
            'company_name_en' => $request->company_name_en,
            'company_address_ar' => $request->company_address_ar,
            'company_address_en' => $request->company_address_en,
            'phone' => $request->phone,
            'email' => $request->email,
            'about_us_ar' => $request->about_us_ar,
            'about_us_en' => $request->about_us_en,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linked_in' => $request->linked_in,
        ];
        if(isset($request->id)){
            $setting = Setting::first();
            $setting->update($data);
        }else {
            Setting::create($data);
        }

        
        
        return back()->with('success',__('messages.Site Setting Updated Successfully'));
    }
}
