@extends('admin.master')
@section('content')
<h1>Fashion Show</h1>
<a href="{{route('fashion.form')}}"button class="btn btn-primary"> create</a>
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
  

  
    



  </tbody>

</table>
@endsection