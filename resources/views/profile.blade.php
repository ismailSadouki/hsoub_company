@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none;transform:translateX(20%)">
    <div class="container">
        <div class="row justify-content-center">   
            <div class="col-sm-6 " >
                <div class="head_title">
                    <h3 class="text-center ">{{__('other.Profile')}}</h3>
                </div>
                <form action="{{route('profile')}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="row">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-center">{{__('auth.Name')}}</h5>
                                <input type="text" class="form-control " name="name" value="{{auth()->user()->name}}"  >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-center">{{__('auth.E-Mail Address')}}</h5>
                                <input  type="email" class="form-control " name="email" value="{{auth()->user()->email}}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h5 class="text-center">{{__('auth.Password')}}</h5>
                            <div class="form-group">
                                <input type="password" class="form-control " name="password"  >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-center">{{__('auth.Confirm Password')}}</h5>
                            <div class="form-group">
                                <input type="password" class="form-control text-right" name="password-confirmation">

                                @error('password-confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <input type="submit" value="{{__('other.Update')}}" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

