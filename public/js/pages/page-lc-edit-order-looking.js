import {bindTabs2} from '../default/module-lc.js';

bindTabs2('#tabs_looking');

const items111 = document.querySelector('#share_type_looking');
const items211 = document.querySelector('#share_number_looking');
const items311 = document.querySelector('#share_type_looking2');
const items411 = document.querySelector('#volume_looking');
console.log(items111,items211,items311,items411);
f('#tabs_looking');

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
					items211.removeAttribute('value');
					items211.value = null;
				} else {
					items411.removeAttribute('value');
					items411.value = null;
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
				items311.removeAttribute("name");
				items411.removeAttribute("name");
				addName2(items111, items211);
			} else {
				items111.removeAttribute("name");
				items211.removeAttribute("name");
				addName(items311, items411);
			}
		}
	}

	function deleteName(e) {
		for (let i = 0; i < e.length; i++) {
			e[i].removeAttribute("required");
			// e[i].removeAttribute("name");

		}
	}
}
function addName( share_type, volume) {
	share_type.setAttribute('name', 'share_type');
	volume.setAttribute('name', 'volume');

	volume.required = true;
	share_type.required = true;
}

function addName2(share_type, share_number) {
	share_number.setAttribute('name', 'share_number');
	share_type.setAttribute('name', 'share_type');

	share_number.required = true;
	share_type.required = true;
}