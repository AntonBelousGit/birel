@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/lib/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-edit-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-add-order-ask.min.js')}}" type="module"></script>

@endsection

@section('content')
   <section class="edit">
   	<div class="edit-wrapper">
   		<div class="edit-left">
   			<h1 class="t-sb f22-l25 purple3">Order #123456</h1>
   			<h3 class="t-r f16-l24 purple1">ASK</h3>
   			<div class="edit-wrapper-box">
   					<label for="company" class="t-r f16-l24 purple1">Company</label>
   					<input id="company" type="text" class="i-f " disabled value="The Walt Disney Company">
   			</div>
   			<div class="edit-wrapper-box">
   				<label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>
   				<input id="deal-structure" type="text" class="i-f " disabled value="Direct">
   			</div>
   			<div class="wrapper-cont">
   				<h2 class="t-m f18-l32 purple3">Price</h2>
   				<div class="edit-wrapper-box">
   					<label for="share-type" class="t-r f16-l24 purple1">Share Type</label>
   					<input id="share-type" type="text" class="i-f " disabled value="Name">
   				</div>
   				<div class="edit-wrapper-box">
   					<div class="box-currency ">
   						$
   					</div>
   					<label for="share-price" class="t-r f16-l24 purple1">Share Price</label>
   					<input id="share-price" type="text" class="i-f " disabled value="Number">
   				</div>
   				<div class="edit-wrapper-box">
   					<label for="share-number" class="t-r f16-l24 purple1">Share Number</label>
   					<input id="share-number" type="text" class="i-f " disabled value="Number">
   				</div>
   				<div class="edit-wrapper-box">
   					<label for="volume" class="t-r f16-l24 purple1">Volume</label>
   					<input id="volume" type="text" class="i-f " disabled value="">
   				</div>
   			</div>
   			<div class="wrapper-cont">
   				<h2 class="t-m f18-l32 purple3">Valuation</h2>
   				<div class="edit-wrapper-box">
   					<label for="share-type2" class="t-r f16-l24 purple1">Share Type</label>
   					<input id="share-type2" type="text" class="i-f " disabled value="Name">
   				</div>
   				<div class="edit-wrapper-box">
   					<label for="volume2" class="t-r f16-l24 purple1">Volume</label>
   					<input id="volume2" type="text" class="i-f " disabled value="">
   				</div>
   				<div class="edit-wrapper-box">
   					<label for="valuation" class="t-r f16-l24 purple1">Valuation</label>
   					<input id="valuation" type="text" class="i-f " disabled value="">
   				</div>
   			</div>
   		</div>
   		<div class="edit-right">
   			<h2 class="t-sb f22-l25 purple3">Description</h2>
   			<div class="edit-wrapper-box">
   				<label for="description" class="t-r f16-l24 purple3">
   					You can choose deal structure: direct , spv , forward contract or primary round.
   				</label>
   				<textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled>Taking into account the current international situation, the introduction of modern methods creates the need to include a number of extraordinary events in the production plan, taking into account a set of innovative process management methods. Banal, but irrefutable conclusions, as well as entrepreneurs on the Internet are described in as much detail as possible.
   			</textarea>
   			</div>
   		</div>
   	</div>
   	<div class="edit-btn">
   		<a class="btn btn-green w265" href="#">
   			Edit
   		</a>
   	</div>
   </section>


   <!--<section class="edit">-->
   <!--	<div class="edit-wrapper">-->
   <!--		<div class="edit-left">-->
   <!--			<h1 class="t-sb f22-l25 purple3">Order #123456</h1>-->
   <!--			<h3 class="t-r f16-l24 purple1">BID</h3>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="company" class="t-r f16-l24 purple1">Company</label>-->
   <!--				<input id="company" type="text" class="i-f " disabled value="The Walt Disney Company">-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>-->
   <!--				<input id="deal-structure" type="text" class="i-f " disabled value="Direct">-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Price</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="share-type" class="t-r f16-l24 purple1">Share Type</label>-->
   <!--					<input id="share-type" type="text" class="i-f " disabled value="Name">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<div class="box-currency ">-->
   <!--						$-->
   <!--					</div>-->
   <!--					<label for="share-price" class="t-r f16-l24 purple1">Share Price</label>-->
   <!--					<input id="share-price" type="text" class="i-f " disabled value="Number">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="share-number" class="t-r f16-l24 purple1">Share Number</label>-->
   <!--					<input id="share-number" type="text" class="i-f " disabled value="Number">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="volume" class="t-r f16-l24 purple1">Volume</label>-->
   <!--					<input id="volume" type="text" class="i-f " disabled value="">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Valuation</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="share-type2" class="t-r f16-l24 purple1">Share Type</label>-->
   <!--					<input id="share-type2" type="text" class="i-f " disabled value="Name">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="volume2" class="t-r f16-l24 purple1">Volume</label>-->
   <!--					<input id="volume2" type="text" class="i-f " disabled value="">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="valuation" class="t-r f16-l24 purple1">Valuation</label>-->
   <!--					<input id="valuation" type="text" class="i-f " disabled value="">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--		<div class="edit-right">-->
   <!--			<h2 class="t-sb f22-l25 purple3">Description</h2>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="description" class="t-r f16-l24 purple3">-->
   <!--					You can choose deal structure: direct , spv , forward contract or primary round.-->
   <!--				</label>-->
   <!--				<textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled>Taking into account the current international situation, the introduction of modern methods creates the need to include a number of extraordinary events in the production plan, taking into account a set of innovative process management methods. Banal, but irrefutable conclusions, as well as entrepreneurs on the Internet are described in as much detail as possible.-->
   <!--				</textarea>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--	</div>-->
   <!--	<div class="edit-btn">-->
   <!--		<a class="btn btn-green w265" href="#">-->
   <!--			Edit-->
   <!--		</a>-->
   <!--	</div>-->
   <!--</section>-->

   <!--<section class="edit">-->
   <!--	<div class="edit-wrapper">-->
   <!--		<div class="edit-left">-->
   <!--			<h1 class="t-sb f22-l25 purple3">Order #123456</h1>-->
   <!--			<h3 class="t-r f16-l24 purple1">Looking for an offer</h3>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="company" class="t-r f16-l24 purple1">Company name</label>-->
   <!--				<input id="company" type="text" class="i-f " disabled value="The Walt Disney Company">-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<span class="t-r f16-l24 purple1">-->
   <!--					BID-->
   <!--				</span>-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>-->
   <!--				<input id="deal-structure" type="text" class="i-f " disabled value="Direct">-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Number shares</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="share_type3">-->
   <!--						Share Type-->
   <!--					</label>-->
   <!--					<input id="share_type3" type="text" class="i-f " disabled value="Direct">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="share_number3">Share Number</label>-->
   <!--					<input class="i-f" type="text" id="share_number3" disabled value="">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Block volume</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="share_type23">Share Type</label>-->
   <!--					<input id="share_type23" type="text" class="i-f " disabled value="Direct">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="volume23">Block Volume Mh us </label>-->
   <!--					<input class="i-f" type="text" id="volume23" disabled value="">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--		<div class="edit-right">-->
   <!--			<h2 class="t-sb f22-l25 purple3">Description</h2>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="description" class="t-r f16-l24 purple3">-->
   <!--					You can choose deal structure: direct , spv , forward contract or primary round.-->
   <!--				</label>-->
   <!--				<textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled>Taking into account the current international situation, the introduction of modern methods creates the need to include a number of extraordinary events in the production plan, taking into account a set of innovative process management methods. Banal, but irrefutable conclusions, as well as entrepreneurs on the Internet are described in as much detail as possible.-->
   <!--				</textarea>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--	</div>-->
   <!--	<div class="edit-btn">-->
   <!--		<a class="btn btn-green w265" href="#">-->
   <!--			Edit-->
   <!--		</a>-->
   <!--	</div>-->
   <!--</section>-->

   <!--<section class="edit">-->
   <!--	<div class="edit-wrapper">-->
   <!--		<div class="edit-left">-->
   <!--			<h1 class="t-sb f22-l25 purple3">Order #123456</h1>-->
   <!--			<h3 class="t-r f16-l24 purple1">Tender</h3>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="company" class="t-r f16-l24 purple1">Company name</label>-->
   <!--				<input id="company" type="text" class="i-f " disabled value="The Walt Disney Company">-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="company-website" class="t-r f16-l24 purple1">Company website</label>-->
   <!--				<input id="company-website" type="text" class="i-f " disabled value="www.walt-disney-company.com">-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<span class="t-r f16-l24 purple1">-->
   <!--					BID-->
   <!--				</span>-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>-->
   <!--				<input id="deal-structure" type="text" class="i-f " disabled value="Direct">-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Price</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="share-type" class="t-r f16-l24 purple1">Share Type</label>-->
   <!--					<input id="share-type" type="text" class="i-f " disabled value="Name">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<div class="box-currency">-->
   <!--						$-->
   <!--					</div>-->
   <!--					<label for="share-price" class="t-r f16-l24 purple1">Start Share Price</label>-->
   <!--					<input id="share-price" type="text" class="i-f " disabled value="Number">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label for="share-number" class="t-r f16-l24 purple1">Number of Share</label>-->
   <!--					<input id="share-number" type="text" class="i-f " disabled value="Number">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--			<div class="wrapper-cont">-->
   <!--				<h2 class="t-m f18-l32 purple3">Valuation</h2>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="share_type23">Share Type</label>-->
   <!--					<input id="share_type23" type="text" class="i-f " disabled value="Direct">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="volume23">Block Volume</label>-->
   <!--					<input class="i-f" type="text" id="volume23" disabled value="">-->
   <!--				</div>-->
   <!--				<div class="edit-wrapper-box">-->
   <!--					<label class="t-r f16-l24 purple1" for="volume24">Valuation Start</label>-->
   <!--					<input class="i-f" type="text" id="volume24" disabled value="">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--		<div class="edit-right">-->
   <!--			<h2 class="t-sb f22-l25 purple3">Description</h2>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<label for="description" class="t-r f16-l24 purple3">-->
   <!--					You can choose deal structure: direct , spv , forward contract or primary round.-->
   <!--				</label>-->
   <!--				<textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled>Taking into account the current international situation, the introduction of modern methods creates the need to include a number of extraordinary events in the production plan, taking into account a set of innovative process management methods. Banal, but irrefutable conclusions, as well as entrepreneurs on the Internet are described in as much detail as possible.-->
   <!--				</textarea>-->
   <!--			</div>-->
   <!--			<div class="edit-wrapper-box">-->
   <!--				<h2 class="t-sb f22-l25 purple3">Tender term</h2>-->
   <!--				<div class="date-wrapper">-->
   <!--					<input class="i-f w170" type="text">-->
   <!--					<input class="i-f w170" type="text">-->
   <!--				</div>-->
   <!--			</div>-->
   <!--		</div>-->
   <!--	</div>-->
   <!--	<div class="edit-btn">-->
   <!--		<a class="btn btn-green w265" href="#">-->
   <!--			Edit-->
   <!--		</a>-->
   <!--	</div>-->
   <!--</section>-->
@endsection


