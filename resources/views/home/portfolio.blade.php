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
                                    <div class="col-sm-3" style="{{$direction  == 'rtl' ? 'float: right;' : ''}}">
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