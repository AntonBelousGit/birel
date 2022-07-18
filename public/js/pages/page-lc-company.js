import {bindTabs,} from '../default/module-lc.js';

bindTabs('#tabs');


const btn_o_t = document.querySelector('.btn-open-text');

btn_o_t.addEventListener('click', () => {
	btn_o_t.parentElement.classList.toggle('open');
});

const btn_filter = document.querySelector('.company-philter-btn');

btn_filter.addEventListener('click', () => {
	const href_init = document.location.href;
	let init = href_init.split('?');
	document.location.href = init[0];
})
