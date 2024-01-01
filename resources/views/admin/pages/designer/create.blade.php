@extends('admin.master')
@section('content')
<form action="{{route('designer.store')}}"method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Enter Designer Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="show_name">
    @error('show_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter Email: </label>
    <input required type="email" class="form-control" placeholder="Enter Email" name="user_email">
    
    @error('user_email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
  </div>

  <<div class="form-group">
    <label for="">Enter Password: </label>
    <input required type="password" class="form-control" placeholder="Enter password" name="user_password">
    
    @error('user_password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
  </div>
  
  <div class="form-group">
  <label for="">Enter Country Name:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="">Enter Address:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="">Enter Educational Info:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="">Enter Experience:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="">Enter job title(if have):</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div> 
  
    
  
</form>
@endsection
