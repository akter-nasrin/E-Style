@extends('admin.master')
@section('content')
<form action="{{route('design.submit')}}"method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Enter Design Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="design_name">
    @error('design_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  

  
  
    <div class="form-group">
  <label for="">Enter Design Description:</label>
   <textarea class="form-control" name="design_description" id="" cols="30" rows="10"></textarea>
  </div>
    
 
 


    

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control" name="image">
  </div>
  
  <div class="form-group">
    <label for="">Status: </label>
    <input type="file" class="form-control" name="status">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection 
