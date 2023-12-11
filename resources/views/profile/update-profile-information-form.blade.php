<div class="container">
    <h1 style="font-family: Arial; text-shadow: 2px 2px #808080;">Update Your Profile</h1>
</div>



<div class="container">
    <form class="user" method="POST" action="{{ route('user-profile-information.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group" >
            <label style="font-size: 20px; font-weight: bold;">{{ __('Name') }}</label>
            <input type="text" class="form-control form-control-user" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
        </div>

        <div class="form-group" >
            <label style="font-size: 20px; font-weight: bold;">{{ __('Email') }}</label>
            <input type="email" class="form-control form-control-user" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus  />
        </div>

        <div class="form-group" >
            <label style="font-size: 20px; font-weight: bold;">{{ __('Phone') }}</label>
            <input type="phone" class="form-control form-control-user" name="phone" value="{{ old('phone') ?? auth()->user()->phone }}" required autofocus />
        </div>

        <div>
            <button type="submit"  class="btn btn-dark btn-user btn-block" >
                {{ __('Update Profile') }}
            </button>
        </div>

    </form>
</div>


<hr>
