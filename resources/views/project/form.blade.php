@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group" >
            <input type="text" class="form-control " name="title_ar" value="{{$project->title_ar ?? old('title_ar')}}" placeholder="{{__('other.title in Arabic')}}" >

            @error('title_ar')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control " name="title_en" value="{{$project->title_en ?? old('title_en')}}" placeholder="{{__('other.title in English')}}" >

            @error('title_en')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="col-sm-12">
        <div class="form-group">
            <input type="text" class="form-control" name="link" value="{{$project->link ?? old('link')}}" placeholder="{{__('other.Link')}}" >

            @error('link')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>


<div class="form-group">
    <textarea class="form-control " name="desc_en" rows="8" placeholder="{{__('other.Description in English')}}">{{$project->desc_en ?? old('desc_en')}}</textarea>
    @error('desc_en')
        <span class="invalid-feedback" role="alert">
            <strong style="color: red">{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="form-group" >
    <textarea class="form-control " name="desc_ar" rows="8" placeholder="{{__('other.Description in Arabic')}}">{{$project->desc_ar ?? old('desc_ar')}}</textarea>
    @error('desc_ar')
        <span class="invalid-feedback" role="alert">
            <strong style="color: red">{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <input accept="image/*" id="image_file" type="file" class="form-control" name="image"  placeholder="{{__('other.Image')}}" {{isset($project) ? '' : 'required=""'}} >
            <br>
            <img src="{{isset($project) ? asset('storage/'.$project->image) : ''}}"  id="image" alt="" style="transform: translateX(50%)">
 
             
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    
</div>



@section('script')
<script>
    $("#image_file").change(function(){
        var reader = new FileReader();
        reader.onload = function()
        {
            $("#image").addClass("image_project").attr("src", reader.result);
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection
