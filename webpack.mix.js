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

mix.sass('resources/sass/login.scss', 'public/css');
mix.sass('resources/sass/register.scss', 'public/css');
mix.sass('resources/sass/main.scss', 'public/css');
mix.sass('resources/sass/userpanel.scss', 'public/css');
mix.sass('resources/sass/mainpage.scss', 'public/css');
