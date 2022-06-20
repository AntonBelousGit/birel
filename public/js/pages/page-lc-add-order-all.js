import {bindTabs2, calculate} from '../default/module-lc.js';

bindTabs2('#tabs_ask');
bindTabs2('#tabs_bid');
bindTabs2('#tabs_looking');

f('#tabs_bid');
f('#tabs_ask');
f('#tabs_looking');
// looking
const share_type_looking1 = document.querySelector('#share_type_looking');
const share_number_looking = document.querySelector('#share_number_looking');
const share_type_looking2 = document.querySelector('#share_type_looking2');
const volume_looking = document.querySelector('#volume_looking');
// bid
const share_type_bid = document.querySelector('#share_type_bid');
const share_type_currency_bid1 = document.querySelector('#share_type_currency_bid1');
const share_type_currency_bid2 = document.querySelector('#share_type_currency_bid2');
const share_price_bid = document.querySelector('#share_price_bid');
const share_number_bid = document.querySelector('#share_number_bid');
const volume_bid = document.querySelector('#volume_bid');
const share_type_bid2 = document.querySelector('#share_type_bid2');
const volume_bid2 = document.querySelector('#volume_bid2');
const share_number_bid2 = document.querySelector('#share_number_bid2');
const btn_bid = document.querySelector('#btn_calc_bid');
// ask
const share_type_ask = document.querySelector('#share_type_ask');
const share_type_currency_ask1 = document.querySelector('#share_type_currency_ask1');
const share_type_currency_ask2 = document.querySelector('#share_type_currency_ask2');
const share_price_ask = document.querySelector('#share_price_ask');
const share_number_ask = document.querySelector('#share_number_ask');
const volume_ask = document.querySelector('#volume_ask');
const share_type_ask2 = document.querySelector('#share_type_ask2');
const volume_ask2 = document.querySelector('#volume_ask2');
const share_number_ask2 = document.querySelector('#share_number_ask2');
const btn_ask = document.querySelector('#btn_calc_ask');
calculate(btn_bid, share_price_ask, share_number_ask, volume_ask);
calculate(btn_ask,share_price_bid,share_number_bid,volume_bid);

function f(item) {
	let items = document.querySelector(item);
	let itemsUl = items.querySelectorAll('.tab-n2');
	let itemsTabs = items.querySelectorAll('.content-t2');
	for (let i = 0; i < itemsUl.length; i++) {
		const titleEl = itemsUl[i];
		titleEl.addEventListener('click', e => {
			clearName(itemsTabs);
		});
	}
}

function clearName(e) {
	for (let i = 0; i < e.length; i++) {
		let item = e[i];
		if (!item.classList.contains('active')) {
			let elementInput = item.querySelectorAll('input');
			let elementSelect = item.querySelectorAll('select');
			deleteName(elementInput);
			deleteName(elementSelect);
		} else {
			if (e[i] === e[0]) {
				share_type_ask2.removeAttribute("name");
				volume_ask2.removeAttribute("name");
				share_type_bid2.removeAttribute("name");
				volume_bid2.removeAttribute("name");
				share_type_looking2.removeAttribute("name");
				volume_looking.removeAttribute("name");
				addName31(share_type_looking1, share_number_looking);
				addName21(share_type_ask, share_number_ask, volume_ask, share_price_ask, share_type_currency_ask1, share_type_currency_ask2);
				addName12(share_type_bid, share_number_bid, volume_bid, share_price_bid, share_type_currency_bid1, share_type_currency_bid2);
			} else {
				share_type_ask.removeAttribute("name");
				volume_ask.removeAttribute("name");
				share_type_bid.removeAttribute("name");
				volume_bid.removeAttribute("name");
				share_type_looking1.removeAttribute("name");
				share_number_looking.removeAttribute("name");
				addName32(share_type_looking2, volume_looking);
				addName22(share_type_ask2, volume_ask2, share_number_ask2);
				addName11(share_type_bid2, volume_bid2, share_number_bid2);
			}
		}
	}
	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("required");
			e[i].removeAttribute("name");
		}
	}
}
function addName32(share_type, volume) {
	share_type.setAttribute('name', 'share_type');
	volume.setAttribute('name', 'volume');

	volume.required = true;
	share_type.required = true;
}
function addName31(share_type, share_number) {
	share_number.setAttribute('name', 'share_number');
	share_type.setAttribute('name', 'share_type');

	share_number.required = true;
	share_type.required = true;
}
function addName11(share_type, volume, valuation) {
	volume.setAttribute('name', 'volume');
	valuation.setAttribute('name', 'valuation');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	valuation.required = true;
	share_type.required = true;
}
function addName22(share_type, volume, valuation) {
	volume.setAttribute('name', 'volume');
	valuation.setAttribute('name', 'valuation');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	valuation.required = true;
	share_type.required = true;
}
function addName12(share_type, share_number, volume, share_price, share_type_currency1, share_type_currency2) {
	volume.setAttribute('name', 'volume');
	share_number.setAttribute('name', 'share_number');
	share_price.setAttribute('name', 'share_price');
	share_type_currency1.setAttribute('name', 'share_type_currency');
	share_type_currency2.setAttribute('name', 'share_type_currency');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	share_number.required = true;
	share_price.required = true;
	share_type_currency1.required = true;
	share_type_currency2.required = true;
	share_type.required = true;
}


function addName21(share_type, share_number, volume, share_price, share_type_currency1, share_type_currency2) {
	volume.setAttribute('name', 'volume');
	share_number.setAttribute('name', 'share_number');
	share_price.setAttribute('name', 'share_price');
	share_type_currency1.setAttribute('name', 'share_type_currency');
	share_type_currency2.setAttribute('name', 'share_type_currency');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	share_number.required = true;
	share_price.required = true;
	share_type_currency1.required = true;
	share_type_currency2.required = true;
	share_type.required = true;
}