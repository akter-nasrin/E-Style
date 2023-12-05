@extends('admin.master')
@section('content')
<h1>Fashion Show</h1>
<a href="{{route('fashionshow.list')}}"button class="btn btn-primary"> create</a>
<table class="table">
    
  <thead>
    <tr>
    
      <th scope="col">#</th>
 
      <th scope="col">Show Name</th>
      <th scope="col">Organizer Name</th>
      <th scope="col"> show date</th>
      <th scope="col">status</th>
    
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($fashionShows as  $key=>$fashionshow)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$show->name}}</td>
      <td>{{$organizer->name}}</td>
      <td>{{$show->date}}</td>
      
      
      
   
      
      <td>{{$fashionshow->action}}</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>

    @endforeach
    



  </tbody>

</table>
@endsection