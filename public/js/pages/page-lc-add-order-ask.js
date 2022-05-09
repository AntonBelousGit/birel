import {bindTabs2, multiplication} from '../default/module-lc.js';

bindTabs2('#tabs_ask');

multiplication('#tabs_ask' ,'#share_price_ask','#share_number_ask','#volume_ask');

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
			if (e[i] == e[0]) {
				addName2();
			} else {
				addName();
			}
		}
	}
	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("name");
			e[i].removeAttribute("required");
		}
	}
}

function addName( ) {
	let items1 = document.querySelector('#volume_ask2');
	let items2 = document.querySelector('#share_number_ask2');
	let items3 = document.querySelector('#share_type_ask2');

	items1.setAttribute('name', 'volume');
	items2.setAttribute('name', 'valuation');
	items3.setAttribute('name', 'share_type');

	items1.required = true;
	items2.required = true;
	items3.required = true;
}

function addName2() {
	let items1 = document.querySelector('#volume_ask');
	let items2 = document.querySelector('#share_number_ask');
	let items3 = document.querySelector('#share_price_ask');
	let items4 = document.querySelector('#share_type_currency_ask1');
	let items5 = document.querySelector('#share_type_currency_ask2');
	let items6 = document.querySelector('#share_type_ask');

	items1.setAttribute('name', 'volume');
	items2.setAttribute('name', 'share_number');
	items3.setAttribute('name', 'share_price');
	items4.setAttribute('name', 'share_type_currency');
	items5.setAttribute('name', 'share_type_currency');
	items6.setAttribute('name', 'share_type');

	items1.required = true;
	items2.required = true;
	items3.required = true;
	items4.required = true;
	items5.required = true;
	items6.required = true;
}