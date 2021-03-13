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
                    <h3 class="text-center">{{ __('auth.Reset Password') }}</h3>
                </div>

                    <form method="POST" action="{{ route('password.update') }}" style="transform: translateX(24%)">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" placeholder="{{ __('auth.E-Mail Address') }}" type="email" class="form-control @error('email') is-invalid @enderror" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="{{ __('auth.Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('auth.Confirm Password') }}" style="text-align:{{$Direction == 'ltr' ? 'left' : ''}};">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>    
@endsection
