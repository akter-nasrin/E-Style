@extends('admin.master')

@section('content')
<h1>Designer</h1>
<a href="{{route('designer.create')}}"button class="btn btn-primary">Create</button></a>

<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
 
      <th scope="col">Designer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Country</th>
      <th scope="col">Address</th>
      <th scope="col">Education</th>
      <th scope="col">Experience</th>
     
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($designers as  $key=>$designer)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$designert->name}}</td>
      <td>{{$designer->email}}</td>
      <td>{{$designer->password}}</td>
      <td>{designer->country}</td>
      
      <td>{{$designer->address}}</td>
      
      <td>{{$designer->education}}</td>
      
      <td>{{$designer->experience}}</td>
     
      <td>
        <img width="20%" src="" alt="">
      </td>
   
    
      <td>{{$designer->action}}</td>
      

    @endforeach
    

  </tbody>
</table>

@endsection
