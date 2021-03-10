@csrf
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control " name="title" value="{{old('title')}}" placeholder="Title" >

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" name="link" value="{{old('link')}}" placeholder="Link" >

            @error('link')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>


<div class="form-group">
    <textarea class="form-control " name="desc" rows="8" placeholder="Description">{{old('desc')}}</textarea>
    @error('desc')
        <span class="invalid-feedback" role="alert">
            <strong style="color: red">{{$message}}</strong>
        </span>
    @enderror
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <input accept="image/*" type="file" class="form-control" name="image" value="{{ord('image')}}" placeholder="Image" >
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    
</div>

