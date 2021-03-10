<nav class="navbar navbar-default bootsnav navbar-fixed">
    <div class="navbar-top bg-grey fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-callus text-left sm-text-center">
                        <ul class="list-inline">
                            <li><a href=""><i class="fa fa-phone"></i> Call us: {{$setting->phone ?? ''}}</a></li>
                            <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: {{$setting->email ?? ''}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar-socail text-right sm-text-center">
                        <ul class="list-inline">
                            <li><a href="{{$setting->facebook ?? ''}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$setting->twitter ?? ''}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$setting->linked_in ?? ''}}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->


    <div class="container"> 
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div> 

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <img src="{{asset('storage/images/logo.png')}}" width="40" height="30" alt="">
            </a>

        </div>
        <!-- End Header Navigation -->

        <!-- navbar menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('home')}}">Home</a></li>  
                @Auth
                <li><a href="{{route('project.create')}}">New Project</a></li>  
                <li><a href="{{route('setting.edit')}}">Setting</a></li>  

                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
                logout
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                                    
                @else 
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth                 
              
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> 

</nav>