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

function addName(share_type, volume, valuation) {
	volume.setAttribute('name', 'volume');
	valuation.setAttribute('name', 'valuation');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	valuation.required = true;
	share_type.required = true;
}

function addName2(share_type,share_number, volume,  share_price, share_type_currency1, share_type_currency2) {
	volume.setAttribute('name', 'volume');
	share_number.setAttribute('name', 'share_number');
	share_price.setAttribute('name', 'share_price');
	share_type_currency1.setAttribute('name', 'share_type_currency');
	share_type_currency2.setAttribute('name', 'share_type_currency');
	share_type.setAttribute('name', 'share_type');

	volume.required = true;
	share_number.required = true;
	share_price.required = true;
	share_type_currency1.required = true;
	share_type_currency2.required = true;
	share_type.required = true;
}
function calculate(btn,share_price,share_number,volume) {
	btn.addEventListener('click',function() {
		checkValue();
	});

	function checkValue() {
		let shareNumber = Number(share_number.value);
		let volume1 = Number(volume.value);
		let sharePrice = Number(share_price.value);
		const errorCalc = btn.nextElementSibling;
		if (volume1 !== null && volume1 !== 0 && shareNumber !== null && shareNumber !== 0 && sharePrice !== null && sharePrice !== 0) {
			errorCalc.innerText = 'No count when 3 fields are filled';
		} else if(sharePrice !== null && sharePrice !== 0 && shareNumber !== null && shareNumber !== 0) {
			errorCalc.innerText = '';
			volume.value = sharePrice * shareNumber;
		} else if (sharePrice !== null && sharePrice !== 0 && volume1 !== null && volume1 !== 0) {
			errorCalc.innerText = '';
			share_number.value =  volume1 / sharePrice;
		} else if (volume1 !== null && volume1 !== 0 && shareNumber !== null && shareNumber !== 0) {
			errorCalc.innerText = '';
			share_price.value = volume1 / shareNumber ;
		}
	}
}

export {bindTabs, createPopUp, bindTabs2, addName, addName2, calculate};