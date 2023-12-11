<div class="container mt-4">
    <h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Change Your Password</h1>
</div>

<div class="container">
    <form class="user" method="POST" action="{{ route('user-password.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label style="font-size: 20px; font-weight: bold;">{{ __('Current Password') }}</label>
            <input type="password" class="form-control form-control-user" name="current_password" required autocomplete="current-password" />
        </div>

        <div class="form-group">
            <label style="font-size: 20px; font-weight: bold;">{{ __('Password') }}</label>
            <input type="password" class="form-control form-control-user" name="password" required autocomplete="new-password" />
        </div>

        <div class="form-group">
            <label style="font-size: 20px; font-weight: bold;">{{ __('Confirm Password') }}</label>
            <input type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="mb-5">
            <button type="submit" class="btn btn-dark btn-user btn-block">
                {{ __('Save') }}
            </button>
        </div>
    </form>
</div>


<hr>


