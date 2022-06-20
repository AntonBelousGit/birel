import {bindTabs2, calculate} from '../default/module-lc.js';

bindTabs2('#tabs_ask');

const share_type_ask = document.querySelector('#share_type_ask');
const share_type_currency_ask1 = document.querySelector('#share_type_currency_ask1');
const share_type_currency_ask2 = document.querySelector('#share_type_currency_ask2');
const share_price_ask = document.querySelector('#share_price_ask');
const share_number_ask = document.querySelector('#share_number_ask');
const volume_ask = document.querySelector('#volume_ask');
const share_type_ask2 = document.querySelector('#share_type_ask2');
const volume_ask2 = document.querySelector('#volume_ask2');
const share_number_ask2 = document.querySelector('#share_number_ask2');
const btn_calc_ask = document.querySelector('#btn_calc_ask');
calculate(btn_calc_ask,share_price_ask,share_number_ask,volume_ask);
f('#tabs_ask');

function formSubmission(elTabs) {
	const form = document.querySelector('#form');
	let btn = document.querySelector('#submit_orm');
	btn.addEventListener('click', e => {
		e.preventDefault();
		clearValue(elTabs);
		form.submit();
	});
	function clearValue(e) {
		for (let i = 0; i < e.length; i++) {
			let item = e[i];
			if (!item.classList.contains('active')) {
				if (e[i] === e[0]) {
					share_price_ask.removeAttribute('value');
					share_price_ask.value = null;
					share_number_ask.removeAttribute('value');
					share_number_ask.value = null;
				} else {
					share_number_ask2.removeAttribute('value');
					share_number_ask2.value = null;
				}
			} else {
			}
		}
	}
}

function f(item) {
	let items = document.querySelector(item);
	let itemsUl = items.querySelectorAll('.tab-n2');
	let itemsTabs = items.querySelectorAll('.content-t2');
	for (let i = 0; i < itemsUl.length; i++) {
		const titleEl = itemsUl[i];
		titleEl.addEventListener('click', e => {
			clearName(itemsTabs);
			formSubmission(itemsTabs);
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
				addName2(share_type_ask, share_number_ask, volume_ask,share_price_ask, share_type_currency_ask1, share_type_currency_ask2);
			} else {
				share_type_ask.removeAttribute("name");
				volume_ask.removeAttribute("name");
				addName(share_type_ask2, volume_ask2, share_number_ask2);
			}
		}
	}

	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("required");

		}
	}
}

function addName(share_type, volume, valuation) {
	volume.setAttribute('name', 'volume');
	valuation.setAttribute('name', 'valuation');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	valuation.required = true;
	share_type.required = true;
}

function addName2(share_type,share_number, volume,  share_price, share_type_currency1, share_type_currency2) {
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