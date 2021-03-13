@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none;transform:translateX(20%)">
    <div class="container">
     <div class="row justify-content-center">   
            <div class="col-sm-6 " >
                <div class="head_title">
                    <h3 class="text-center ">{{__('other.Newsletter')}}</h3>
                </div>

                <form action="{{route('newsletter.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control " name="title" value="{{old('title')}}" placeholder="{{__('other.Title')}}" >
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <textarea class="form-control " name="desc" rows="8" placeholder="{{__('other.Description')}}">{{old('desc')}}</textarea>
                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{$message}}</strong>
                                </span>
                            @enderror
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
