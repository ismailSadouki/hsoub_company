<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendNewsletter;
use App\Http\Requests\SubscribeNewsletter;
use App\Jobs\GetEmailsJob;
use App\Jobs\NewsletterJob;
use App\Jobs\SendMailsJob;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return back()->with('success',__('messages.Thank you for subscribing'));
    }


    public function sendNewsletter(SendNewsletter $request)
    {

        // global $request;
        // Newsletter::chunk(25,function($emails){
        //     global $request;
        //     SendMailsJob::dispatch($emails,$request->all());
        // });

        $request = $request->all();
        GetEmailsJob::dispatch($request);
        
        return back()->with('success',__('messages.will send in back ground'));
    }
}
