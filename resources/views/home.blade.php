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
                                    <h2 class="text-white">Welcome to <strong>{{$setting->company_name ?? ''}}</strong></h2>
                                    <h1 class="text-white">On a Mission to Develop the Arab World</h1>
                                    <h3 class="text-white">- We work to empower <strong>the youth. </strong> We are {{$setting->company_name ?? ''}}. -</h3>
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



   

    <!--Business Section-->
    <section  class="business bg-grey roomy-70" id="about_us">
        <div class="container">
            <div class="row">
                <div class="main_business">
                    <div class="col-md-6">
                        <div >
                            <div class="slid_shap bg-grey"></div>
                        
                              
                                    <div>
                                        <img src="{{asset('storage/images/logo.png')}}" alt="" />
                                    </div>
                           
                      
                        </div>
                    </div>
                    
                    <div class="col-md-6" >
                        <div class="business_item sm-m-top-50">
                            <h2 class="text-uppercase"><strong>ABOUT</strong> Us</h2>
                            
                            <p class="m-top-20">{{$setting->about_us ?? ''}}</p>

                          

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off Business section -->


    <!--product section-->
    <section id="portfolio" class="product">
        <div class="container">
            <div class="main_product roomy-80">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Portfolio</h2>
                </div>

                <div class=" slide" >
                    <!-- Indicators -->
                   
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container">
                                <div class="row">
                                    @forelse ($projects as $project)
                                        <div class="col-sm-3 ">
                                            <div class="port_item xs-m-top-30 ">
                                                <div class="port_img">
                                                    <img src="{{asset('storage/'.$project->image)}}" width="120" height="230" "alt="" />
                                                    <div class="port_overlay text-center">
                                                        <a href="{{asset('storage/'.$project->image)}} " class="popup-img">+</a>
                                                    </div>
                                                </div>
                                                <div class="port_caption m-top-20">
                                                    <h5>{{$project->title}}</h5>
                                                </div>
                                            </div>
                                        </div> 
                                    @empty
                                            
                                        <h2>nothing</h2>    
                                        
                                    @endforelse
                                </div>
                                <div class="text-center">
                                    {{ $projects->links("pagination::bootstrap-4") }}  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off Product section -->



    <!--Test section-->
    <section id="test" class="test bg-grey roomy-60 fix">
        <div class="container">
            <div class="row">                        
                <div class="main_test fix">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">What Client Say</h2>
                            <h5>Clean and Modern design is our best specialist</h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="test_item fix">
                            <div class="item_img">
                                <img class="img-circle" src="{{asset('assets/images/test-img1.jpg')}}" alt="" />
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <div class="item_text">
                                <h5>Sarah Smith</h5>
                                <h6>envato.com</h6>

                                <p>Natus voluptatum enim quod necessitatibus quis
                                    expedita harum provident eos obcaecati id culpa
                                    corporis molestias.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="test_item fix sm-m-top-30">
                            <div class="item_img">
                                <img class="img-circle" src="{{asset('assets/images/test-img2.jpg')}}" alt="" />
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <div class="item_text">
                                <h5>Sarah Smith</h5>
                                <h6>envato.com</h6>

                                <p>Natus voluptatum enim quod necessitatibus quis
                                    expedita harum provident eos obcaecati id culpa
                                    corporis molestias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off test section -->


    <!--Brand Section-->
    <section id="brand" class="brand fix roomy-80">
        <div class="container">
            <div class="row">
                <div class="main_brand text-center">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img1.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img2.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img4.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img5.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="brand_item sm-m-top-20">
                            <img src="{{asset('assets/images/cbrand-img6.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End off Brand section -->



@endsection
