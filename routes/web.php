<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Auth::routes();

    Route::get('/', [HomeController::class, 'index'])->name('home');


//Project Url
    Route::resource('/project', ProjectController::class);


//Setting Url
    Route::get('/setting', [SettingController::class,'edit'])->name('setting.edit');
    Route::post('/setting/update/', [SettingController::class,'update'])->name('setting.update');

//Newsletter Url
    Route::get('/newsletter/create',[NewsletterController::class, 'create'])->name('newsletter.create')->middleware('Admin');
    Route::post('/newsletter/send',[NewsletterController::class , 'sendNewsletter'])->name('newsletter.send')->middleware('Admin');
    Route::post('/newsletter/subscribe/', [NewsletterController::class,'subscribe'])->name('newsletter.subscribe');

});
