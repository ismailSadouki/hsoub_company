@extends('layouts.app')

@section('content')
@php
    $direction = LaravelLocalization::getCurrentLocaleDirection();
@endphp
<section  id="home" class="home bg-black" style="background-image: none; transform:translateX(18%)" >
    <div class="container">
        <div class="row justify-content-center"> 
            
            <div class="col-md-8" >
                
                    <div class="head_title">
                        <h3 class="text-center">{{ __('auth.Login') }}</h3>
                    </div>

                    <form method="POST" action="{{ route('login') }}" style="transform: translateX(26%)">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('auth.E-Mail Address') }}" required autocomplete="email" autofocus style="text-align:{{$direction == 'ltr' ? 'left' : ''}};" name="name" value="{{ old('name') }}" required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="text-align:{{$direction == 'ltr' ? 'left' : ''}};" placeholder="{{ __('auth.Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('auth.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="transform: {{$direction == 'rtl' ? 'translateX(-16%)' : ''}}">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary " >
                                    {{ __('auth.Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link"  href="{{ route('password.request') }}">
                                        {{ __('auth.Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>  
@endsection
