<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Setting;
use Database\Seeders\ProjectSeeder;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lang = LaravelLocalization::getCurrentLocale(); // ar or en 

        $direction = LaravelLocalization::getCurrentLocaleDirection(); // rtl or ltr

        $projects = Project::select(

                 'id',
                 'title_'.$lang.' as title',
                 'desc_'.$lang.' as desc',   
                 'image',
                 'link'

            )->latest()->paginate(8);
            
        return view('home.index',compact('projects','direction'));

    }
}
