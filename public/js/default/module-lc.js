function bindTabs(container) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}

	const titles = container.querySelectorAll('.tab-n');
	const contents = container.querySelectorAll('.content-t ');

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
function createPopUp(btn, popup, bg = ".bg-purple") {
	if (typeof btn === 'string' && typeof popup === 'string') {
		btn = document.querySelector(btn);
		popup = document.querySelector(popup);
		bg = document.querySelector(bg);
	}
	const removeBtn = popup.firstElementChild.firstElementChild;

	const togglePopUp = () => {
		popup.classList.toggle('active');
		bg.classList.toggle('active');
	}

	const removePopUp = () => {
		popup.classList.remove('active');
		bg.classList.remove('active');
	}

	btn.addEventListener('click', e => {
		e.stopPropagation();
		togglePopUp();
	});
	removeBtn.addEventListener('click', e => {
		e.stopPropagation();
		removePopUp();
	});
	document.addEventListener('click', e => {
		let target = e.target;
		let its_popup = target === popup || popup.contains(target);
		let its_btn = target === btn;
		let popup_is_active = popup.classList.contains('active');
		let bg_is_active = bg.classList.contains('active');
		if (!its_popup && !its_btn && popup_is_active && bg_is_active) {
			togglePopUp();
		}
	});
}
export  {bindTabs, createPopUp};