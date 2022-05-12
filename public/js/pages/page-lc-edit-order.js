import {bindTabs2, multiplication} from '../default/module-lc.js';

bindTabs2('#tabs_bid');
multiplication('#tabs_bid', '#share_price_bid', '#share_number_bid', '#volume_bid');


const items1 = document.querySelector('#share_type_bid');
const items2 = document.querySelector('#share_type_currency_bid1');
const items3 = document.querySelector('#share_type_currency_bid2');
const items4 = document.querySelector('#share_price_bid');
const items5 = document.querySelector('#share_number_bid');
const items6 = document.querySelector('#volume_bid');
const items7 = document.querySelector('#share_type_bid2');
const items8 = document.querySelector('#volume_bid2');
const items9 = document.querySelector('#share_number_bid2');

f('#tabs_bid');

function formSubmission(elTabs) {
	const form = document.querySelector('#form');
	let btn = document.querySelector('#submit_orm');
	btn.addEventListener('click', e => {
		e.preventDefault();
		clearValue(elTabs);
		// form.submit();
	});

	function clearValue(e) {
		for (let i = 0; i < e.length; i++) {
			let item = e[i];
			if (!item.classList.contains('active')) {
				if (e[i] === e[0]) {
					items4.removeAttribute('value');
					items5.removeAttribute('value');
				} else {
					items9.removeAttribute('value');
				}
			} else {
				return;
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
				items7.removeAttribute("name");
				items8.removeAttribute("name");
				addName2(items6, items5, items4, items2, items3, items1);
			} else {
				items1.removeAttribute("name");
				items6.removeAttribute("name");
				addName(items8, items9, items7);
			}
		}
	}

	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("required");

		}
	}
}

function addName(volume, valuation, share_type) {
	volume.setAttribute('name', 'volume');
	valuation.setAttribute('name', 'valuation');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	valuation.required = true;
	share_type.required = true;
}

function addName2(volume, share_number, share_price, share_type_currency1, share_type_currency2, share_type) {
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
