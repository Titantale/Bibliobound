@extends('layout.private')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    
    <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .card {
            margin: 20px auto;
            width: 50%;
        }
        .card-header {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
        }
        .card-body {
            text-align: center;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="background-color: #f5f5f5; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header">
                Welcome!
            </div>
            <div class="card-body">
                <p>You have successfully logged in!</p>
                <p>Here, you can upload your own food.</p>
                <p>Use the sidebar to navigate your way around.</p>
                <p>If you have not done it, Please update your</p>
                <p>phone number in the update profile section.</p>
            </div>
        </div>
    </div>
</body>

<div class="d-flex justify-content-center">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-danger" type="submit">
            {{ __('Logout') }}
        </button>
    </form>
</div>

@endsection
