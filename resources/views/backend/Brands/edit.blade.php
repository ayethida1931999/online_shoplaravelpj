@extends('backendtemplete')
@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        

        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" id="name" name="name" value="{{$brand->name}}"class="form-control">
             
          </div>
        </div>

        <div class="form-group row">
          <label for="photo" class="col-sm-2 col-form-label">Photo</label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="photo" name="photo" value="{{$brand->photo}}">
            <img src="{{asset($brand->photo)}}"class="img-fluid w-25">
            <input type="hidden" name="oldphoto" value="{{$brand->photo}}">
          </div>
        </div>
        <br>
        <input type="submit" name="create" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection