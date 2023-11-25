@extends('admin.master')
@section('content')
<h1>Outfit</h1>
<a href="{{route('outfit.form')}}"button class="btn btn-primary">Create</button></a>
<table class="table">
    
  <thead>
    <tr>
      <th scope="col">#</th>
 
      <th scope="col">Outfit Name</th>
      <th scope="col">Color</th>
      <th scope="col">Material</th>
      <th scope="col">Description</th>
     
      <th scope="col">Price</th>
      <th scope="col">Image</th>

      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($outfits as  $key=>$outfit)
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$outfit->name}}</td>
      <td>{{$outfit->color}}</td>
      <td>{{$outfit->material}}</td>
      <td>{{$outfit->description}}</td>
      
      <td>{{$outfit->price}}</td>
      <td>
        <img width="20%" src="{{url('/uploads/'.$outfit->image)}}" alt="">
      </td>
   
      
      <td>{{$outfit->action}}</td>
      <td>
        <a class="btn btn-success" href="{{route('outfit.edit',$outfit->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('outfit.delete',$outfit->id)}}">Delete</a>
        </td>
    </tr>

    @endforeach
    

  </tbody>
</table>
{{ $outfits->links() }}
@endsection
