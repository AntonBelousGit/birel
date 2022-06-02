@extends('layouts.app')

@section('front_style')
    <link rel="stylesheet" href="{{asset('css/pages/page-password-recovery.min.css')}}">
@endsection

@section('content')
<main class="bg-site">
    <div class="bg-password-recovery">
        <div class="container">
            <div class="password-recovery">
                <div class="password-recovery-container">
                    <h1 class="password-recovery-title t-sb f24-l32 green">{{ __('Reset Password') }}</h1>
                    <div class="card-body">
                        @if (session('status'))
                            <div class='t-r f12-l18' role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="password-recovery-form" action="{{ route('password.update') }}" method="POST">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">


                                <div class="password-recovery-form-box">
                                    <input id="email" type="email" class="i-f @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                    @error('email')
                                        <span class="password-recovery-error" role="alert">
                                           <strong class='t-r f12-l18'>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            <div class="password-recovery-form-box">
                                    <input id="password" type="password" class="i-f @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="password-recovery-error" role="alert">
                                            <strong class='t-r f12-l18'>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="password-recovery-form-box">
                                    <input id="password-confirm" type="password" class="i-f" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">

                            </div>
                            <div class="password-recovery-form-box">
                                <button type="submit" class="btn w100p">
                                    {{ __('Reset Password') }}
                                </button>

                            </div>
                        </form>
                        <div class='password-recovery-text'>
                            <p class="t-r f14-l16 purple1">Remember your password?
                                <a class="green" href="./page-registration.html">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
