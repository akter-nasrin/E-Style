@extends('admin.master')

@section('content')
<h1>Fashion Tips</h1>
<a href="{{route('tips.list')}}"button class="btn btn-primary">Create</button></a>

<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
 
      <th scope="col">Tips Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      
     
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tips as  $key=>$tip)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$tip->title}}</td>
      <td>{{$tip>content}}</td>
      
      
      <td>
        <img width="20%" src="" alt="">
      </td>
   
    
      <td>{{$tips->action}}</td>
      

    @endforeach
    

  </tbody>
</table>

@endsection
