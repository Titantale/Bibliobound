@extends('layout.bglogin')

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

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
    
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
    </div>

    <div class="container">
        <form class="user" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" required autocomplete="current-password" placeholder="Password" />
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" name="remember">
                    <label>{{ __('Remember me') }}</label>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Login') }}
                </button>
            </div>

            <hr>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif

            <div class="text-center">
                <a class="small" href="/member/register">
                    {{ __('Create an account!') }}
                </a>
            </div>

            
        </form>
    </div>
    
@endsection
