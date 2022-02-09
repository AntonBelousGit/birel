@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pages/page-login.min.css') }}">
<main class="bg-site">
    <div class="bg-login">
        <div class="container">
            <div class="login">
    <div class="login-container">
        <h1 class="login-title t-sb f24-l32 green">Log in to your account</h1>
        <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
            <div class="login-form-box">
                <input class="i-f" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="login-form-box">
                <input class="i-f" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                 @enderror
                 @if (Route::has('password.request'))
                <a class="t-r f14-l16 green" href="{{ route('password.request') }}">Forgot?</a>
                @endif
            </div>
            <div class="login-form-box">
                <button class="btn w100p" type="submit">Log in</button>
            </div>
        </form>
        <div class='login-text'>
            <p class="t-r f14-l16 purple1">Don't have an account?
                <a class="green" href="/register">Sign Up</a>
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</main>
                      
                                  <!--   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> -->
                             

                                
@endsection
