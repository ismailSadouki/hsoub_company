<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Setting;
use Database\Seeders\ProjectSeeder;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::orderBy('created_at','desc')->paginate(8);
        // $setting = Setting::first();

        return view('home',compact('projects'));
    }
}
