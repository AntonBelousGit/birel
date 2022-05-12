import {createPopUp} from './module-lc.js';

createPopUp('#message-manager-1', "#popup-1");
createPopUp('#message-manager-2', "#popup-2");
createPopUp('#f-n-b', "#popup-3");

let hamburger = document.querySelector('.header-burger');
let menu = document.querySelector('.drop-down');

createNotifications();

function createNotifications() {
	const btnHeaderNotice = document.querySelector('#h-n-b');
	const itemPopUp = document.querySelector('.notice-popup');
	const toggleNotification = () => {
		itemPopUp.classList.toggle('active');
		btnHeaderNotice.classList.toggle('active');
	};
	btnHeaderNotice.addEventListener('click', e => {
		e.stopPropagation();
		toggleNotification();
	});
	document.addEventListener('click', e => {
		let target = e.target;
		let its_popup = target === itemPopUp || itemPopUp.contains(target);
		let btnHeaderNotice = target === hamburger;
		let menu_is_active = itemPopUp.classList.contains('active');
		if (!its_popup && !btnHeaderNotice && menu_is_active) {
			toggleNotification();
		}
	});
}

const toggleMenu = () => {
	menu.classList.toggle('active');
	hamburger.classList.toggle('active');
	document.body.classList.toggle('lock');
	let i = document.querySelector("#popup-3");
	let i2 = document.querySelector("#popup-2");
	let i3 = document.querySelector("#popup-1");
	let i4 = document.querySelector(".bg-purple");
	i.classList.remove('active');
	i2.classList.remove('active');
	i3.classList.remove('active');
	i4.classList.remove('active');
}

hamburger.addEventListener('click', e => {
	e.stopPropagation();
	toggleMenu();
});

document.addEventListener('click', e => {
	let target = e.target;
	let its_menu = target === menu || menu.contains(target);
	let its_hamburger = target === hamburger;
	let menu_is_active = menu.classList.contains('active');
	if (!its_menu && !its_hamburger && menu_is_active) {
		toggleMenu();
	}
});

$(document).ready(function () {
	$('.js-example-basic-single').select2({
		theme: "my",
	});
	$('.js-example-basic-single2').select2({
		theme: "my-one-line",
	});
	$('.js-example-basic-single-no-search').select2({
		minimumResultsForSearch: -1,
		theme: "my",
	})
});

