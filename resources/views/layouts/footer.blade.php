
    <!--Call to  action section-->
    <section id="action" class="action bg-primary roomy-40">
        <div class="container">
            <div class="row">
                <div class="maine_action">
                    <div class="col-md-8">
                        <div class="action_item text-center">
                            <h2 class="text-white text-uppercase">Your Promotion Text Will Be Here</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action_btn text-left sm-text-center">
                            <a href="" class="btn btn-default">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<footer id="contact" class="footer action-lage bg-black p-top-80">
    <!--<div class="action-lage"></div>-->
    <div class="container">
        <div class="row">
            <div class="widget_area">
                <div class="col-md-3">
                    <div class="widget_item widget_about">
                        <h5 class="text-white">About Us</h5>
                        <p class="m-top-20">{{Illuminate\Support\str::limit($setting->about_us ?? '',100,'...') }}<a href="#about_us" >more</a></p>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Location</h6>
                                <p>{{$setting->company_address ?? ''}}</p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon"><i class="fa fa-phone"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Phone :</h6>
                                <p>{{($setting->phone ?? '')}}</p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">Email Address :</h6>
                                <p>{{$setting->email ?? ''}}</p>
                            </div>
                        </div>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="widget_item widget_latest sm-m-top-50">
                        <h5 class="text-white">Latest News</h5>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="{{asset('assets/images/ltst-img-1.jpg')}}" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="{{asset('assets/images/ltst-img-2.jpg')}}" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                        <div class="widget_latst_item m-top-30">
                            <div class="item_icon"><img src="{{asset('assets/images/ltst-img-3.jpg')}}" alt="" /></div>
                            <div class="widget_latst_item_text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <a href="">21<sup>th</sup> July 2016</a>
                            </div>
                        </div>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="widget_item widget_service sm-m-top-50">
                        <h5 class="text-white">Latest News</h5>
                        <ul class="m-top-20">
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Themes</a></li>
                            <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                        </ul>
                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->

                <div class="col-md-3">
                    <div class="widget_item widget_newsletter sm-m-top-50">
                        <h5 class="text-white">Newsletter</h5>
                        <div class="form-inline m-top-30">
                            <div class="form-group">
                                <form action="{{route('newsletter.subscribe')}}" method="POST" >
                                    @csrf
                                    <input type="email" name="email" class="form-control" placeholder="Enter you Email">
                                    <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                </form>
                                @error('email')
                                    <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="widget_brand m-top-40">
                            <a href="" class="text-uppercase"><img src="{{asset('storage/images/logo.png')}}" alt=""></a>
                            
                        </div>
                        <ul class="list-inline m-top-20">
                            <li>-  <a href="{{$setting->facebook ?? ''}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$setting->twitter ?? ''}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$setting->linked_in ?? ''}}"><i class="fa fa-linkedin"></i></a> -</li>
            
                        </ul>

                    </div><!-- End off widget item -->
                </div><!-- End off col-md-3 -->
            </div>
        </div>
    </div>
    <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
        <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
                Made with 
                <i class="fa fa-heart"></i>
                by 
                <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> 
                2016. All Rights Reserved
            </p>
        </div>
    </div>
</footer>
