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
			<form action="#" class="notification-cont-form">
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="new_messages">
						<i></i>
						<span class="t-r f16-l24 purple3">New messages</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="companies_subscribe">
						<i></i>
						<span class="t-r f16-l24 purple3">New orders in companies you subscribe to</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="placed_order">
						<i></i>
						<span class="t-r f16-l24 purple3">New orders in the companies for which you have placed an order</span>
					</label>
				</div>
				<div class="notification-cont-item">
					<label class="checkbox-green">
						<input type="checkbox" name="service_updates">
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
