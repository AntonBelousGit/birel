import {bindTabs,} from '../default/module-lc.js';


bindTabs('#tabs');

$(document).ready(function() {
	$('.js-example-basic-single').select2({
		theme: "my",
	});
	$('.js-example-basic-single2').select2({
		theme: "my-one-line",
	});
});