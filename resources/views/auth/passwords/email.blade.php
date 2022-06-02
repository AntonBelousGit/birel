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
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="password-recovery-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="password-recovery-form-box">
                            <input id="email" type="email" class="i-f @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="password-recovery-error" role="alert">
                                    <strong class='t-r f12-l18'>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="password-recovery-form-box">
                            <button type="submit" class="btn w100p">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                    <div class='password-recovery-text'>
                       <p class="t-r f14-l16 purple1">Remember your password?
                           <a class="green" href="{{route('login')}}">Sign Up</a>
                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
