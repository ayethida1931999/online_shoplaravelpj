@extends('backendtemplete')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Items List</h1>
            <a href="{{route('items.create')}}" class="btn btn-info" >AddNew</a>

          </div>
          <div class="container">
          	<div class="row">
          		<div class="col-md-12">
          			<table class="table table-bordered">
          				<thead class="bg-dark text-white">
          					<tr>
          					<th>No</th>
          					<th>Codeno</th>
          					<th>Name</th>
                                   <th>Photo</th>
          					<th>Price</th>
          					<th>Action</th>
          				</tr>
          				</thead>
          				<tbody>
          					@php $i=1; @endphp
          					@foreach($items as $item)
          				<tr>
          					<td>{{$i++}}</td>
          					<td>{{$item->codeno}}</td>
          					<td>{{$item->name}}</td>
                                   <td><img src="{{asset($item->photo)}}"></td>
          					<td>{{$item->price}}MMK</td>
          					<td>
          					<a href="#"class="btn btn-info">Detail</a>
          					<a href="{{route('items.edit',$item->id)}}"class="btn btn-warning">Edit</a>
          					<a href="#"class="btn btn-danger">Delete</a>
          				    </td>
          				</tr>
          				@endforeach
          			</tbody>
          				
          			</table>
          		</div>
          	</div>
          </div>


          	
@endsection