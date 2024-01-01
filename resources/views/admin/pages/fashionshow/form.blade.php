@extends('admin.master')
@section('content')
<form action="{{route('fashion.store')}}"method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Enter Show Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="show_name">
    @error('show_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter Organizer Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="organizer_name">
    @error('organizer_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  <label for="">Enter Show Date:</label>
   <textarea class="form-control" name="show_date" id="" cols="30" rows="10"></textarea>
   
  
  <div class="form-group">
  <label for="">Enter status:</label>
   <textarea class="form-control" name="satus" id="" cols="30" rows="10"></textarea>
  </div>

  
  
    
  
</form>
@endsection




