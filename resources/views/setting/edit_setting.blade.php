@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none">
    <div class="container">
        @include('alerts.success')
     <div class="row justify-content-center">   
            <div class="col-sm-6 " >
                <div class="head_title">
                    <h3 class="text-center ">Site Setting</h3>
                </div>
                <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>Title</h5>
                                <input type="text" class="form-control " name="company_name" value="{{$setting->company_name ?? ''}}" placeholder="Company name" >

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h5>Address</h5>
                            <div class="form-group">
                                <input type="text" class="form-control " name="company_address" value="{{$setting->company_address ?? ''}}" placeholder="Company Address" >

                                @error('company_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>Phone</h5>
                                <input type="text" class="form-control " name="phone" value="{{$setting->phone ?? ''}}" placeholder="Phone number" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h5>Email</h5>
                            <div class="form-group">
                                <input type="text" class="form-control " name="email" value="{{$setting->email ?? ''}}" placeholder="E-mail" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <h5>About us</h5>
                        <textarea class="form-control " name="about_us" rows="8" placeholder="About us">{{$setting->about_us ?? ''}}</textarea>
                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>Facebook</h5>
                                <input type="text" class="form-control " name="facebook" value="{{$setting->facebook ?? ''}}" placeholder="Company name" >

                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>Twitter</h5>
                                <input type="text" class="form-control " name="twitter" value="{{$setting->twitter ?? ''}}" placeholder="Company Address" >

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>Linked In</h5>
                                <input type="text" class="form-control " name="linked_in" value="{{$setting->linked_in ?? ''}}" placeholder="Company Address" >

                                @error('linked_in')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>

            </div>
      </div>
</div>
</section>

@endsection

