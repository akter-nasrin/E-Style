@extends('admin.master')
@section('content')
<form action="{{route('waredrobe.store')}}"method="post">
    @csrf
<div class="form-group">
    <label for="">Enter Outfit Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="outfit_name">
    @error('outfit_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
  <label for="">Outfit Details :</label>
   <textarea class="form-control" name="archieve_era" id="" cols="30" rows="10"></textarea>
   
  
  <div class="form-group">
  <label for=""> Outfit Designer:</label>
   <textarea class="form-control" name="outfit_material" id="" cols="30" rows="10"></textarea>
  </div>


  
    


  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
