@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pages/page-registration.min.css') }}">

<main class="bg-site">
    <div class="bg-registration">
        <div class="container">
            <div class="registration">
    <div>
        <h1 class="registration-title t-sb f24-l32 green">
            Create your account
        </h1>
        <div id="tabs1">
            <ul class="tab-list">
                <li class="tab-btn active t-sb f14-l16 purple1">
                    Fund representative
                </li>
                <li class="tab-btn t-sb f14-l16 purple1">
                    Individual
                </li>
            </ul>
            <form class="tab-content active" action="{{ route('register') }}" method="POST">
                        @csrf
                <div class="cont-l">
                    <input type="hidden" name="type" value="Representative">
                    <div class="box-input">
                         <input class="i-f" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name">
                          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Surname" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Fund address" name="fund_address" value="{{ old('fund_address') }}" required autocomplete="fund_address">
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Foundation fund name" name="fund_name" value="{{ old('fund_name') }}" required autocomplete="fund_name">
                    </div>
                </div>
                <div class="cont-r">
                    <div class="box-input">
                        <input class="i-f" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <button type="button" class="reset-btn">
                            <i class="icon-eye-green"></i>
                            <i class="icon-eye-grey"></i>
                        </button>
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                        <button type="button" class="reset-btn">
                            <i class="icon-eye-green"></i>
                            <i class="icon-eye-grey"></i>
                        </button>
                    </div>
                    <div class="group-checkbox">
                        <label class="check option">
                            <input class="check__input" type="checkbox" name="receive_news">
                            <span class="check__box"></span>
                            <span class="t-r f14-l16 purple1">I want to receive the newsletter</span>
                        </label>
                        <label class="check option">
                            <input class="check__input privacy-policy" type="checkbox">
                            <span class="check__box"></span>
                            <span class="t-r f14-l16 purple1">I accept Terms of Use, Privacy Policy, and Further Disclosures</span>
                        </label>
                    </div>
                </div>
                <div class="cont-b">
                    <button class="btn w265" type="submit" disabled>Sign up</button>
                    <p class="registration-text t-r f14-l16 purple1">Already registered?
                        <a class="green" href="/login"> Click here to login.</a></p>
                </div>
            </form>
            <form class="tab-content" action="{{ route('register') }}" method="POST">
                        @csrf
                <div class="cont-l">
                    <input type="hidden" name="type" value="Individual">
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name">
                          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Surname" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="text" placeholder="Linkedin" name="linkedin" value="{{ old('linkedin') }}" required autocomplete="linkedin">
                    </div>
                </div>
                <div class="cont-r">
                    <div class="box-input">
                        <input class="i-f" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <button type="button" class="reset-btn">
                            <i class="icon-eye-green"></i>
                            <i class="icon-eye-grey"></i>
                        </button>
                    </div>
                    <div class="box-input">
                        <input class="i-f" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                        <button type="button" class="reset-btn">
                            <i class="icon-eye-green"></i>
                            <i class="icon-eye-grey"></i>
                        </button>
                    </div>
                    <div class="group-checkbox">
                        <label class="check option">
                            <input class="check__input" type="checkbox" name="receive_news">
                            <span class="check__box"></span>
                            <span class="t-r f14-l16 purple1">I want to receive the newsletter</span>
                        </label>
                        <label class="check option">
                            <input class="check__input privacy-policy"  type="checkbox">
                            <span class="check__box"></span>
                            <span class="t-r f14-l16 purple1">I accept Terms of Use, Privacy Policy, and Further Disclosures</span>
                        </label>
                    </div>
                </div>
                <div class="cont-b">
                    <button class="btn w265" type="submit" disabled>Sign up</button>
                    <p class="t-r f14-l16 purple1">Already registered?
                        <a class="green" href="/login"> Click here to login.</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</main>

                        

<script src="{{ asset('js/pages/page-registration.js') }}" type="module"></script>
@endsection
