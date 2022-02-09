

function dropCatalog2(elem) {
	const tmp_elem = $(elem).siblings('.content__non');
	if ($(tmp_elem).hasClass('active')) {
		$(tmp_elem).removeClass('active');
		$(tmp_elem).slideUp();
		$('.pointer').removeClass('active');
		return;
	}
	$('.pointer').removeClass('active');
	$('.content__non').removeClass('active').slideUp();
	$(elem).toggleClass('active');
	$(tmp_elem).toggleClass('active');
	if ($(elem).siblings('.content__non').hasClass('active')) {
		$(elem).siblings('.content__non').slideDown();
	} else {
		$(elem).siblings('.content__non').slideUp();
	}
}
function dropCatalog(elem) {
	$(elem).addClass('active');
	const item = $(elem).parent('.item__bot')
		.siblings('.item__reviews-box');
	if ($(item).hasClass('active')) {
		$(item).removeClass('active');
		$(item).slideUp();
		$(elem).removeClass('active');
		return;
	}
	$(item).addClass('active');
	if ($(elem).parent('.item__bot')
		.siblings('.item__reviews-box')
		.hasClass('active')) {
		$(item).slideDown()
	} else {
		$(item).slideUp();
	}
}
if ($(window).width() <= 1024) {
	$('.wraper').css('display', 'none');

	function dropCatalog3(elem) {
		$(elem).toggleClass('active');
		const tmp_elem = $(elem).siblings('.wraper');
		if ($(tmp_elem).hasClass('active')) {
			$(tmp_elem).removeClass('active');
			$(tmp_elem).slideUp();
			return;
		}
		$('.wraper').removeClass('active').slideDown();
		$(tmp_elem).toggleClass('active');
		if ($(elem).find('.wraper').hasClass('active')) {
			$(elem).find('.wraper').slideDown();
		} else {
			$(elem).find('.wraper').slideUp();
		}
	};
}

if ($(window).width() <= 768) {
	$('.params').css('display', 'none');

	function dropCatalog4(elem) {
		const tmp_elem = $(elem).siblings('.params');
		if ($(tmp_elem).hasClass('active')) {
			$(tmp_elem).removeClass('active');
			$(tmp_elem).slideUp();
			$('.pointer-B').removeClass('active');
			return;
		}
		$('.pointer-B').removeClass('active');
		$('.params').removeClass('active').slideUp();
		$(elem).toggleClass('active');
		$(tmp_elem).toggleClass('active');
		if ($(elem).siblings('.params').hasClass('active')) {
			$(elem).siblings('.params').slideDown();
		} else {
			$(elem).siblings('.params').slideUp();
		}
	};

}