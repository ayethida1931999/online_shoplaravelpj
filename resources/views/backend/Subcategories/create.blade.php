@extends('backendtemplete')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1>


   </div>
   <form action="{{route('subcategories.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">

         <div class="form-group row">
             <label for="name" class=" col-sm-2 col-form-label">Name</label>
             <div class="col-sm-10">
                  <input type="text" name="name"class="form-control">
                  @error('name')
                  <label class="text-danger">Requried Name</label>
                  @enderror
             </div>
        </div>
        <div class="form-group row">
          
               <label for="category" class="col-sm-2 col-form-label">Category</label>
               <div class="col-sm-10">
               <select class="form-control form-control-md"id="inputCategory"name="category">
                    <optgroup label="choose Category">
                         @foreach($categories as $category)
                         <option value="{{$category->id}}">{{$category->name}}</option>
                         @endforeach
                    </optgroup>

               </select>
          </div>
     </div>

     <input type="submit" name="btnsubmit"value="Create"class="btn btn-info">
</div>
</div>


</form>
</div>


@endsection