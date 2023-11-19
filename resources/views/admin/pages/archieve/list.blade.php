@extends('admin.master')
@section('content')
<h1>Archieve</h1>
<a href="{{url('/archieve/form')}}"button class="btn btn-primary">Create</button></a>
<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Archieve Title</th>
      <th scope="col">Era</th>
      <th scope="col">Region</th>
      <th scope="col">History</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach ($archieves as  $key=>$archieve)
  <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$archieve->title}}</td>
    <td>{{$archieve->era}}</td>
    <td>{{$archieve->region}}</td>
    <td>{{$archieve->history}}</td>
    <td>{{$archieve->emage}}</td>

     
      <td>{{$archieve->action}}</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>

    @endforeach
    

  



  </tbody>
</table>
@endsection