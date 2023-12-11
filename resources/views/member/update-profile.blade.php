@extends('layout.private')
@section('content')

 @if (session('status'))
    <div>{{ session('status') }}</div>
@endif


@csrf
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('profile.update-password-form')
    @endif


@endsection