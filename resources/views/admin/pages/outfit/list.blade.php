@extends('admin.master')
@section('content')
<h1>Outfit</h1>
<a href="{{url('/outfit/form')}}"button class="btn btn-primary">Create</button></a>
<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Outfit Id</th>
      <th scope="col">Outfit Name</th>
      <th scope="col">Color</th>
      <th scope="col">Material</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($outfits as $outfit)
    <tr>
      <th scope="row">{{$outfit->id}}</th>
      <td>{{$outfit->name}}</td>
      <td>{{$outfit->color}}</td>
      <td>{{$outfit->material}}</td>
      <td>{{$outfit->price}}</td>
      <td>{{$outfit->description}}</td>
      <td>{{$outfit->action}}</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>

    @endforeach
    

  </tbody>
</table>
@endsection