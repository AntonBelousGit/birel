import {addName, addName2, bindTabs2, calculate} from '../default/module-lc.js';

bindTabs2('#tabs_ask');
bindTabs2('#tabs_bid');



f('#tabs_bid');
f('#tabs_ask');

const items11 = document.querySelector('#share_type_bid');
const items21 = document.querySelector('#share_type_currency_bid1');
const items31 = document.querySelector('#share_type_currency_bid2');
const items41 = document.querySelector('#share_price_bid');
const items51 = document.querySelector('#share_number_bid');
const items61 = document.querySelector('#volume_bid');
const items71 = document.querySelector('#share_type_bid2');
const items81 = document.querySelector('#volume_bid2');
const items91 = document.querySelector('#share_number_bid2');
const items101 = document.querySelector('#btn_calc_bid');
const items1 = document.querySelector('#share_type_ask');
const items2 = document.querySelector('#share_type_currency_ask1');
const items3 = document.querySelector('#share_type_currency_ask2');
const items4 = document.querySelector('#share_price_ask');
const items5 = document.querySelector('#share_number_ask');
const items6 = document.querySelector('#volume_ask');
const items7 = document.querySelector('#share_type_ask2');
const items8 = document.querySelector('#volume_ask2');
const items9 = document.querySelector('#share_number_ask2');
const items10 = document.querySelector('#btn_calc_ask');
calculate(items10,items4,items5,items6);
calculate(items101,items41,items51,items61);

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
				items7.removeAttribute("name");
				items8.removeAttribute("name");
				items71.removeAttribute("name");
				items81.removeAttribute("name");
				addName2(items6, items5, items4, items2, items3, items1);
				addName2(items61, items51, items41, items21, items31, items11);
			} else {
				items1.removeAttribute("name");
				items6.removeAttribute("name");
				items11.removeAttribute("name");
				items61.removeAttribute("name");
				addName(items8, items9, items7);
				addName(items81, items91, items71);
			}
		}
	}

	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("required");
		}
	}
}