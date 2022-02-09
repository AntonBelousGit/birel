@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/pages/index-lc.min.css')}}">

	<section class="content">
	<div class="content-box ">
		@if(Auth::user()->type == 1)
		<div class="content-box-nav">
			<h1 class="t-m f18-l32 purple1">
				 Individual
			</h1>
		</div>
		<h2 class="content-box-title t-sb f22-l25 black2">
			Personal information
		</h2>
		<form class="content-box-form" action="{{ route('info')}}" method="POST">
			@csrf
			<ul class="form-list">
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="name">First Name</label>
					<input class="i-f" id="name" type="text" name="name" value="{{Auth::user()->name}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="secondName">Last Name</label>
					<input class="i-f" id="secondName" type="text" name="surname" value="{{Auth::user()->surname}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="email">Email</label>
					<input class="i-f" id="email" type="email" name="email" value="{{Auth::user()->email}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="linkedin">Linkedin</label>
					<input class="i-f" id="linkedin" type="text" name="linkedin" value="{{Auth::user()->linkedin}}">
				</li>
			</ul>
			<div class="form-checkbox">
				<label class="checkbox-ios">
					<span class="t-r f16-l24 purple1">Я хочу получать новостную рассылку</span>
					<input type="checkbox" name="receive_news" checked="{{ (Auth::user()->receive_news == 'on') ? 'checked': ''}}">
					<span class="checkbox-ios-switch"></span>
				</label>
			</div>
			<div class="form-btn">
				<button class="btn w100p" type="submit">Confirm information changed</button>
			</div>
		</form>
		@elseif(Auth::user()->type == 0)
		<div class="content-box-nav">
			<h1 class="t-m f18-l32 purple1">
				Fund representative
			</h1>
		</div>
		<h2 class="content-box-title t-sb f22-l25 black2">
			Personal information
		</h2>
		<form class="content-box-form" action="{{ route('info')}}" method="POST">
			@csrf
			<ul class="form-list">
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="name2">First Name</label>
					<input class="i-f" id="name2" type="text" name="name" value="{{Auth::user()->name}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="secondName2">Last Name</label>
					<input class="i-f" id="secondName2" type="text" name="surname" value="{{Auth::user()->surname}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="email2">Email</label>
					<input class="i-f" id="email2" type="email" name="email" value="{{Auth::user()->email}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="linkedin2">Linkedin</label>
					<input class="i-f" id="linkedin2" type="text" name="linkedin" value="{{Auth::user()->linkedin}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="nameFund">Name Fund</label>
					<input class="i-f" id="nameFund" type="text" name="fund_name" value="{{Auth::user()->fund_name}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="fundAddress">Fund address</label>
					<input class="i-f" id="fundAddress" type="text" name="fund_address" value="{{Auth::user()->fund_address}}">
				</li>
				<li class="form-list-item">
					<label class="t-r f16-l24 purple1" for="position">Position</label>
					<input class="i-f" id="position" type="text" name="position" value="{{Auth::user()->position}}">
				</li>
			</ul>
			<div class="form-checkbox">
				<label class="checkbox-ios">
					<span class="t-r f16-l24 purple1">Я хочу получать новостную рассылку</span>
					<input type="checkbox" name="receive_news" checked="{{ (Auth::user()->receive_news == 'on') ? 'checked': ''}}">
					<span class="checkbox-ios-switch"></span>
				</label>
			</div>
			<div class="form-btn">
				<button class="btn w100p" type="submit">Confirm information changed</button>
			</div>
		</form>
		@endif
	</div>
	<div class="content-box password">
		<h2 class="content-box-title t-sb f22-l25 black2">
			Password
		</h2>
		<p class="content-box-text t-r f16-l24 black3">
			You can create new password here!
		</p>
		<div class="content-box-wrapper">
			<form class="content-box-form" action="#">
				<ul class="form-list">
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1" for="password">New password</label>
						<input class="i-f" id="password" type="text" placeholder="Placeholder text">
					</li>
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1" for="secondPassword">Re-enter new password</label>
						<input class="i-f" id="secondPassword" type="text" placeholder="Placeholder text">
					</li>
				</ul>
				<div class="form-btn">
					<button class="btn">Confirm password changed</button>
				</div>
			</form>
			<div class="box-text">
				<h3 class="t-r f16-l24 black3">
					Password requirements:
				</h3>
				<ul class="">
					<li class="pointer t-r f16-l24 black3">
						At least 8 characters
					</li>
					<li class="pointer t-r f16-l24 black3">
						A lowercase letter
					</li>
					<li class="pointer t-r f16-l24 black3">
						An uppercase letter
					</li>
					<li class="pointer t-r f16-l24 black3">
						A number
					</li>
					<li class="pointer t-r f16-l24 black3">
						No parts of your username
					</li>
					<li class="pointer t-r f16-l24 black3">
						Your password cannot be any of your last 3 passwords
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
	</div>
</main>
@endsection



