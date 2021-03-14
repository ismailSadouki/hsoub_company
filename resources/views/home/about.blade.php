  <!--About Section-->
  <section  class="business bg-grey roomy-70" id="about_us" dir="{{$direction}}">
    <div class="container">
        <div class="row">
            <div class="main_business">
                <div class="col-md-6 " style="{{$direction  == 'rtl' ? 'float: right;' : ''}}"  >
                    <div>
                        <div class="slid_shap bg-grey " ></div>            
                                <div>
                                    <img src="{{asset('storage/images/logo.png')}}" alt="" />
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 " >
                    <div class="business_item sm-m-top-50 ">
                        <h2 class="text-uppercase"><strong>{{__('home.ABOUT')}}</strong> {{__('home.Us')}}</h2>                        
                        <p class="m-top-20">{{$setting->about_us ?? '...'}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End off Business section -->
