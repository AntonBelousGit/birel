


$('.mainPage').mouseup(function (e) {
	if (!$('.container-titls').is(e.target) // если клик был не по нашему блоку
		&& $('.container-titls').has(e.target).length === 0) { // и не по его дочерним элементам
		$('.container-titls')
			.removeClass('active');
	}
});
