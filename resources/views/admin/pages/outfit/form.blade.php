@extends('admin.master')
@section('content')
<form action="{{route('outfit.store')}}"method="post">
    @csrf
<div class="form-group">
    <label for="">Enter Outfit Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="outfit_name">
    @error('outfit_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
  <label for="">Enter Outfit Color:</label>
   <textarea class="form-control" name="outfit_color" id="" cols="30" rows="10"></textarea>
   
  
  <div class="form-group">
  <label for="">Enter Outfit Material:</label>
   <textarea class="form-control" name="outfit_metarial" id="" cols="30" rows="10"></textarea>
  </div>

  <div class="form-group">
  <label for="">Enter Outfit Description:</label>
   <textarea class="form-control" name="outfit_description" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="">Enter Price: </label>
    <input required type="number" class="form-control" placeholder="Enter price" name="outfit_price">
    
    @error('outfit_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
