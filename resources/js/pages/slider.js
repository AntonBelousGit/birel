$(document).ready(function () {
	/*--- слайдер на карточке товара ---*/
	$('.tovar-for').slick({
		autoplay: true,
		autoplaySpeed: 400000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		dotsClass: "my-dots-bot",
		fade: false,
		asNavFor: '.tovar-nav',
	});
	$('.tovar-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		vertical: true,
		asNavFor: '.tovar-for',
		focusOnSelect: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 769,
				settings: {
					vertical: false,
				}
			}
		]
	});
	$('.slider__popUp').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		nextArrow: '<div class="nextArrow"></div>',
		prevArrow: '<div class="prevArrow"></div>',
		//asNavFor: '.tovar-nav',
	});
	$('.slider-banners').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		//autoplay: true,
		autoplaySpeed: 4000,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	});
	// скрыть/раскрыть текст
	$('.full-btn').click(function () {
		$('.bot-cont__text').toggleClass('active');
		$('.full-btn').css('display', 'none');
	})
	// скрыть/раскрыть текст
	//скрыть раскрыть текст в ответе

	$('[data-fancybox="gallery"]').fancybox({
		// Options will go here
	});
});