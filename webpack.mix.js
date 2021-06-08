const mix = require('laravel-mix');

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

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.scss', 'public/css')
 .styles([
     'resources/css/dashboard.css',

     'resources/css/dashboard1.css',

 ], 'public/css/admin.css')
 .scripts([
     'resources/js/dashboard.js',
     'resources/js/dashboard1.js'
 ], 'public/js/admin.js');
 

     /*)
 ], 'public/css/admin.css')
 .scripts([
     'resources/js/dashboard.js'
 ], 'public/js/admin.js');*/])

