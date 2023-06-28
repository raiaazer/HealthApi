@extends('layouts.loginlayout')

@section('content')
<div class="form">
    <h2>{{ __('Login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="input">
        <div class="inputBox">

            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="inputBox">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="inputBox">
            <input type="submit" name="" value="{{ __('Login') }}">
        </div>
    </div>
</form>

</div>

@endsection
