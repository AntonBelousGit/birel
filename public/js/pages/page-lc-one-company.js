import {bindTabs,} from '../default/module-lc.js';

bindTabs('#tabs');

function openMenuTr(container) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}
	const btn = container.querySelectorAll('.body-row.visible[data-id]');
	const row = container.querySelectorAll('.visible');



	for (let i = 0; i < btn.length; i++) {
		const titleEl = btn[i];
		titleEl.addEventListener('click', () => {
			if(row[i].classList.contains('active')) {
				row[i].classList.remove('active');
			} else {
				deactivate(row);
				row[i].classList.add('active');
			}
		});
	}

	function deactivate(elements) {
		for (let i = 0; i < elements.length; i++) {
			const element = elements[i];
			element.classList.remove('active');
		}
	}
}


openMenuTr('.table-two');

tippy('[data-tippy-content]',
	{
		placement: 'left',
		arrow: true,
		theme: 'my',
		duration: 0,
		delay: [700, 500],
		dynamicTitle: true,
	});

// const btn_filter = document.querySelectorAll('.company-philter-btn')
//
// for ( let i = 0 ; i< btn_filter.length ; i++ ) {
// 	btn_filter[i].addEventListener('click', () => {
// 		const href = document.location.href;
// 		console.log(href);
// 		const back_href = href.split("?");
// 		console.log(back_href);
// 		document.location.href = 'https://birel.speedshop.pp.ua/companies';
// 	})
// }

