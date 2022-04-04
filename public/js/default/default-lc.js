import {createPopUp} from './module-lc.js';
createPopUp('#message-manager-1', "#popup-1");
createPopUp('#message-manager-2', "#popup-2");

let hamburger = document.querySelector('.header-burger');
let menu = document.querySelector('.drop-down');

const toggleMenu = () => {
	menu.classList.toggle('active');
	hamburger.classList.toggle('active');
	document.body.classList.toggle('lock');
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

$(document).ready(function() {
	$('.js-example-basic-single').select2({
		theme: "my",
	});
	$('.js-example-basic-single2').select2({
		theme: "my-one-line",
	});
});