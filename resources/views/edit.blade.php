@extends('layout.private')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4> Edit Food Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$makanan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Food Name</label>
                            <input type="text" name="food_name" value="{{$makanan->food_name}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Category</label>
                            <select name="category_id" value="{{$makanan->category_id}}" required class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Location</label>
                            <select name="location_id" value="{{$makanan->location_id}}" required class="form-control">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Best Before</label>
                            <input type="date" name="best_before" value="{{$makanan->best_before}}" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="food_description" value="{{$makanan->food_description}}" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="course form-control">
                            <img src="{{ asset('public/storage/image/'.$makanan->image) }}" width="70" height="70">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection