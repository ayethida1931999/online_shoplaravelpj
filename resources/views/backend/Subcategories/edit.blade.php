@extends('backendtemplete')
@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>


   </div>
   <form action="{{route('subcategories.update',$subcategory->id)}}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
         <div class="form-group row">
             <label for="name" class="col-sm-2 col-form-label">Name</label>
             <div class="col-sm-10">
                  <input type="text" name="name"value="{{$subcategory->name}}"class="form-control">
             </div>
        </div>
        <div class="form-group row">
             
               <label for="category" class="col-sm-2 col-form-label">Category</label>
               <div class="col-sm-10">
                 <select class="form-control form-control-sm"id="inputCategory"name="category">
                     <optgroup label="choose Category">
                         @foreach($categories as $category)
                         <option value="{{$category->id}}">{{$category->name}}</option>
                         @endforeach
                    </optgroup>

               </select>
          </div>
     </div>

     <input type="submit" name="btnsubmit"value="update"class="btn btn-info">
</div>
</div>


</form>
</div>


@endsection