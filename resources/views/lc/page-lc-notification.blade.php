@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-notification.min.css')}}">
@endsection

@section('content')
<section class="add">
	<div class="content-box ">
        @if(URL::previous() != route('companies.create'))
            <div class="back-link active">
                <a class="t-r f18-l32 purple4 " href="{{ URL::previous() }}">
                    <i class="icon icon-arrow-left"></i>
                    Come back
                </a>
            </div>
        @endif
		<div class="notification-cont-content">
			<h2 class="notification-cont-title t-sb f22-l25 black2">
				Notification settings
			</h2>
			<form action="{{ route('settings-notification-store') }}" class="notification-cont-form" method="POST">
                @csrf
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="new_message" value="1" {{$settings->new_message == 1?'checked':''}}>
						<i></i>
						<span class="t-r f16-l24 purple3">New messages</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="new_order_subscribe_company" value="1" {{$settings->new_order_subscribe_company == 1?'checked':''}}>
						<i></i>
						<span class="t-r f16-l24 purple3">New orders in companies you subscribe to</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="new_order_company_have_your_order" value="1" {{$settings->new_order_company_have_your_order == 1?'checked':''}}>
						<i></i>
						<span class="t-r f16-l24 purple3">New orders in the companies for which you have placed an order</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="new_system_message" value="1" {{$settings->new_system_message == 1?'checked':''}}>
						<i></i>
						<span class="t-r f16-l24 purple3">Service updates</span>
					</label>
				</div>
				<div class="notification-cont-btn">
					<button class=" btn w140">
						Save
					</button>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection
