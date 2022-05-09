import {bindTabs2} from '../default/module-lc.js';
bindTabs2('#tabs2-tender');


$(function() {
	$('input[name="datetimes"]').daterangepicker({
		singleDatePicker: true,
		timePicker: true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'DD/MM/YYYY hh:mm A'
		},
		"buttonClasses": "btn "
	});
});