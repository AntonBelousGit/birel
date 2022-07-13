import {animate, animateText, createBg,isVisible} from "../default/script.js";

const box = document.querySelector('h1.title');

const box2 = document.querySelector('.top-block svg');
const box3 = document.querySelector('.mid-block svg');
const box4 = document.querySelector('.bot-block svg');

const column = document.getElementById('f-bg');
const column2 = document.getElementById('f-bg2');

const str = 'secondary market without brokers and intermediaries.';
const widthW = window.screen.width;


window.addEventListener('scroll', showVisible);



animateText(box, str, 2000);

animate(box2, 'top', '-140px', 2000);
animate(box3, 'left', '0px', 2000);
if (widthW > 1680) {
	createBg(column, 33);
	animate(box4, 'bottom', '20px', 2000);
} else if (widthW > 1440) {
	createBg(column, 33);
	animate(box4, 'bottom', '0px', 2000);
} else if (widthW > 1280) {
	createBg(column, 33);
	animate(box4, 'bottom', '50px', 2000);
} else if (widthW > 1024) {
	createBg(column, 33);
	animate(box4, 'bottom', '140px', 2000);
} else if (widthW > 768) {
	createBg(column, 23);
} else if (widthW > 450) {
	createBg(column, 15);
} else {
	createBg(column, 10);
}

function showVisible() {
	let elem = document.querySelector('#f-bg2')

	if (isVisible(elem)) {
		if (widthW > 1440) {
			createBg(column2, 62);
		} else if (widthW > 1024) {
			createBg(column2, 62);
		} else if (widthW > 768) {
			createBg(column2, 45);
		} else if (widthW > 450) {
			createBg(column2, 30);
		} else {
			createBg(column2, 24);
		}
		window.removeEventListener('scroll', showVisible);
	}
}

showVisible();



