"use strict";

var mix = require('laravel-mix');
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


mix.js('resources/scss/js/feed_back.js', 'public/js').js('resources/scss/js/login_register.js', 'public/js').vue().sass('resources/scss/app.scss', 'public/css').copy('resources/asset/img', 'public/img').version();