let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
	cleanCss: {
		level: {
			1: {
				specialComments: 'none'
			}
		}
	},
	externals: {
		jquery: 'jQuery'
	}
});


mix.js([

	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/masonry-layout/masonry.js',
	'node_modules/slick-carousel/slick/slick.js',
	'node_modules/progressbar.js/dist/progressbar.js',
	'node_modules/cookieconsent/build/cookieconsent.min.js',
	'node_modules/select2/dist/js/select2.full.min.js',
	'node_modules/countdown-js/dist/countdown.min.js',
	'node_modules/owl.carousel/dist/owl.carousel.min.js',
	'resources/assets/js/master-intern.js',
], 'public/js/master-intern.js').sass('resources/assets/sass/app.scss', 'public/css').sass('resources/assets/sass/medias.scss', 'public/css');

mix.js([

	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
	'node_modules/jquery/dist/jquery.js',
	'node_modules/masonry-layout/masonry.js',
	'node_modules/cookieconsent/build/cookieconsent.min.js',
	'node_modules/select2/dist/js/select2.full.min.js',
	'node_modules/owl.carousel/dist/owl.carousel.min.js',
	'resources/assets/js/master-home.js',
], 'public/js/master-home.js');

mix.copy('resources/assets/js/home.js', 'public/js/home.js').
copy('resources/assets/js/intern.js', 'public/js/intern.js').
copy('resources/assets/js/countdown.min.js', 'public/js/countdown.min.js').
copy('resources/assets/js/instafeed.min.js', 'public/js/instafeed.min.js').
copy('resources/assets/js/lazy.min.js', 'public/js/lazy.min.js').
copy('resources/assets/js/progressbar.min.js', 'public/js/progressbar.min.js').
copy('resources/assets/js/owl.min.js', 'public/js/owl.min.js');
mix.autoload({
	jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"],
	tether: ['window.Tether', 'Tether', 'tether'],
	cookieconsent: ['window.cookieconsent']
});