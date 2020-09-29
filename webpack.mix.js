const mix = require('laravel-mix');

mix
    .js('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')
    .styles('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/style.css')
    .styles('resources/css/home.css', 'public/css/home.css')
