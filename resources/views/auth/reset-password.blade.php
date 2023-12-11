@extends('layout.public')

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


    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
        </div>

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
        	<label>{{ __('Set New Password for') }}</label>
            <input type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="password" required autocomplete="new-password" placeholder="Password"/>
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
