
window.$ = window.jQuery = require('jquery');
require('./bootstrap');

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

require('./site.js');
