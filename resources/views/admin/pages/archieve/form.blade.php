@extends('admin.master')
@section('content')
<form action="{{route('archieve.store')}}"method="post">
    @csrf
<div class="form-group">
    <label for="">Enter archieve Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="archieve_name">
    @error('archieve_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
  <label for="">Enter Archieve Region:</label>
   <textarea class="form-control" name="region" id="" cols="30" rows="10"></textarea>
   
  
  <div class="form-group">
  <label for="">Enter Archieve History:</label>
   <textarea class="form-control" name="history" id="" cols="30" rows="10"></textarea>
  </div>

  
  
    

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
