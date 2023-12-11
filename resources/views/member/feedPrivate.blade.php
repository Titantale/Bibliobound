@extends('layout.private')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div >
    <h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Available Foods</h1>
</div>


<div class="col-md-6">
    <form action="{{ url('/member/feedPrivate') }}" method="GET">
    <!-- {{ url('/member/feedPrivate') }} -->
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <select name="location" class="form-select">
                        <option value="">All Location</option>
                            @foreach($locations as $location)
                                <option value={{ $location->id }}>{{ $location->name }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-dark py2">Filter</button>
            </div>
        </div>
    </form>
</div>

<br></br>
<style>
        .centered-image {
            display: block;
            margin: auto;
            padding-top: 10px;
        
        }
        
        .food-box-Dry{
            background-color: green;
        }
    </style>

<!-- <a class="btn btn-dark mb-3" href="{{ url('/image')}}">Add Food</a> -->
<div class="row">
    @foreach($foods as $food)
    
    <div class="col-md-4 {{ 'food-box-'.$food->category }}">
    <div class="card">
    <img src="{{ asset('public/storage/image/'.$food->image) }}" width="300" height="300" alt="" class="img-fluid centered-image">
        <div class="card-body">
        <!-- <h4><img src="{{ asset('public/storage/image/'.$food->image) }}" width="300" height="300"></h4> -->
        
            <h4 class="card-title my-title">{{ $food->food_name }}</h4>
            <!-- <p class="card-text">{{ $food->food_description }}</p> -->
            <p class="card-text">Category: {{ $food->category?->name}}</p>
            <p class="card-text">Location: {{ $food->location?->name }}</p> 
            <p class="card-text">Best Before: {{ $food->best_before }}</p>
            <!-- <p class="card-text">User email: {{ $food->user_email }}</p> -->

            <p>
                <!-- <a href="{{ url('edit/'.$food->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ url('delete/'.$food->id) }}" class="btn btn-danger btn-sm">Delete</a> -->
                <a href="{{ route('food-singlePub', $food->id) }}" class="btn btn-warning btn-sm">View Details</a>
           </p>
           <br></br>
            
        </div>
        </div>
    </div>
    @endforeach
    <!-- {{ $foods->links()}} -->
   
 
</div>
{{ $foods->links()}}

@endsection