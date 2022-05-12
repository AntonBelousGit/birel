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
	const body = document.querySelector('body');
	const togglePopUp = () => {
		popup.classList.toggle('active');
		bg.classList.toggle('active');
		body.classList.toggle('lock');
	}

	const removePopUp = () => {
		popup.classList.remove('active');
		bg.classList.remove('active');
		body.classList.remove('lock');
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

function multiplication(container, prise, number, id2) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}
	const inputElem = container.querySelectorAll('.m-bid');
	const inputNumber = container.querySelector(number);
	const inputPrise = container.querySelector(prise);
	let inpRes = container.querySelector(id2);
	let res;
	for (let i = 0; i < inputElem.length; i++) {
		inputElem[i].addEventListener('input',
			function () {
				res = inputPrise.value * inputNumber.value;
				inpRes.value = res;
			})
	}
}

export {bindTabs, createPopUp, bindTabs2, multiplication};