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

mix.js('resources/assets/js/app.js', 'public/js')
    .mix.js('resources/assets/js/modal.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .mix.copy('resources/assets/sass/mdb.min.css', 'public/css')
    .mix.copy('resources/assets/sass/bootstrap.min.css', 'public/css')
    .mix.copy('node_modules/mdbootstrap/js/jquery-3.2.1.min.js', 'public/js')
    .mix.copy('node_modules/mdbootstrap/js/popper.min.js', 'public/js')
    .mix.copy('node_modules/mdbootstrap/js/bootstrap.min.js', 'public/js')
    .mix.copy('node_modules/mdbootstrap/js/mdb.min.js', 'public/js');



