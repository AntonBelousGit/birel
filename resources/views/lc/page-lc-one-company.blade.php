@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="{{asset('css/pages/page-lc-one-company.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('/js/lib/propper.min.js')}}"></script>
<script src="{{asset('/js/lib/tippy.min.js')}}"></script>

<script src="{{asset('js/pages/page-lc-company.min.js')}}" type="module"></script>
<script src="{{asset('js/pages/page-lc-one-company.min.js')}}"></script>

<script>
	let token = '{{csrf_token()}}';
	let finance = 1; // data-id строки финансирования
	let items = document.querySelectorAll('.arrow-icon-purple[data-id]');
	let item = [].map.call(items, function(e) {
				e.addEventListener('click', () => {
						$.ajax({
								type: "GET",
								url: "{{route('company.get-finance',$company->id)}}",
								data: {
									id: e.dataset.id,
									_token: token,
								},
								success: function(response) {
									result = response.data;
									let elem = e.parentNode.parentNode.nextElementSibling;
									elem.innerHTML = '<td class="body-row-item" colspan="2">' +
										'<ul class="list-t">' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Price Per Share' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.price_per_share +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Shares Outstanding' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.shares_outstanding +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Percent Shares Outstanding' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.percent_shares_outstanding +
										'</div>' +
										'</li>' +
										'</ul>' +
										'</td>' +
										'<td class="body-row-item" colspan="2">' +
										'<ul class="list-t">' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Liquidation Pref Order' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.liquidation_pref_order +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Liquidation Pref As Multiplier' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.liquidation_pref_as_multiplier +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Conversion Ratio' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.conversion_rate +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Participating' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.participating +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div class="designation-name">' +
										'Participation Cap' +
										'</div>' +
										'<div class="designation-meanings">' +
										result.participation_cap +
										'</div>' +
										'</li>' +
										'</ul>' +
										'</td>' +
										'<td class="body-row-item">' +
										'<ul class="list-t">' +
										'<li class="list-t-item">' +
										'<div>' +
										'Dividend Rate' +
										'</div>' +
										'<div>' +
										result.dividend_rate +
										'</div>' +
										'</li>' +
										'<li class="list-t-item">' +
										'<div>' +
										'Cumulative' +
										'</div>' +
										'<div>' +
										result.cumulative +
										'</div>' +
										'</li>' +
										'</ul>' +
										'</td>' +
										'<td class="body-row-item" colspan="3">' +
										'<ul class="list-t">' +
										'<li class="list-t-item">' +
										'<div>' +
										'Investors' +
										'</div>' +
										'<div>' +
										result.investors +
										'</div>' +
										'</li>' +
										'</ul>' +
										'</td>' ;
									},
								});
						});
				});
</script>
@endsection

@section('content')
<section class="one">
	<div class="one-company">
		<div class="one-company-link active">
			<a class="t-r f18-l32 purple4 " href="#">
				<i class="icon icon-arrow-left"></i>
				Вернуться назад
			</a>
		</div>

		<div class="one-company-wrapper">
			<div class="one-company-card">
				<h1 class="card-title t-sb f22-l25 purple3">The Walt Disney Company</h1>
				<span class="card-sub-title t-r f16-l24 purple3">BioTech</span>
				<picture>
					<source srcset="{{asset('storage/companies/'.$company->image)  }}" type="image/webp">
					<img class="card-img" src="{{asset('storage/companies/'.$company->image)  }}" alt="" width="350px" height="210px">
				</picture>
				<label class="card-wrapper">
					<select class="card-wrapper-select js-example-basic-single2">
						<option value="0" disabled selected>Choose offer</option>
						<option value="1">Bid</option>
						<option value="2">Ask</option>
						<option value="3">Looking for an offer</option>
						<option value="4">Tender</option>
					</select>
					<button class="card-wrapper-btn btn btn-green">Add +</button>
				</label>
			</div>
			<div class="one-company-text">
				<div class="text-wrapper" action="#">
					<div class="text-wrapper-box">
						<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
						<button class="reset-btn">
							<i class="icon icon-trash"></i>
						</button>
					</div>
					<div class="text-wrapper-box">
						<p class=" f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите
							получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant">
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant">
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" checked>
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
				<div class="text-wrapper">
					<button class="btn btn-green w210">Add to watch list</button>
					<div class="text-wrapper-box">
						<p class=" f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите
							получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant">
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant">
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" checked>
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
				<p class="t-r f16-l24 purple3">
					The Walt Disney Company is one of the largest media conglomerates in the entertainment
					industry in
					the
					world.
					<br><br>
					Founded on October 16, 1923 as a small animation studio, it is now one of the largest
					transnational
					media corporations, one of the largest Hollywood studios, the owner of 11 amusement parks
					and two
					water
					parks, as well as several broadcasting networks, including refers to the American
					Broadcasting
					Company
					(ABC).
					<br><br>
					The Disney corporation, in addition to the main headquarters in the United States, has major
					departments
					in France (The Walt Disney Company France (since 1992)), Japan (The Walt Disney Company
					Japan (since
					1959)) and Russia (The Walt Disney Company CIS (since 2006)).
					<br><br>
					The Walt Disney Company is listed on the Dow Jones Industrial Average. Market capitalization
					for Q4
					2020
					was $ 327 billion.
				</p>
			</div>
		</div>
		<div class="one-company-tab" id="tabs">
			<ul class="tab-wrapper nav-tabs">
				<li class="t-r f22-l25 purple1 tab-n active">
					Orders
				</li>
				<li class="t-r f22-l25 purple1 tab-n">
					Financing
				</li>
			</ul>
			<div class="content-t active">
				<div class="company-philter">
					<label class="company-philter-select">
						<select class="js-example-basic-single">
							<option value="0">3D Printing</option>
							<option value="1">Advertising</option>
							<option value="2">Aerospace</option>
							<option value="3">Analytics/Big Data</option>
						</select>
					</label>
					<label class="company-philter-select">
						<select class="js-example-basic-single">
							<option value="0">
								< $500M</option>
							<option value="1">$500M - $1B</option>
							<option value="2">$1B - $5B</option>
							<option value="3">$5B +</option>
						</select>
					</label>
					<button class="company-philter-btn" type="button">
						Clear filters
						<i class="icon icon-close-green"></i>
					</button>
				</div>
				<div class="table-wrapper">
					<table class="color-t table">
						<thead class="table-head">
							<tr class="head-row">
								<th class="head-row-item">
									<div>
										#
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Date
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Company
									</div>
								</th>
								<th class="head-row-item">
									<div></div>
								</th>
								<th class="head-row-item">
									<div>
										Valuation
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Volume
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Share price
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Number of shares
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Share type
									</div>
								</th>
								<th class="head-row-item">
									<div>
										Deal Structure
									</div>
								</th>
								<th class="head-row-item">
									<div></div>
								</th>
								<th class="head-row-item">
									<div></div>
								</th>
								<th class="head-row-item">
									<div></div>
								</th>
							</tr>
						</thead>
						<tbody class="table-body">
							<tr class="body-row bid">
								<td class="body-row-item">
									<div>
										1
									</div>
								</td>
								<td class="body-row-item">
									<div>
										01/01/22
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Company name
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Аsk
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Text
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Text
									</div>
								</td>
								<td class="body-row-item center">
									<div>
										<button class="reset-btn" type="button" data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
											<i class="tree-dots"></i>
										</button>
									</div>
								</td>
								<td class="body-row-item center">
									<div>
										<button class="reset-btn" type="button" data-tippy-content="Подсказка о возможности редактирования своего ордера ">
											<i class="icon icon-pen-blue"></i>
										</button>
									</div>
								</td>
								<td class="body-row-item center ios-p">
									<div>
										<label class="checkbox-ios">
											<input type="checkbox">
											<span class="checkbox-ios-switch"></span>
										</label>
									</div>
								</td>
							</tr>
							<tr class="body-row">
								<td class="body-row-item">
									<div>
										2
									</div>
								</td>
								<td class="body-row-item">
									<div>
										01/01/22
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Company name
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Ask
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										0000000000
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Text
									</div>
								</td>
								<td class="body-row-item">
									<div>
										Text
									</div>
								</td>
								<td class="body-row-item center">
									<div>
										<button class="reset-btn" type="button" data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
											<i class="tree-dots"></i>
										</button>
									</div>
								</td>
								<td class="body-row-item center">
									<div>
										<button class="reset-btn icons" type="button" data-tippy-content="Подсказка о возможности редактирования своего ордера ">
											<i class="icon icon-mail-blue"></i>
										</button>
									</div>
								</td>
								<td class="body-row-item center ios-p">
									<div>
										<label class="checkbox-ios">
											<input type="checkbox">
											<span class="checkbox-ios-switch"></span>
										</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="history">
					<h2 class="t-m f18-l32 purple1">History</h2>
					<div class="company-philter">
						<label class="company-philter-select">
							<select class="js-example-basic-single">
								<option value="0">3D Printing</option>
								<option value="1">Advertising</option>
								<option value="2">Aerospace</option>
								<option value="3">Analytics/Big Data</option>
							</select>
						</label>
						<label class="company-philter-select">
							<select class="js-example-basic-single">
								<option value="0">
									< $500M</option>
								<option value="1">$500M - $1B</option>
								<option value="2">$1B - $5B</option>
								<option value="3">$5B +</option>
							</select>
						</label>
						<button class="company-philter-btn" type="button">
							Clear filters
							<i class="icon icon-close-green"></i>
						</button>
					</div>
					<div class="table-wrapper">
						<table class="color-t table">
							<thead class="table-head">
								<tr class="head-row">
									<th class="head-row-item">
										<div>
											#
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Date
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Company
										</div>
									</th>
									<th class="head-row-item">
										<div></div>
									</th>
									<th class="head-row-item">
										<div>
											Valuation
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Volume
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Share price
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Number of shares
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Share type
										</div>
									</th>
									<th class="head-row-item">
										<div>
											Deal Structure
										</div>
									</th>
									<th class="head-row-item">
										<div></div>
									</th>
									<th class="head-row-item">
										<div></div>
									</th>
									<th class="head-row-item">
										<div></div>
									</th>
								</tr>
							</thead>
							<tbody class="table-body">
								<tr class="body-row bid">
									<td class="body-row-item">
										<div>
											1
										</div>
									</td>
									<td class="body-row-item">
										<div>
											01/01/22
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Company name
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Аsk
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Text
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Text
										</div>
									</td>
									<td class="body-row-item center">
										<div>
											<button class="reset-btn" type="button" data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
												<i class="tree-dots"></i>
											</button>
										</div>
									</td>
									<td class="body-row-item center">
										<div>
											<button class="reset-btn" type="button" data-tippy-content="Подсказка о возможности редактирования своего ордера ">
												<i class="icon icon-pen-blue"></i>
											</button>
										</div>
									</td>
									<td class="body-row-item center ios-p">
										<div>
											<label class="checkbox-ios">
												<input type="checkbox">
												<span class="checkbox-ios-switch"></span>
											</label>
										</div>
									</td>
								</tr>
								<tr class="body-row">
									<td class="body-row-item">
										<div>
											2
										</div>
									</td>
									<td class="body-row-item">
										<div>
											01/01/22
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Company name
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Ask
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											0000000000
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Text
										</div>
									</td>
									<td class="body-row-item">
										<div>
											Text
										</div>
									</td>
									<td class="body-row-item center">
										<div>
											<button class="reset-btn" data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач." type="button">
												<i class="tree-dots"></i>
											</button>
										</div>
									</td>
									<td class="body-row-item center">
										<div>
											<button class="reset-btn icons" data-tippy-content="Подсказка о возможности редактирования своего ордера " type="button">
												<i class="icon icon-mail-blue"></i>
											</button>
										</div>
									</td>
									<td class="body-row-item center ios-p">
										<div>
											<label class="checkbox-ios">
												<input type="checkbox">
												<span class="checkbox-ios-switch"></span>
											</label>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@include('lc.layouts.one-company.finance')
		</div>
	</div>
</section>
@endsection
