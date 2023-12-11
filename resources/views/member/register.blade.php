@extends('layout.bgregister')

@section('content')
    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="user" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Full Name"/>
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" required placeholder="Email Address" />
        </div>

       
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" name="password" required autocomplete="new-password" placeholder="Password" />
            </div>

            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            </div>
        </div>
    
        <div >
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Register') }}
            </button>
        </div>

        <hr>

        <div class="text-center">
            <a class="small" href="{{ route('password.request') }}">
                {{ __('Forgot Password?') }}
            </a>
        </div>
            
        <div class="text-center">
            <a class="small" href="/member/login">
                {{ __('Already have an account? Login!') }}
            </a>
        </div>
        
    </form>
@endsection
