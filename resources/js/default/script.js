function dropCatalog22(elem) {
	const tmp_elem = $(elem).siblings('.auto-parts__container-item__dropList');
	if ($(elem).hasClass('active')) {
		$(elem).removeClass('active');
		$(tmp_elem).slideUp();
		return;
	} else {
		$('.auto-parts__container-item__btn').removeClass('active');
		$(elem).addClass('active');
		$('.auto-parts__container-item__dropList').removeClass('active').slideUp();
		if ($(elem).hasClass('active')) {
			$(elem).siblings('.auto-parts__container-item__dropList').slideDown();
		} else {
			$(elem).siblings('.auto-parts__container-item__dropList').slideUp();
		}
	}
}
$(document).mouseup(function (e) {
	if (!$('.auto-parts__container').is(e.target) // если клик был не по нашему блоку
		&& $('.auto-parts__container').has(e.target).length === 0) { // и не по его дочерним элементам
		$('.auto-parts__container-item__btn')
			.removeClass('active');
		$('.auto-parts__container-item__dropList').slideUp();
	}
});

// Корзина товара кнопки +1 и -1
function increment(e) {
	const button = $(e);
	const oldVal = $(e).parent().children('.iterator').val();

	function i() {
		const newVal = parseFloat(oldVal) + 1;
		return newVal;
	}

	button.parent().children('.iterator').val(i());
}

function decrement(e) {
	const button = $(e);
	const oldVal = $(e).parent().children('.iterator').val();

	function i() {
		if (oldVal > 0) {
			newVal = parseFloat(oldVal) - 1;
		} else {
			newVal = 0;
		}
		return newVal;
	}

	button.parent().children('.iterator').val(i());
}

// Корзина товара кнопки +1 и -1
// Корзина удаление елемента
function deleteItem(e) {
	$(e).parent()
		.parent()
		.remove();
}
function deleteItem2(e) {
	$(e).parent()
		.parent()
		.parent()
		.remove();
}
// Корзина удаление елемента
// прекращение ивентов

$(document).mouseup(function (e) {
	if (!$('.catalog').is(e.target) // если клик был не по нашему блоку
		&& $('.catalog').has(e.target).length === 0 &&
		!$('.drop__catalog').is(e.target) // если клик был не по нашему блоку
		&& $('.drop__catalog').has(e.target).length === 0) { // и не по его дочерним элементам
		$('.drop__catalog').removeClass('active');
		if ($('.catalog').children('i').hasClass('icon-close')) {
			$('.catalog')
				.children('i')
				.removeClass('icon-close')
				.addClass('icon-burger');
		}
	}
});

// прекращение ивентов
function openMob(e) {
	$(e).toggleClass('active');
	$(e).parent().parent().toggleClass('active');
}
$(document).ready(function () {
	if($(window).width() >= 768){
		$(".userLogin").hover(
			function () {
				$('.dropUsers').stop(true, true).slideDown('medium');
			},
			function () {
				$('.dropUsers').stop(true, true).slideUp('medium');
			}
		);
		$(".userLogin2").hover(
			function () {
				$('.dropUsers2').stop(true, true).slideDown('medium');
			},
			function () {
				$('.dropUsers2').stop(true, true).slideUp('medium');
			}
		);
	}
});


function menuUser() {
	if($(window).width() <= 768){
		$('#dropUsers').toggleClass('active');
		$('body').toggleClass('lock');
	}
}
function menuUser2() {
	if($(window).width() <= 768){
		$('#dropUser2').toggleClass('active');
		$('body').toggleClass('lock');
	}
}

// каталог на пк
function onCatalog(e) {
	if ($(e).children('i')
		.hasClass('icon-burger')) {
		$(e).children('i')
			.removeClass('icon-burger')
			.addClass('icon-close');
		$(e).siblings('.drop__catalog')
			.addClass('active');
	} else {
		$(e).children('i')
			.removeClass('icon-close')
			.addClass('icon-burger');
		$(e).siblings('.drop__catalog')
			.removeClass('active');
	}
	return;
}

