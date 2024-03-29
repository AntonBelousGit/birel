@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-add-company.min.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-add-order.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-add-order-all.min.js')}}" type="module"></script>

@endsection

@section('content')


<section class="add">
	<div class="add-order" id="tabs">
		<ul class="tab-wrapper nav-tabs w310">
			<li class="t-m f18-l32 purple1 tab-n active">
				BID
			</li>
			<li class="t-m f18-l32 purple1 tab-n ">
				ASK
			</li>
			<li class="t-m f18-l32 purple1 tab-n ">
				Looking for an offer
			</li>
<!-- 			<li class="t-m f18-l32 purple1 tab-n "> -->
<!--                 Tender -->
<!--             </li> -->
		</ul>
		<div class="content-t active">
			<form class="add-order-ask" action="{{ route('companies.store') }}" method="POST">
                @csrf
				<div class="ask">
                    <input type="hidden" name="type" value="BID">
					<div class="ask-block c-n">
						<h2 class="t-sb f22-l25 purple3 ">
							Add company
						</h2>
						<p class="t-r f16-l24 purple2">
							You can add a company. To do this, you need to correctly enter its name and the address of its website.
						</p>
						<div class="ask-block-inp">
							<label class="t-r f16-l24 purple1" for="companyName_bid">Company name</label>
							<input class="i-f w400" type="text" id="companyName_bid" placeholder="Enter the Name" name="companyName" required>
						</div>
						<div class="ask-block-inp">
							<label class="t-r f16-l24 purple1" for="companyAddress_bid">Company web address</label>
							<input class="i-f w400" type="text" id="companyAddress_bid" placeholder="Enter the Web Address" name="companyAddress" required>
						</div>
					</div>
					<div class="ask-block d-s">
						<h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
						<p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract or primary
							round.
						</p>
						<select id="theme3-bid" class="js-example-basic-single w400" name="deal_structure" required>
							<option value="direct">direct</option>
                            <option value="spv">spv</option>
                            <option value="forward contract">forward contract</option>
                            <option value="direct or spv">direct or spv</option>
                            <option value="any">any</option>
						</select>
					</div>
					<div class="ask-block s">
						<h2 class="t-sb f22-l25 purple3">Details</h2>
						<p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.</p>
						<textarea class="i-f f14-l16 w400 h235" cols="30" rows="10" name="description" placeholder="Enter the Text"></textarea>
						<ul class="t-r f16-l24 purple2 list-help">
                            <li>
                                - Order will be placed for 45 days, after this period you can update order so that it remains valid for another 45 days (this is available in section my orders).
                            </li>
                            <li>
                                - You can place one order per company.
                            </li>
                            <li>
                                - You can edit the Share price or Valuation once during the first 30 days.
                            </li>
                        </ul>
					</div>
					<div class="ask-block i" id="tabs_bid">
						<h2 class="t-sb f22-l25 purple3">Information</h2>
						<ul class="nav-tabs ">
							<li class="t-m f18-l32 purple1 tab-n2 active">
								Price
							</li>
							<li class="t-m f18-l32 purple1 tab-n2 ">
								Valuation
							</li>
						</ul>
						<div class="content-t2 active">
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_bid">
									Share Type
								</label>
								<select id="share_type_bid" class="js-example-basic-single w400" name="share_type" required>
									<option value="Preferred">Preferred</option>
                                    <option value="Common">Common</option>
                                    <option value="Preferred and Common">Preferred and Common</option>
                                    <option value="any">Any</option>
								</select>
							</div>
							<div class="ask-block-info">
								<div class="wrapper-radio">
									<div class="form_radio">
										<label class="t-r f14-l16 purple1" for="share_type_currency_bid1">
											<input type="radio" id="share_type_currency_bid1" name="share_type_currency_bid" checked>
											<span></span>
											$
										</label>
									</div>
									<div class="form_radio">
										<label class="t-r f14-l16 purple1" for="share_type_currency_bid2">
											<input type="radio" id="share_type_currency_bid2" name="share_type_currency_bid">
											<span></span>
											€
										</label>
									</div>
								</div>
								<label class="t-r f16-l24 purple1" for="share_price_bid">Share Price</label>
								<input class="i-f w400 m-bid" type="number" id="share_price_bid" placeholder="Enter the Price" name="share_price" required step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_number_bid">Share Number</label>
								<input class="i-f w400 m-bid" type="number" id="share_number_bid" placeholder="Enter the Number" name="share_number" required step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="volume_bid">Volume</label>
								<input class="i-f w400" type="number" id="volume_bid" placeholder="Enter the Volume" name="volume" required step="0.001">
								<button class="btn-green w265" type="button" id="btn_calc_bid">
									Calculate
								</button>
								<div class=" t-r f14-l16 red error"></div>
							</div>
						</div>
						<div class="content-t2">
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_bid2">Share Type</label>
								<select id="share_type_bid2" class="js-example-basic-single w400">
									<option value="Preferred">Preferred</option>
                                    <option value="Common">Common</option>
                                    <option value="Preferred and Common">Preferred and Common</option>
                                    <option value="any">Any</option>
								</select>
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="volume_bid2">Volume</label>
								<input class="i-f w400" type="number" id="volume_bid2" placeholder="Enter the Volume" step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_number_bid2">Valuation</label>
								<input class="i-f w400" type="number" id="share_number_bid2" placeholder="Enter the Valuation" step="0.001">
							</div>
						</div>
					</div>
				</div>
				<div class="add-order-btn">
					<button class="btn w265">
						Submit
					</button>
				</div>
			</form>
		</div>
		<div class="content-t ">
			<form class="add-order-ask" action="{{ route('companies.store') }}" method="POST">
                @csrf
                <input type="hidden" name="type" value="ASK">
                <div class="ask">
					<div class="ask-block c-n">
						<h2 class="t-sb f22-l25 purple3 ">
							Add company
						</h2>
						<p class="t-r f16-l24 purple2">
							You can add a company. To do this, you need to correctly enter its name and the address of its website.
						</p>
						<div class="ask-block-inp">
							<label class="t-r f16-l24 purple1" for="companyName_ask">Company name</label>
							<input class="i-f w400" type="text" id="companyName_ask" placeholder="Enter the Name" name="companyName" required>
						</div>
						<div class="ask-block-inp">
							<label class="t-r f16-l24 purple1" for="companyAddress_ask">Company web address</label>
							<input class="i-f w400" type="text" id="companyAddress_ask" placeholder="Enter the Web Address" name="companyAddress" required>
						</div>
					</div>
					<div class="ask-block d-s">
						<h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
						<p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract or primary
							round.
						</p>
						<select id="theme3" name="deal_structure" class="js-example-basic-single w400">
							<option value="0" selected>Choose</option>
							<option value="direct" >direct</option>
							<option value="spv" >spv</option>
							<option value="forward contract" >forward contract</option>
							<option value="direct or spv" >direct or spv</option>
						</select>
					</div>
					<div class="ask-block s">
						<h2 class="t-sb f22-l25 purple3">Details</h2>
						<p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.</p>
						<textarea class="i-f f14-l16 w400 h235" cols="30" rows="10" placeholder="Enter the Text"></textarea>
						<ul class="t-r f16-l24 purple2 list-help">
                            <li>
                                - Order will be placed for 45 days, after this period you can update order so that it remains valid for another 45 days (this is available in section my orders).
                            </li>
                            <li>
                                - You can place one order per company.
                            </li>
                            <li>
                                - You can edit the Share price or Valuation once during the first 30 days.
                            </li>
                        </ul>
					</div>
					<div class="ask-block i" id="tabs_ask">
						<h2 class="t-sb f22-l25 purple3">Information</h2>
						<ul class="nav-tabs ">
							<li class="t-m f18-l32 purple1 tab-n2 active">
								Price
							</li>
							<li class="t-m f18-l32 purple1 tab-n2 ">
								Valuation
							</li>
						</ul>
						<div class="content-t2 active">
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_ask">
									Share Type
								</label>
								<select id="share_type_ask" name="share_type_ask" class="js-example-basic-single w400" required>
									<option value="Preferred">Preferred</option>
                                    <option value="Common">Common</option>
                                    <option value="Preferred and Common">Preferred and Common</option>
                                    <option value="any">Any</option>
								</select>
							</div>
							<div class="ask-block-info">
								<div class="wrapper-radio">
									<div class="form_radio">
										<label class="t-r f14-l16 purple1">
											<input type="radio" id="share_type_currency_ask1" name="share_type_currency_ask" value="usd" required checked>
											<span></span>
											$
										</label>
									</div>
									<div class="form_radio">
										<label class="t-r f14-l16 purple1">
											<input type="radio" id="share_type_currency_ask2" name="share_type_currency_ask" value="eur" required>
											<span></span>
											€
										</label>
									</div>
								</div>
								<label class="t-r f16-l24 purple1" for="share_price_ask">Share Price</label>
								<input class="i-f w400 m-bid" type="number" id="share_price_ask" name="share_price" placeholder="Enter the Price" required step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_number_ask">Share Number</label>
								<input class="i-f w400 m-bid" type="number" id="share_number_ask" name="share_number" placeholder="Enter the Number" required step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="volume_ask">Volume</label>
								<input class="i-f w400" type="number" id="volume_ask" name="volume" placeholder="Enter the Volume" required step="0.001">
								<button class="btn-green w265" type="button" id="btn_calc_ask">
									Calculate
								</button>
								<div class=" t-r f14-l16 red error"></div>
							</div>
						</div>
						<div class="content-t2">
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_ask2">Share Type</label>
								<select id="share_type_ask2" class="js-example-basic-single w400">
									<option value="0" selected>Choose</option>
								</select>
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="volume_ask2">Volume</label>
								<input class="i-f w400" type="number" id="volume_ask2" placeholder="Enter the Volume" step="0.001">
							</div>
							<div class="ask-block-info">
								<label class="t-r f16-l24 purple1" for="share_number_ask2">Valuation</label>
								<input class="i-f w400" type="number" id="share_number_ask2" placeholder="Enter the Valuation" step="0.001">
							</div>
						</div>
					</div>
				</div>
				<div class="add-order-btn">
					<button class="btn w265">
						Submit
					</button>
				</div>
			</form>
		</div>
		<div class="content-t ">
			<form class="add-order-looking" action="{{ route('companies.store-lfo') }}" method="POST">
                @csrf
				<div class="looking">
                    <input type="hidden" name="type" value="LFO">
                    <div class="looking-block c-n">
						<h2 class="t-sb f22-l25 purple3 ">
							Add company
						</h2>
						<p class="t-r f16-l24 purple2">
							You can add a company. To do this, you need to correctly enter its name and the address of its website.
						</p>
						<div class="looking-block-inp">
							<label class="t-r f16-l24 purple1" for="companyName_looking">Company name</label>
							<input class="i-f w400" type="text" id="companyName_looking" placeholder="Enter the Name" required name="companyName">
						</div>
						<div class="looking-block-inp">
							<label class="t-r f16-l24 purple1" for="companyAddress_looking">Company web address</label>
							<input class="i-f w400" type="text" id="companyAddress_looking" placeholder="Enter the Web Address" required name="companyAddress">
						</div>
					</div>
					<div class="looking-block o">
						<h3 class="t-r f16-l24 purple1">Which order do you want to add?</h3>
						<div class="wrapper-radio3">
							<div class="form_radio">
								<label class="t-r f14-l16 purple1">
									<input type="radio" name="sub_type" value="BID" checked>
									<span></span>
									BID
								</label>
							</div>
							<div class="form_radio">
								<label class="t-r f14-l16 purple1">
									<input type="radio" name="sub_type" value="ASK">
									<span></span>
									ASK
								</label>
							</div>
						</div>
					</div>
					<div class="looking-block d-s">
						<h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
						<p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or
                                                                           primary round by selecting from the list.
						</p>
						<select class="js-example-basic-single w400" name="deal_structure" required>
							<option value="direct">direct</option>
                            <option value="spv">spv</option>
                            <option value="forward contract">forward contract</option>
                            <option value="direct or spv">direct or spv</option>
                            <option value="any">any</option>
						</select>
					</div>
					<div class="looking-block s">
						<h2 class="t-sb f22-l25 purple3">Details</h2>
						<p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers,
                           management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and
                           so on.</p>
						<textarea class="i-f f14-l16 w400 h235" placeholder="Enter the Text" name="description"></textarea>
						<ul class="t-r f16-l24 purple2 list-help">
                            <li>
                                - Order will be placed for 45 days, after this period you can update order so that it remains valid for another 45 days (this is available in section my orders).
                            </li>
                            <li>
                                - You can place one order per company.
                            </li>
                            <li>
                                - You can edit the Share price or Valuation once during the first 30 days.
                            </li>
                        </ul>
					</div>
					<div class="looking-block i" id="tabs_looking">
						<h2 class="t-sb f22-l25 purple3">Information</h2>
						<ul class="nav-tabs">
							<li class="t-m f18-l32 purple1 tab-n2 active">
								Number shares
							</li>
							<li class="t-m f18-l32 purple1 tab-n2 ">
								Block volume
							</li>
						</ul>
						<div class="content-t2 active">

							<div class="looking-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_looking">
									Share Type
								</label>
								<select id="share_type_looking" class="js-example-basic-single w400" name="share_type" required>
									<option value="Preferred">Preferred</option>
                                    <option value="Common">Common</option>
                                    <option value="Preferred and Common">Preferred and Common</option>
                                    <option value="any">Any</option>
								</select>
							</div>
							<div class="looking-block-info">
								<label class="t-r f16-l24 purple1" for="share_number_looking">Share Number</label>
								<input class="i-f w400" type="text" id="share_number_looking"  name="share_number" placeholder="Enter the Number"required step="0.001">
							</div>
						</div>
						<div class="content-t2">
							<div class="looking-block-info">
								<label class="t-r f16-l24 purple1" for="share_type_looking2">Share Type</label>
								<select id="share_type_looking2" class="js-example-basic-single w400" >
									<option value="Preferred">Preferred</option>
                                    <option value="Common">Common</option>
                                    <option value="Preferred and Common">Preferred and Common</option>
                                    <option value="any">Any</option>
								</select>
							</div>
							<div class="looking-block-info">
								<label class="t-r f16-l24 purple1" for="volume_looking">Block Volume</label>
								<input class="i-f w400" type="text" id="volume_looking" placeholder="Enter the Volume" step="0.001">
							</div>
						</div>
					</div>
				</div>
				<div class="add-order-btn">
					<button class="btn w265">
						Submit
					</button>
				</div>
			</form>
		</div>
