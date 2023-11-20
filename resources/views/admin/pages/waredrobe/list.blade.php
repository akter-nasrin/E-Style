@extends('admin.master')
@section('content')
<h1>Waredrobe</h1>
<a href="{{route('waredrobe.form')}}"button class="btn btn-primary"> create</a>
<table class="table">
    
  <thead>
    <tr>
    
      <th scope="col">#</th>
 
      <th scope="col">Outfit Name</th>
      <th scope="col"> Outfit Details</th>
      <th scope="col">Outfit Designer</th>
      <th scope="col">Outfit Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>




  </tbody>

</table>
@endsection
