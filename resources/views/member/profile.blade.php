@extends('layout.private')
@section('content')

<div class="container">
    <div style="text-align: center;">
        <h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Your Profile</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50%;">
            <div class="card-body">
                <h5 class="card-title">Name: {{ Auth::user()->name }}</h5>
                <p class="card-text">Email: {{ Auth::user()->email }}</p>
                <p class="card-text">Phone Number: {{ Auth::user()->phone}}</p>
                <p class="card-text">Registered Date: {{ Auth::user()->created_at->format('d-m-Y') }}</p>
                <div class="text-align: center;">
                    <a href="/member/update-profile" class="btn btn-dark btn-sm">Update Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection