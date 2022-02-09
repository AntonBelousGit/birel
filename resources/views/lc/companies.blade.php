@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="{{asset('css/pages/page-lc-company.min.css')}}">
<div class="company" id="tabs">
	<div class="company-wrapper">
		<ul class="tab-wrapper nav-tabs">
			<li class="t-m f18-l32 purple1 tab-n active">
				Подписки на компании
			</li>
			<li class="t-m f18-l32 purple1 tab-n">
				Все компании
			</li>
		</ul>
		<div class="link-wrapper">
			<a class="btn w115" href="#">
				Buy
			</a>
			<a class="btn w115" href="#">
				Sell
			</a>
		</div>
	</div>
	<div class="company-search">
		<form class="company-search-form w310" action="#">
			<input class="i-f2" type="search" placeholder="Search">
			<button class="reset-btn">
				<i class="icon icon-search"></i>
			</button>
		</form>
		<p class="company-search-text t-r f16-l24 purple2">
			You can add company если компании нет в списке .
			<a class="company-search-link" href="#">
				<i class="icon icon-green-circle-plus"></i>
			</a>
		</p>
	</div>
	<div class="company-philter">
		<div class="company-philter-select">
			<select class="js-example-basic-single">
				<option value="0">3D Printing</option>
				<option value="1">Advertising</option>
				<option value="2">Aerospace</option>
				<option value="3">Analytics/Big Data</option>
			</select>
		</div>
		<div class="company-philter-select">
			<select class="js-example-basic-single">
				<option value="0">< $500M</option>
				<option value="1">$500M - $1B</option>
				<option value="2">$1B - $5B</option>
				<option value="3">$5B +</option>
			</select>
		</div>
		<button class="company-philter-btn" type="button">
			Clear filters
			<i class="icon icon-close-green"></i>
		</button>
	</div>
	<ul class="company-list content-t active">
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/sale3.webp" type="image/webp"><img class="company-item-img" src="./img/sale3.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-add-watch active">
					<button class="btn btn-green">Add to watch list</button>
					<div class="company-item-drop">
						<p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким ордерам вы хотите получать</p>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								BID
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ASK
							</label>
						</div>
						<div class="form_radio">
							<label>
								<input type="radio" name="variant" >
								<span></span>
								ALL
							</label>
						</div>
					</div>
				</div>
			</form>
		</li>
		
		
	</ul>
	<ul class="company-list content-t">
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
		<li class="company-item">
			<a class="company-item-link" href="#">
				<picture><source srcset="./img/test.webp" type="image/webp"><img class="company-item-img" src="./img/test.png" alt=""></picture>
			</a>
			<a class="company-item-company t-sb f24-l32 purple1" href="#">Company name</a>
			<p class="company-item-tech t-r f16-l24 purple3">BioTech</p>
			<p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
			<span class="company-item-numb t-r f16-l24 purple3">40.54B</span>
			<form class="company-item-form" action="#">
				<div class="company-item-watch">
					<div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
					<button class="reset-btn">
						<i class="icon icon-trash"></i>
					</button>
				</div>
			</form>
		</li>
	
	</ul>
</div>
<script src="{{asset('js/lib/jquery.min.js')}}"></script>
<script src="{{asset('js/lib/select2.min.js')}}"></script>
<script src="{{asset('js/pages/page-lc-company.js')}}" type="module"></script>
@endsection