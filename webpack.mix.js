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

mix.styles([
    'public/css/form.css',
    'public/css/master.css',
    'public/fonts/font-face.css',
], 'public/css/all-admin.css')
    .scripts([
        'public/js/libs/jquery.min.js',
        'public/js/libs/bootstrap.min.js',
        'public/js/libs/pace.min.js',
        'public/js/libs/Chart.min.js',
        'public/js/app.js',
        'public/js/views/main.js',
    ], 'public/js/all-admin.js')
mix.js('resources/js/app.js', 'public/js')


