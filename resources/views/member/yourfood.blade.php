@extends('layout.private')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Your Foods</h1>
<a class="btn btn-success mb-3" href="{{ url('/image')}}">Add Food</a>

<div class="card-columns">
    @foreach($foods as $food)
    
    <div class="card" style="background-color: #f5f5f5; border: 1px solid #ccc; box-shadow: 2px 2px 5px #ccc;">
    <!-- <img src="{{ asset('storage/image/'.$food->image) }}" alt="image"> -->
        <div class="card-body text-center">
        <img src="{{ asset('public/storage/image/'.$food->image) }}" width="300" height="300" alt="" class="img-fluid">
        
            <h4 class="card-title">{{ $food->food_name }}</h4>
            <!-- <p class="card-text">{{ $food->food_description }}</p> -->
            <p class="card-text">Category: {{ $food->category?->name}}</p>
            <p class="card-text">Location: {{ $food->location?->name }}</p> 
            <p class="card-text">Best Before: {{ $food->best_before }}</p>
            <!-- <p class="card-text">User email: {{ $food->user_email }}</p> -->

            <p>
                <a href="{{ url('edit/'.$food->id) }}" class="btn btn-info btn-sm">Edit</a>
                <a href="{{ route('food-single', $food->id) }}" class="btn btn-warning btn-sm">View Details</a>
                <a href="{{ url('delete/'.$food->id) }}" class="btn btn-danger btn-sm">Delete</a>
           </p>
            
        </div>
    </div>
    @endforeach
   
 
</div>


@endsection

