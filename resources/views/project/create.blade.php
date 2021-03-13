@extends('layouts.app')

@section('content')
<section  id="home" class="home bg-black" style="background-image: none;transform:translateX(20%)" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
    <div class="container">
     <div class="row justify-content-center">   
            <div class="col-sm-6 " >
                <div class="head_title">
                    <h3 class="text-center ">{{__('other.Add Project')}}</h3>
                </div>
                
                <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                    @include('project.form')
                    <div class="">
                        <input type="submit" value="{{__('other.Submit')}}" class="btn btn-primary">
                    </div>
                </form>

            </div>
      </div>
</div>
</section>

@endsection

