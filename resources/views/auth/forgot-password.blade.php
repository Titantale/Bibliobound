@extends('layout.bgforgotpassword')

@section('content')

        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Forgot your password?</h1>
        </div>
    <div>
        {{ __(' No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

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

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group mt-3">
            <input type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address"/>
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
@endsection
