$(function() {
	$('#inputData').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		// minYear: 1981,
		// maxYear:2022 /*parseInt(moment().format('YYYY'),10.1)*/,
		locale: {
			format: 'DD.MM.YYYY',
			"applyLabel": "Ок",
			"cancelLabel": "Отмена",
			"fromLabel": "От",
			"toLabel": "До",
			"customRangeLabel": "Произвольный",
			"daysOfWeek": [
				"Вс",
				"Пн",
				"Вт",
				"Ср",
				"Чт",
				"Пт",
				"Сб"
			],
			"monthNames": [
				"Январь",
				"Февраль",
				"Март",
				"Апрель",
				"Май",
				"Июнь",
				"Июль",
				"Август",
				"Сентябрь",
				"Октябрь",
				"Ноябрь",
				"Декабрь"
			],
			// firstDay: 1
		}
	}, function(start, end, label) {
		console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
	});
});;

function dropDown(e) {
	$(e).parent().addClass('active');
	$(e).addClass('active');
	$(e).siblings('.item-content').slideDown();
}
function dropDown2() {
	$('.item-row  ').removeClass('active');
	$('.item-content ').slideUp();
	$('.list-body-item ').removeClass('active');
}


function closeDropDown(e) {
	$(e).parent().parent().parent().parent().removeClass('active');
	$(e).parent().parent().parent().slideUp();
	$(e).parent().parent().parent().siblings().removeClass('active');
}

function slide(e) {
	if($(e).hasClass('active')) {
		dropDown2();
	} else {
		dropDown2();
		dropDown(e);
	}
}