var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.styles([

		'vendor/bootstrap.min.css',
		'vendor/fancybox/jquery.fancybox.css',
		'vendor/flexslider.css',
        'vendor/font-awesome-4.6.3/css/font-awesome.css',
        'vendor/form-elements.css',
        'vendor/style_form_login.css',
        'vendor/cards.css',
        'vendor/datepicker.css',
        'vendor/bootcards-desktop.min.css',
        'vendor/style.css',
        'app.css'

    ], 'public/output/final.css', 'public/css');


    mix.scripts([
    	'vendor/jquery.js',
    	'vendor/jquery.easing.1.3.js',
    	'vendor/bootstrap.min.js',
    	'vendor/jquery.fancybox.pack.js',
    	'vendor/portfolio/jquery.quicksand.js',
    	'vendor/portfolio/setting.js',
    	'vendor/jquery.flexslider.js',
    	'vendor/animate.js',
        'vendor/bootstrap-datepicker.js',
    	'vendor/custom.js'
    ], 'public/output/final.js', 'public/js')
});