function onCatalogLevel2(e) {
	$(e).siblings('.drop__catalog__level2')
		.addClass('active');
	addHeight(e);
	return;
}

function offCatalogLevel2(e) {
	$(e).parent('.drop__catalog__level2')
		.removeClass('active');
	$(e).parent()
		.parent()
		.parent()
		.css('height', 541);
	return;
}

// каталог на пк
// мобилка меню
function onMobileCatalog(e) {
	if ($(e).children('i')
		.hasClass('icon-burger')) {
		$(e).children('i')
			.removeClass('icon-burger')
			.addClass('icon-close');
		$(e).siblings('.catalog-Mobil__drop')
			.addClass('active');
		$('body').addClass('lock');
	} else if ($(e).children('i')
		.hasClass('icon-close')) {
		$(e).children('i')
			.removeClass('icon-close')
			.addClass('icon-burger');
		$(e).siblings('.catalog-Mobil__drop')
			.removeClass('active');
		$('body').removeClass('lock');
	}
	return;
}

$(document).mouseup(function (e) {
	if (!$('.catalog-Mobil').is(e.target) // если клик был не по нашему блоку
		&& $('.catalog-Mobil').has(e.target).length === 0 &&
		!$('.catalog-Mobil__drop').is(e.target) // если клик был не по нашему блоку
		&& $('.catalog-Mobil__drop').has(e.target).length === 0) { // и не по его дочерним элементам
		$('.catalog-Mobil__drop').removeClass('active');
		if ($('.catalog-Mobil').children('i').hasClass('icon-close')) {
			$('.catalog-Mobil')
				.children('i')
				.removeClass('icon-close')
				.addClass('icon-burger');
			$('body').removeClass('lock');
		}
	}
	if (!$('.sidebar-content').is(e.target) // если клик был не по нашему блоку
		&& $('.sidebar-content').has(e.target).length === 0) {
		$('.sidebar-content__box').removeClass('active');
		$('.sidebar-content__box-container').slideUp();
		$('.sidebar-content__box-container__item').removeClass('active');
		$('.sidebar-content__box-container__item-box').slideUp();
	}
	if (!$('.btn-on-mob').is(e.target) // если клик был не по нашему блоку
		&& $('.btn-on-mob').has(e.target).length === 0 &&
		!$('.catalog-Mobil__drop').is(e.target) // если клик был не по нашему блоку
		&& $('.catalog-Mobil__drop').has(e.target).length === 0) {
		$('.btn-on-mob').removeClass('active');
		$('.reviews-box-head').removeClass('active');
	}
	if (!$('.list-body-item').is(e.target) // если клик был не по нашему блоку
		&& $('.list-body-item').has(e.target).length === 0) {
		$('.list-body-item').removeClass('active');
		$('.item-content').slideUp();
	}
});
// мобилка меню


function addHeight(param) {
	const h = $(param)
		.siblings('.drop__catalog__level2')
		.height();
	const sh = h + 10;
	const nsh = sh.toString();
	$(param).parent().parent().css('height', nsh);
}
// инициализация селект 2
$('.js-example-basic-single').select2();
$('.js-example-basic-single2').select2({
	minimumResultsForSearch: Infinity,
});
// инициализация селект 2
// tabs
if ($('main').hasClass('cart-product')) {
	bindTabs('#tabs');
}
if ($('.reviews-box').hasClass('tabs')) {
	bindTabs('#tabs2');
}
if ($('.origin-catalog-sideBar').hasClass('tabs3')) {
	bindTabs('#tabs3');
}
function bindTabs(container) {
	container = $(container);

	const titles = $('.title-tab', container);
	const contents = $('.content-tabs', container);

	titles.on('click', function () {
		const index = titles.index(this);

		if (index < 0) {
			return;
		}

		titles.removeClass('active');
		contents.removeClass('active');

		titles.eq(index).addClass('active');
		contents.eq(index).addClass('active');

	});
	if (container.hasClass('reviews-box')) {
		titles.on('click', function () {
			const index = titles.index(this);
			let text = titles.eq(index).text();
			if (index < 0) {
				return;
			}
			$('.btn-on-mob').html('').append(text);
		});
	}
}

// tabs







