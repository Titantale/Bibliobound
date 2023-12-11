@extends('layout.private')
@section('content')

<div class="container">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Food Name</label>
    <input type="text" class="form-control" placeholder="Food Name">
  </div>

  <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Food Image</label>
    <input type="text" class="form-control" placeholder="Food Name">
  </div> -->

  <div class="form-group">
  <label for="exampleFormControlInput1">Food Category</label>
  <select class="form-control" id="exampleFormControlSelect1">
    @foreach($categories as $category)
      <option value="">{{$category->name}}</option>
    @endforeach
    </select>
    </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Location</label>
    <select class="form-control" id="exampleFormControlSelect1">
    @foreach($locations as $location)
      <option value="">{{$location->name}}</option>
    @endforeach
    </select>
    </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Best Before Date</label>
    <input type="date" class="form-control" placeholder="Best Before Date">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Food Description</label>
    <textarea class="form-control" rows="3"></textarea>
  </div>
</form>
</div>

@endsection