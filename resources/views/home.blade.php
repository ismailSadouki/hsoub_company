@extends('layouts.app')

@section('content')
    <!--Home Sections-->
    @php
        $Direction = LaravelLocalization::getCurrentLocaleDirection();
    @endphp
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



   

    <!--About Section-->
    <section  class="business bg-grey roomy-70" id="about_us" dir="{{$Direction }}">
        <div class="container">
            <div class="row">
                <div class="main_business">
                    <div class="col-md-6 " style="{{$Direction  == 'rtl' ? 'float: right;' : ''}}"  >
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


    <!--Portfolie section-->
    <section id="portfolio" class="product" >
        <div class="container" >
            <div class="main_product roomy-80">

                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">{{__('home.Portfolio')}}</h2>
                </div>

                <div class=" slide" >
                    <!-- Indicators -->
                   
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" >
                        <div class="item active">
                            <div class="container">
                                <div class="row" >
                                   @forelse ($projects as $project)
                                        <div class="col-sm-3" style="{{$Direction  == 'rtl' ? 'float: right;' : ''}}">
                                            <div class="port_item xs-m-top-30 ">
                                                <div class="port_img">
                                                    <img src="{{asset('storage/'.$project->image)}}" width="120" height="230" "alt="" />
                                                    <div class="port_overlay text-center">
                                                        <a  class="popup" style="background-color: #00a885" id="{{$project->id}}" data-toggle="modal" href="" data-target="#projectmodal" onclick="projectshow(this.id)"><i class="fa fa-eye" ></i></a>

                                                        @admin
                                                            <a href="{{route('project.edit',$project->id)}}" class="popup" style="background-color: #00a885"><i class="fa fa-pencil-square-o" ></i></a>
                                                            <form action="{{route('project.destroy',$project->id)}}" method="POST"><br>
                                                                @method('DELETE')
                                                                @csrf
                                                            <input type="submit" class="popup btn btn-danger " value="{{__('other.Delete')}}">
                                                            </form>
                                                        @endadmin
                                                        
                                                    </div>
                                                </div>
                                                <div class="port_caption m-top-20">
                                                    <h5>{{$project->title}}</h5>
                                                </div>
                                            </div>
                                        </div> 
                                    @empty
                                            
                                        <h2>{{__('home.nothing')}}</h2>    
                                        
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


 






    <!-- Modal -->
<div class="modal fade" id="projectmodal" >
    <div class="modal-dialog modal-lg"  >
        <div class="modal-content">
          
          <div class="modal-body">
              <div class="row">
                    <div class="col-md-4" style="{{$Direction  == 'rtl' ? 'float: right;' : ''}}">
                        <div>
                            <div>
                                <img src="" id="pimage" alt="" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6" >
                        <div class="business_item sm-m-top-50">
                            <p class="m-top-40" id="pdesc"></p>
                            

                        </div>
                    </div>
                    
              </div>
          </div>
          <div class="modal-footer" style="float: {{$Direction  == 'rtl' ? 'left;' : 'right'}}">
            <button type="button" class=" btn btn-gray" data-dismiss="modal" aria-label="Close">{{__('home.Cancel')}}</button>
            <a href="" class="btn btn-primary" id="plink" style="cursor:pointer">{{__('home.Show')}}</a>
          </div>
        </div>
      </div>
  </div>
  


@endsection

@section('script')

<script type="text/javascript">
    function projectshow(id){
        $.ajax({
            url: "{{ url('/project/') }}/"+id,
            type: "GET",
            dataType: "json",
            success:function(data){
                $('#pimage').attr('src',"{{asset('storage/')}}/"+data.project.image);
                $('#plink').attr('href',data.project.link);
                $('#pdesc').text(data.project.desc);
            }
        })
    }
</script>

@endsection