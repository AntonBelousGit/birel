import {bindTabs,} from '../default/module-lc.js';

bindTabs('#tabs');


const btn_o_t = document.querySelector('.btn-open-text');

btn_o_t.addEventListener('click', () => {
	// console.log(btn_o_t);
	btn_o_t.parentElement.classList.toggle('open');
});

const btn_filter = document.querySelector('.company-philter-btn');

btn_filter.addEventListener('click', () => {
	document.location.href = 'https://birel.speedshop.pp.ua/companies';
})
