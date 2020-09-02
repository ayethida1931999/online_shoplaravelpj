@extends('backendtemplete')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>


   </div>
   <form action="{{route('items.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
         <div class="form-group row {{ $errors->has('codeno')? 'has-error ' : ''}}">
             <label for="codeno" class="col-sm-2 col-form-label">Code No</label>
             <div class="col-sm-10">
                 <input type="text" name="codeno">
                 @error('codeno')
                 <label class="text-danger">Requried Codeno</label>
                 @enderror
            </div>
       </div>
       <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
             <input type="text" name="name">
             @error('name')
             <label class="text-danger">Requried Name</label>
             @enderror
        </div>
   </div>
   <div class="form-group row">
        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
            <input type="file" name="photo"class="form-control-file">
            @error('photo')
            <label class="text-danger">Requried Photo</label>
            @enderror
       </div>
  </div>
  <div class="form-group row">
   <label for="price" class="col-sm-2 col-form-label">Price</label>
   <div class="col-sm-10">
       <input type="number" name="price">
       @error('price')
       <label class="text-danger">Requried Price</label>
       @enderror
  </div>
</div>
<div class="form-group row">
   <label for="discount" class="col-sm-2 col-form-label">Discount</label>
   <div class="col-sm-10">
       <input type="number" name="discount">
       @error('discount')
       <label class="text-danger">Requried Discount</label>
       @enderror
  </div>
</div>

<div class="form-group row">
   <label for="description" class="col-sm-2 col-form-label">Description</label>
   <div class="col-sm-10">
       <textarea name="description"></textarea>
       @error('description')
       <label class="text-danger">Requried Description</label>
       @enderror
  </div>
</div>
<div class="form-group row">
   <div class="col-sm-10">
     <label for="brand" class="col-sm-2 col-form-label">Brand</label>
     <select class="form-control form-control-md"id="inputBrand"name="brand">
      <optgroup label="choose Brand">
          @foreach($brands as $brand)
          <option value="{{$brand->id}}">{{$brand->name}}</option>
          @endforeach
     </optgroup>

</select>
</div>
</div>
<div class="form-group row">
   <div class="col-sm-10">
     <label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
     <select class="form-control form-control-md"id="inputSubcategory"name="subcategory">
      <optgroup label="choose subcategory">
          @foreach($subcategories as $subcategory)
          <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
          @endforeach
     </optgroup>
     
</select>
</div>
</div>

<input type="submit" name="btnsubmit"value="Create"class="btn btn-info">


</form>
</div>
</div>


@endsection