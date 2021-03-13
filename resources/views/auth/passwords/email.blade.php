@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none; transform:translateX(18%)" >
    <div class="container">
        <div class="row justify-content-center"> 
            
            <div class="col-md-8" >
                
                <div class="head_title">
                    <h3 class="text-center">{{ __('auth.Reset Password') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" style="transform: translateX(24%)">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="{{ __('auth.E-Mail Address') }}" style="text-align:{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? 'left' : ''}};" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    
</section>
@endsection
