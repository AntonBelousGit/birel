@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/pages/page-lc-add-company.min.css')}}">
		<section class="add">
	<div class="add-company">
		<div class="add-company-link active">
			<a class="t-r f18-l32 purple4 " href="#">
				<i class="icon icon-arrow-left"></i>
				Вернуться назад
			</a>
		</div>
		<div class="add-company-wrapper">
			<h1 class="t-sb f22-l25 purple3 ">
				Добавить компанию
			</h1>
			<p class="t-r f16-l24 purple2">
				Вы можете добавить компанию. Для этого нужно корректно ввести ее название и адрес ее сайта.
			</p>
			<form class="add-company-form" action="#">
				<ul class="form-list">
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1"  for="companyName">Название компании</label>
						<input class="i-f" type="text" id="companyName" placeholder="Placeholder text">
					</li>
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1"  for="companyAddress">Адрес компании</label>
						<input class="i-f" type="text" id="companyAddress" placeholder="Placeholder">
					</li>
				</ul>
				<button class="btn btn-green">
					<span class="f24-l32">+</span>
					Add company
				</button>
			</form>
		</div>
	</div>
</section>
@endsection
