@extends('layouts.app')

@section('content')
    <!--Home Sections-->
   
    <section id="home" class="home bg-black fix">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="col-md-12">
                        <div class="hello_slid">
                            <div class="slid_item">
                                <div class="home_text ">
                                    <h2 class="text-white">{{__('home.Welcome to')}} <strong>{{$setting->company_name ?? '...'}}</strong></h2>
                                    <h1 class="text-white">{{__('home.On a Mission to Develop the Arab World')}}</h1>
                                </div>

                                {{-- <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-primary m-top-20">Buy Now</a>
                                    <a href="" class="btn btn-default m-top-20">Take a Tour</a>
                                </div> --}}
                            </div><!-- End off slid item -->

                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->

    @include('home.about')

    @include('home.portfolio')

    @include('home.modal')


@endsection



