

function openMenuTr(container) {
	if (typeof container === 'string') {
		container = document.querySelector(container);
	}
	const btn = container.querySelectorAll('.arrow-icon-purple');
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


