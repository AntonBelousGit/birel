import {bindTabs,} from '../default/module-lc.js';


bindTabs('#tabs');

function bindTabs2(container) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}

	const titles = container.querySelectorAll('.tab-n2');
	const contents = container.querySelectorAll('.content-t2');

	for (let i = 0; i < titles.length; i++) {
		const titleEl = titles[i];
		titleEl.addEventListener('click', () => {
			deactivate(titles);
			deactivate(contents);
			titles[i].classList.add('active');
			contents[i].classList.add('active');
		});
	}

	function deactivate(elements) {
		for (let i = 0; i < elements.length; i++) {
			const element = elements[i];
			element.classList.remove('active');
		}
	}
}
bindTabs2('#tabs2');
bindTabs2('#tabs2-bid');
bindTabs2('#tabs2-looking');
bindTabs2('#tabs2-tender');

$(function() {
	$('input[name="datetimes"]').daterangepicker({
		singleDatePicker: true,
		timePicker: true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'DD/MM/YYYY hh:mm A'
		},
		"buttonClasses": "btn "
	});
});