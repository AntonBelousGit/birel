import {bindTabs2, multiplication} from '../default/module-lc.js';

bindTabs2('#tabs_bid');
multiplication('#tabs_bid' ,'#share_price_bid','#share_number_bid','#volume_bid');

f('#tabs_bid');

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
	let items1 = document.querySelector('#volume_bid2');
	let items2 = document.querySelector('#share_number_bid2');
	let items3 = document.querySelector('#share_type_bid2');

	items1.setAttribute('name', 'volume');
	items2.setAttribute('name', 'valuation');
	items3.setAttribute('name', 'share_type');

	items1.required = true;
	items2.required = true;
	items3.required = true;
}

function addName2() {
	let items1 = document.querySelector('#volume_bid');
	let items2 = document.querySelector('#share_number_bid');
	let items3 = document.querySelector('#share_price_bid');
	let items4 = document.querySelector('#share_type_currency_bid1');
	let items5 = document.querySelector('#share_type_currency_bid2');
	let items6 = document.querySelector('#share_type_bid');

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
