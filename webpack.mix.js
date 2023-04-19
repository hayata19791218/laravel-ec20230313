const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/common.js', 'public/js')
.sass('resources/sass/shop.scss', 'public/css/shop.css')
.sass('resources/sass/reset.scss', 'public/css/reset.css')
.sass('resources/sass/productCreate.scss', 'public/css/productCreate.css')
.sass('resources/sass/pagination.scss', 'public/css/pagination.css')
.sass('resources/sass/mycart.scss', 'public/css/mycart.css')
.sass('resources/sass/purchase.scss', 'public/css/purchase.css')
.sass('resources/sass/admin.scss', 'public/css/admin.css')
.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
