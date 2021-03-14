<!doctype html>
<html class="no-js" lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}"> 
    <head>
        <meta charset="utf-8">
        <title>{{$setting->company_name ?? 'home'}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('assets/css/slick/slick.css')}}"> 
        <link rel="stylesheet" href="{{asset('assets/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}">

   

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!--<link rel="stylesheet" href="{{asset('assets/css/colors/maron.css')}}">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

        <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        <style>
            .image_project{
                width: 262.5px;
                height: 230px;
            }
            .modal-backdrop.in{
                opacity: 0;
                position: relative;
            }
            .modal {
                position: fixed;
            }
            .modal-content{
                top:-500px;
            }
            .modal-backdrop.in{
                position: revert;
            }
            .btn:hover, .btn:focus, .btn.focus {
                color: green;
            }
            .focus_newsletter{
                border-color: rgba(236, 87, 82, 0.8);
                outline: 0;
                outline: thin dotted \9;
                -moz-box-shadow: 0 0 20px rgba(236, 82, 90, 0.6);
                box-shadow: 0 0 20px rgba(236, 82, 95, 0.6) !important;
                margin-block: 20px;
                
            }
        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">


        {{-- <!-- Preloader -->
        <div id="loading" >
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader --> --}}


        <div class="culmn">
            <!--Home page style-->


        @include('layouts.nav')


        @yield('content')




        @include('layouts.footer')



        </div>
        <!-- JS includes -->

        <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets/css/slick/slick.js')}}"></script>
        <script src="{{asset('assets/css/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.collapse.js')}}"></script>
        <script src="{{asset('assets/js/bootsnav.js')}}"></script>



        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script>
            $('.alert-success').delay(3000).fadeOut(350);
        </script>

        @yield('script')
        
    </body>
            
</html>