<!--		<div class="content-t ">-->
<!--			<form class="add-order-tender" action="#">-->
<!--				<div class="tender">-->
<!--					<div class="tender-block c-n">-->
<!--						<h2 class="t-sb f22-l25 purple3 ">-->
<!--							Add company-->
<!--						</h2>-->
<!--						<p class="t-r f16-l24 purple2">-->
<!--							You can add a company. To do this, you need to correctly enter its name and the address of its website.-->
<!--						</p>-->
<!--						<div class="tender-block-inp">-->
<!--							<label class="t-r f16-l24 purple1" for="companyName_tender">Company name</label>-->
<!--							<input class="i-f" type="text" id="companyName_tender" placeholder="Placeholder text">-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="tender-block n-c">-->
<!--						<label class="t-r f16-l24 purple1" for="site-company4">Company web address</label>-->
<!--						<input class="i-f w400" type="text" id="site-company4" placeholder="Placeholder">-->
<!--					</div>-->
<!--					<div class="tender-block o">-->
<!--						<h3 class="t-r f16-l24 purple1">Какой ордер вы хотите добавить?</h3>-->
<!--						<div class="wrapper-radio3">-->
<!--							<div class="form_radio">-->
<!--								<label class="t-r f14-l16 purple1">-->
<!--									<input type="radio" name="variant4" checked>-->
<!--									<span></span>-->
<!--									BID-->
<!--								</label>-->
<!--							</div>-->
<!--							<div class="form_radio">-->
<!--								<label class="t-r f14-l16 purple1">-->
<!--									<input type="radio" name="variant4">-->
<!--									<span></span>-->
<!--									ASK-->
<!--								</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="tender-block d-s">-->
<!--						<h2 class="t-sb f22-l25 purple3">Deal Structure</h2>-->
<!--						<p class="t-r f16-l24 purple2">You can choose deal structure: direct , spv , forward contract or primary-->
<!--							round, выбрав из списка.-->
<!--						</p>-->
<!--						<select id="theme34" class="js-example-basic-single w400">-->
<!--							<option value="0" selected>Choose</option>-->
<!--						</select>-->
<!--					</div>-->
<!--					<div class="tender-block s">-->
<!--						<h2 class="t-sb f22-l25 purple3">Описание</h2>-->
<!--						<p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract or primary-->
<!--							round.</p>-->
<!--						<textarea class="i-f f14-l16 w400 h235" placeholder="Placeholder text"></textarea>-->
<!--					</div>-->
<!--					<div class="tender-block d-r" >-->
<!--						<h2 class="t-sb f22-l25 purple3">Срок тендера</h2>-->
<!--						<div class="date-wrapper">-->
<!--							<input class="i-f w170" type="text" name="datetimes">-->
<!--							<input class="i-f w170" type="text" name="datetimes">-->
<!--						</div>-->
<!--                             <ul class="t-r f16-l24 purple2 list-help"> -->
<!--                                 <li> -->
<!--                                     - Order will be placed for 45 days, after this period you can update order so that it remains valid for another 45 days (this is available in section my orders). -->
<!--                                 </li> -->
<!--                                 <li> -->
<!--                                     - You can place one order per company. -->
<!--                                 </li> -->
<!--                                 <li> -->
<!--                                     - You can edit the Share price or Valuation once during the first 30 days. -->
<!--                                 </li> -->
<!--                             </ul> -->
<!--					</div>-->
<!--					<div class="tender-block i" id="tabs2-tender">-->
<!--						<h2 class="t-sb f22-l25 purple3">Информация</h2>-->
<!--						<ul class="nav-tabs">-->
<!--							<li class="t-m f18-l32 purple1 tab-n2 active">-->
<!--								Price-->
<!--							</li>-->
<!--							<li class="t-m f18-l32 purple1 tab-n2 ">-->
<!--								Valuation-->
<!--							</li>-->
<!--						</ul>-->
<!--						<div class="content-t2 active">-->
<!--							<div class="tender-block-info">-->
<!--								<label class="t-r f16-l24 purple1" for="share_type4">-->
<!--									Share Type-->
<!--								</label>-->
<!--								<select id="share_type4" class="js-example-basic-single w400">-->
<!--									<option value="0" selected>Choose</option>-->
<!--								</select>-->
<!--							</div>-->
<!--							<div class="tender-block-info">-->
<!--								<div class="wrapper-radio">-->
<!--									<div class="form_radio">-->
<!--										<label class="t-r f14-l16 purple1">-->
<!--											<input type="radio" name="variant" checked>-->
<!--											<span></span>-->
<!--											$-->
<!--										</label>-->
<!--									</div>-->
<!--									<div class="form_radio">-->
<!--										<label class="t-r f14-l16 purple1">-->
<!--											<input type="radio" name="variant">-->
<!--											<span></span>-->
<!--											€-->
<!--										</label>-->
<!--									</div>-->
<!--								</div>-->
<!--								<label class="t-r f16-l24 purple1" for="share_price4">Start Share Price</label>-->
<!--								<input class="i-f w400" type="text" id="share_price4" placeholder="Placeholder price">-->
<!--							</div>-->
<!--							<div class="tender-block-info">-->
<!--								<label class="t-r f16-l24 purple1" for="share_number4">Number of Share</label>-->
<!--								<input class="i-f w400" type="text" id="share_number4" placeholder="Placeholder number">-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="content-t2">-->
<!--							<div class="tender-block-info">-->
<!--								<label class="t-r f16-l24 purple1" for="share_type24">Share Type</label>-->
<!--								<select id="share_type24" class="js-example-basic-single w400">-->
<!--									<option value="0" selected>Choose</option>-->
<!--								</select>-->
<!--							</div>-->
<!--							<div class="tender-block-info">-->
<!--								<label class="t-r f16-l24 purple1" for="volume24">Block Volume</label>-->
<!--								<input class="i-f w400" type="text" id="volume24" placeholder="Высчитывается автоматически">-->
<!--							</div>-->
<!--							<div class="tender-block-info">-->
<!--								<label class="t-r f16-l24 purple1" for="share_number24">Valuation Start</label>-->
<!--								<input class="i-f w400" type="text" id="share_number24" placeholder="Placeholder number">-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="add-order-btn">-->
<!--					<button class="btn w265">-->
<!--						Submit-->
<!--					</button>-->
<!--				</div>-->
<!--			</form>-->
<!--		</div>-->
	</div>

</section>
@endsection
