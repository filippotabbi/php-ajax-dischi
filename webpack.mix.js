let mix = require('laravel-mix');

mix.js('./src/js/main.js', '../dist/js')
mix.sass('./src/scss/master.scss', './dist/css');
mix.options({ processCssUrls: false});
