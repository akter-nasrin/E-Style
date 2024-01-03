@extends('admin.master')
@section('content')
<form action="{{route('tips.store')}}"method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Enter Tips Title:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
    
  
  <div class="form-group">
  <label for="">Enter content:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  

  <div class="form-group">
  <label for="">Image:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div> 
  
    
  
</form>
@endsection
