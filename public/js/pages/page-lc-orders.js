const btn_filter = document.querySelector('.orders-philter-btn');

btn_filter.addEventListener('click', () => {
	const href_init = document.location.href;
	let init = href_init.split('?');
	document.location.href = init[0];
})