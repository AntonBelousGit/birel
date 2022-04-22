@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-company.min.css')}}">
@endsection

@section('content')

<section class="add">
	<div class="add-company">
		@if(URL::previous() != route('companies.create'))
		<div class="back-link active">
            <a class="t-r f18-l32 purple4 " href="{{ URL::previous() }}">
                <i class="icon icon-arrow-left"></i>
                Come back
            </a>
        </div>
		@endif
		<div class="add-company-wrapper">
			<h1 class="t-sb f22-l25 purple3 ">
				Add company
			</h1>
			<p class="t-r f16-l24 purple2">
				You can add a company. To do this, you need to correctly enter its name and the address of its website.
			</p>
			<form class="add-company-form" action="{{route('companies.store')}}" method="POST">
				@csrf
				<ul class="form-list">
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1"  for="companyName">Company name</label>
						<input class="i-f" type="text" id="companyName" placeholder="Placeholder text" name="companyName">
					</li>
					<li class="form-list-item">
						<label class="t-r f16-l24 purple1"  for="companyAddress">Company address</label>
						<input class="i-f" type="text" id="companyAddress" placeholder="Placeholder" name="companyAddress">
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
