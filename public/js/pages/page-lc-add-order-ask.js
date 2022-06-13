import {addName, addName2, bindTabs2, calculate} from '../default/module-lc.js';

bindTabs2('#tabs_ask');

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
f('#tabs_ask');

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



