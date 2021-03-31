 <!-- Modal -->
 <div class="modal fade" id="projectmodal" >
    <div class="modal-dialog modal-lg"  >
        <div class="modal-content">
          
          <div class="modal-body">
              <div class="row">
                    <div class="col-md-4" style="{{$direction  == 'rtl' ? 'float: right;' : ''}}">
                        <div>
                            <div>
                                <img src="" id="pimage" alt="" width="262.5" height="230"/>
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
          <div class="modal-footer" style="float: {{$direction  == 'rtl' ? 'left;' : 'right'}}">
         
                <button type="button" class=" btn btn-gray" data-dismiss="modal" aria-label="Close">{{__('home.Cancel')}}</button>
           

                <a href="" class="btn btn-warning" id="pedit" style="cursor:pointer">{{__('home.Edit')}}</a>
                
                <a href="" class="btn btn-primary" id="plink" style="cursor:pointer">{{__('home.Show')}}</a>
          </div>
        </div>
      </div>
  </div>



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
                $('#pedit').attr('href',"{{url('project/')}}/"+data.project.id+"/edit/");
            }
        })
    }
</script>

@endsection