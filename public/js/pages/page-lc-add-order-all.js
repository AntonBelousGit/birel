import {bindTabs2} from '../default/module-lc.js';

bindTabs2('#tabs2-bid');
bindTabs2('#tabs2');



f('#tabs2');
f('#tabs2-bid');
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
		}
	}
}

function addName() {
	let items1 = document.querySelector('#volume2-bid');
	let items2 = document.querySelector('#share_number2-bid');
	let items3 = document.querySelector('#share_type2-bid');

	items1.setAttribute('name', 'volume');
	items2.setAttribute('name', 'valuation');
	items3.setAttribute('name', 'share_type');
}

function addName2() {
	let items1 = document.querySelector('#volume-bid');
	let items2 = document.querySelector('#share_number-bid');
	let items3 = document.querySelector('#share_price-bid');
	let items4 = document.querySelector('#share_type_currency1');
	let items5 = document.querySelector('#share_type_currency2');
	let items6 = document.querySelector('#share_type-bid');

	items1.setAttribute('name', 'volume');
	items2.setAttribute('name', 'share_number');
	items3.setAttribute('name', 'share_price');
	items4.setAttribute('name', 'share_type_currency');
	items5.setAttribute('name', 'share_type_currency');
	items6.setAttribute('name', 'share_type');
}
