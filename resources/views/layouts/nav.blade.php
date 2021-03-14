
<nav class="navbar navbar-default bootsnav navbar-fixed" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
    <div class="navbar-top bg-grey fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-callus text-left sm-text-center">
                        <ul class="list-inline">
                            <li><a href=""><i class="fa fa-phone"></i> {{__('nav.Call us')}}: {{$setting->phone ?? '...'}}</a></li>
                            <li><a href=""><i class="fa fa-envelope-o"></i> {{__('nav.Contact us')}}: {{$setting->email ?? '...'}}</a></li>
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

  

    <div class="container" "> 
       

        <!-- Start Header Navigation -->
        <div class="navbar-header " >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('storage/images/logo.png')}}" width="40" height="30" alt="">
            </a>

        </div>
        <!-- End Header Navigation -->
        <!-- navbar menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div dir="ltr">
                @include('alerts.success')
            </div>

            <ul class="nav navbar-nav navbar-right">
                
                <!-- Arabic && English -->
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
                
                <li><a href="{{route('home')}}">| {{__('nav.Home')}}</a></li>  
                @Auth
                    @admin
                        <li>
                            <a href="{{route('project.create')}}">{{__('nav.New Project')}}</a>
                        </li>  
                        <li>
                            <a href="{{route('newsletter.create')}}">{{__('nav.Newsletter')}}</a>
                        </li>  
                        <li>
                            <a href="{{route('setting.edit')}}">{{__('nav.Setting')}}</a>
                        </li>  
                    @endadmin    
                       
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="{{route('profile')}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink" >
                                <li><a class="dropdown-item" href="{{route('profile')}}" style="float: {{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? 'left' : ''}}">{{__('other.Profile')}}</a></li>
                              <li><a class="dropdown-item" style="float: {{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? 'left' : ''}}" href="{{ route('logout') }}"href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                                    {{__('auth.Logout')}}
                                   </a>
                               </li>
                            </ul>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                                    
                @else 
                        <li>
                            <a href="{{ route('register') }}">{{__('auth.Register')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}">{{__('auth.Login')}}</a>
                        </li>
                @endauth                 
              
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> 

</nav>