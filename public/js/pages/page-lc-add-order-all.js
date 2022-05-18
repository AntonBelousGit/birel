// import {bindTabs2, multiplication , addName, addName2} from '../default/module-lc.js';
//
// // multiplication('#tabs_bid' ,'#share_price_bid','#share_number_bid','#volume_bid');
// // multiplication('#tabs_ask' ,'#share_price_ask','#share_number_ask','#volume_ask');
//
// bindTabs2('#tabs_bid');
// bindTabs2('#tabs_ask');
//
// f('#tabs_ask');
// f('#tabs_bid');
// function f(item) {
// 	let items = document.querySelector(item);
// 	let itemsUl = items.querySelectorAll('.tab-n2');
// 	let itemsTabs = items.querySelectorAll('.content-t2');
// 	for (let i = 0; i < itemsUl.length; i++) {
// 		const titleEl = itemsUl[i];
// 		titleEl.addEventListener('click', e => {
// 			clearName(itemsTabs);
// 		});
// 	}
// }
//
//
// function clearName(e) {
// 	for (let i = 0; i < e.length; i++) {
// 		let item = e[i];
// 		if (!item.classList.contains('active')) {
// 			let elementInput = item.querySelectorAll('input');
// 			let elementSelect = item.querySelectorAll('select');
// 			deleteName(elementInput);
// 			deleteName(elementSelect);
// 		} else {
// 			if (e[i] == e[0]) {
// 				items7.removeAttribute("name");
// 				items8.removeAttribute("name");
// 				addName2(items6, items5, items4, items2, items3, items1);
// 			} else {
// 				items1.removeAttribute("name");
// 				items6.removeAttribute("name");
// 				addName(items8, items9, items7);
// 			}
// 		}
// 	}
// 	function deleteName(e) {
// 		for (let i = 0; i < e.length; i++) {
// 			e[i].removeAttribute("name");
// 			e[i].removeAttribute("required");
// 		}
// 	}
// }


