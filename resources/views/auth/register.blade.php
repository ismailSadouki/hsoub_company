@extends('layouts.app')

@section('content')
@php
    $Direction = LaravelLocalization::getCurrentLocaleDirection();
@endphp
    <section  id="home" class="home bg-black" style="background-image: none; transform:translateX(18%)" >
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-md-8" >
                    
                        <div class="head_title">
                            <h3 class="text-center">{{ __('auth.Login') }}</h3>
                        </div>

                    <form method="POST" action="{{ route('register') }}" style="transform: translateX(24%)">
                        @csrf

                        
                        <div class="form-group row" >

                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('auth.Name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('auth.E-Mail Address') }}" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('auth.Password') }}" name="password" required autocomplete="new-password" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('auth.Confirm Password') }}" required autocomplete="new-password" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};">
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="transform: translateX({{$Direction == 'rtl' ? '-13% ' : '13%' }})">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
