<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/project', App\Http\Controllers\ProjectController::class);



Route::get('/setting', [App\Http\Controllers\SettingController::class,'edit'])->name('setting.edit');
Route::post('/setting/update/', [App\Http\Controllers\SettingController::class,'update'])->name('setting.update');
