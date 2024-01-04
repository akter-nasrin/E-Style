@extends('admin.master')
@section('content')
<h1>Archieve</h1>
<a href="{{url('blog.list')}}"button class="btn btn-primary">Create</button></a>
<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Blog Caption</th>
      <th scope="col">Category</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach ($blogss as  $key=>$blog)
  <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$blog->caption}}</td>
    <td>{{$blog->category}}</td>
    <td>{{$blog->content}}</td>
    
     
      <td>{{$blog->action}}</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>

    @endforeach
    

  



  </tbody>
</table>
@endsection