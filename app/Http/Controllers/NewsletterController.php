<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendNewsletter;
use App\Http\Requests\SubscribeNewsletter;
use App\Jobs\NewsletterJob;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function create()
    {
        return view('newsletter.create');
    }

    public function subscribe(SubscribeNewsletter $request)
    {

        $data = new Newsletter;
        $data->email = $request->email;
        $data->save();

        return back()->with('success','Thank you for subscribing');
    }


    public function sendNewsletter(SendNewsletter $request)
    {

        global $request;
        Newsletter::chunk(25,function($emails){
            global $request;
            NewsletterJob::dispatch($emails,$request->all());
        });
        
        return back()->with('success','will send in back ground');
    }
}
