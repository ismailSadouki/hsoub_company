<?php
namespace App\Http\ViewComposers;

use App\Models\Setting;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingComposer
{
    protected $setting;

    public function __construct()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        $this->setting = Setting::select(
            'phone',
            'email',
           'company_name_'.$lang.' as company_name',
            'company_address_'.$lang.' as company_address',
            'about_us_'.$lang.' as about_us',
            'facebook',
            'twitter',
            'linked_in'
        )->first();
    }

    
    public function compose(View $view)
    {
        return $view->with('setting',$this->setting);
    }
}