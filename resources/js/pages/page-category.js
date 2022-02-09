

function dropCatalog33(elem) {
	const param = $(elem).parent('.sidebar-content__box');
	if ($(param).hasClass('active')) {
		$(param)
			.removeClass('active');
		$(param)
			.children('.sidebar-content__box-container')
			.slideUp();
		$(param)
			.children('.sidebar-content__box-container')
			.children('.sidebar-content__box-container__item')
			.children('.sidebar-content__box-container__item-box')
			.slideUp();
		$(param)
			.children('.sidebar-content__box-container')
			.children('.sidebar-content__box-container__item')
			.removeClass('active');
		return;
	} else {
		$('.sidebar-content__box')
			.removeClass('active');
		$('.sidebar-content__box-container__item')
			.removeClass('active');
		$(elem)
			.siblings('.sidebar-content__box-container')
			.slideUp();
		$('.sidebar-content__box-container')
			.slideUp();
		$('.sidebar-content__box-container__item-box')
			.slideUp();
		$(param)
			.addClass('active');
		if ($(param).hasClass('active')) {
			$(param)
				.children('.sidebar-content__box-container')
				.slideDown();
		} else {
			$(param)
				.children('.sidebar-content__box-container')
				.slideUp();
		}
	}
}
function dropCatalog44(elem) {
	const param = $(elem).parent('.sidebar-content__box-container__item');
	if ($(param).hasClass('active')) {
		$(param)
			.removeClass('active');
		$(param)
			.children('.sidebar-content__box-container__item-box')
			.slideUp();
		return;
	} else {
		$('.sidebar-content__box-container__item')
			.removeClass('active');
		$(elem)
			.siblings('.sidebar-content__box-container__item-box')
			.slideUp();
		$('.sidebar-content__box-container__item-box')
			.slideUp();
		$(param)
			.addClass('active');
		if ($(param).hasClass('active')) {
			$(param)
				.children('.sidebar-content__box-container__item-box')
				.slideDown();
		} else {
			$(param)
				.children('.sidebar-content__box-container__item-box').slideUp();
		}
	}
}

if ($(window).width() <= 768) {
	$('.mobDrop-car__box').css('display', 'none');

	function dropCatalog55(elem) {
		const param = $(elem).parent('.category-page__container-sideBar2');
		if ($(param).hasClass('active')) {
			$(param)
				.removeClass('active');
			$(param)
				.children('.mobDrop-car__box')
				.slideUp();
			return;
		} else {
			$(param)
				.addClass('active');
			if ($(param).hasClass('active')) {
				$(param)
					.children('.mobDrop-car__box')
					.slideDown();
			} else {
				$(param)
					.children('.mobDrop-car__box')
					.slideUp();
			}
		}
	}

	$(document).mouseup(function (e) {
		if (!$('.category-page__container-sideBar2').is(e.target) // если клик был не по нашему блоку
			&& $('.category-page__container-sideBar2').has(e.target).length === 0) {
			$('.mobDrop-car__box').slideUp();
			$('.category-page__container-sideBar2').removeClass('active');
		}
	});
}