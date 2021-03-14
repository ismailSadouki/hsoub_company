<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function update()
    {
        $userId = Auth::id();
        $data = request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'confirmed|min:8|nullable',
        ]);

        if(request()->has('password')){
            $data['password'] = Hash::make(request('password'));
        }
        User::findOrFail($userId)->update($data);
        return back()->with('success',__('messages.Updated Successfully'));
    }
}
