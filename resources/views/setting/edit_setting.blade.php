@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none;transform:translateX(20%)">
    <div class="container">
        <div class="row justify-content-center">   
            <div class="col-sm-6 " >
                <div class="head_title">
                    <h3 class="text-center ">{{__('other.Site Setting')}}</h3>
                </div>
                <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$setting_edit->id ?? ''}}">

                    <div class="row">
                         <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-center">{{__('other.Name En')}}</h5>
                                <input type="text" class="form-control " name="company_name_en" value="{{$setting_edit->company_name_en ?? ''}}" placeholder="{{__('other.Company name en')}}" >

                                @error('company_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-center">{{__('other.Name Ar')}}</h5>
                                <input  type="text" class="form-control text-right" name="company_name_ar" value="{{$setting_edit->company_name_ar ?? ''}}" placeholder="{{__('other.Company name ar')}}" >

                                @error('company_name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="text-center">{{__('other.Address En')}}</h5>
                            <div class="form-group">
                                <input type="text" class="form-control " name="company_address_en" value="{{$setting_edit->company_address_en ?? ''}}" placeholder="{{__('other.Company Address en')}}" >

                                @error('company_address_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="text-center">{{__('other.Address Ar')}}</h5>
                            <div class="form-group">
                                <input type="text" class="form-control text-right" name="company_address_ar" value="{{$setting_edit->company_address_ar ?? ''}}" placeholder="{{__('other.Company Address ar')}}" >

                                @error('company_address_ar')
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
                                <h5 class="text-center">{{__('other.Phone')}}</h5>
                                <input type="text" class="form-control " name="phone" value="{{$setting_edit->phone ?? ''}}" placeholder="{{__('other.Phone number')}}" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h5 class="text-center">{{__('other.Email')}}</h5>
                            <div class="form-group">
                                <input type="text" class="form-control " name="email" value="{{$setting_edit->email ?? ''}}" placeholder="{{__('other.E-mail')}}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <h5 class="text-center">{{__('other.About us Ar')}}</h5>
                            <textarea class="form-control text-right" name="about_us_ar" rows="8" placeholder="{{__('other.About Us in Arabic')}}">{{$setting_edit->about_us_ar ?? ''}}</textarea>
                            @error('about_us_ar')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h5 class="text-center">{{__('other.About us En')}}</h5>
                            <textarea class="form-control " name="about_us_en" rows="8" placeholder="{{__('other.About Us in English')}}">{{$setting_edit->about_us_en ?? ''}}</textarea>
                            @error('about_us_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>{{__('other.Facebook')}}</h5>
                                <input type="text" class="form-control " name="facebook" value="{{$setting_edit->facebook ?? ''}}" placeholder="{{__('other.Facebook Link')}}" >

                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>{{__('other.Twitter')}}</h5>
                                <input type="text" class="form-control " name="twitter" value="{{$setting_edit->twitter ?? ''}}" placeholder="{{__('other.Twitter Link')}}" >

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5>{{__('other.Linked In')}}</h5>
                                <input type="text" class="form-control " name="linked_in" value="{{$setting_edit->linked_in ?? ''}}" placeholder="{{__('other.LinkedIn Link')}}" >

                                @error('linked_in')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <input type="submit" value="{{__('other.Submit')}}" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

