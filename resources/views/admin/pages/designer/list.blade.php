@extends('admin.master')
@section('content')
<h1>Outfit</h1>
<a href="{{route(''designer.list'')}}"button class="btn btn-primary">Create</button></a>
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
      <th scope="col">Job Title</th>
      
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
      <td>{{$designer->job title}}</td>
      <td>
        <img width="20%" src="{{url('/uploads/'.$designer->image)}}" alt="">
      </td>
   
      
      <td>{{$designer->action}}</td>
      <!-- <td>
        <a class="btn btn-success" href="{{route('outfit.edit',$outfit->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('outfit.delete',$outfit->id)}}">Delete</a>
        </td> -->
    </tr>

    @endforeach
    

  </tbody>
</table>
{{ $outfits->links() }}
@endsection
