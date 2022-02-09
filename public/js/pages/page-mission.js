import { animateText, createBg} from "../default/script.js";

const box = document.querySelector('h1.title');
const str = 'makes private equity flexible';
const widthW = window.screen.width;
const column = document.getElementById('f-bg3');

animateText(box, str, 3000);

if (widthW > 1440) {
	createBg(column, 28);
} else if (widthW > 1024) {
	createBg(column, 23);
} else if (widthW > 768) {
	createBg(column, 23);
} else if (widthW > 450) {
	createBg(column, 23);
} else {
	createBg(column, 10);
}