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

mix.sass('resources/sass/app.sass', 'public/css')
    .sourceMaps();

mix.ts('resources/ts/app.ts', 'public/js')
    .sourceMaps();

// Tailwind expanded without sass
/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);
*/

// sync without reload, load localhost:3000
//mix.browserSync('http://127.0.0.1:8000/');
