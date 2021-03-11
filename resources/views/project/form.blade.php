@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control " name="title" value="{{$project->title ?? old('title')}}" placeholder="Title" >

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" name="link" value="{{$project->link ?? old('link')}}" placeholder="Link" >

            @error('link')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>


<div class="form-group">
    <textarea class="form-control " name="desc" rows="8" placeholder="Description">{{$project->desc ?? old('desc')}}</textarea>
    @error('desc')
        <span class="invalid-feedback" role="alert">
            <strong style="color: red">{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input accept="image/*" id="image_file" type="file" class="form-control" name="image"  placeholder="Image" {{isset($project) ? '' : 'required=""'}} >
            <br>
            <img src="{{isset($project) ? asset('storage/'.$project->image) : ''}}"  id="image" alt="">
 
             
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
