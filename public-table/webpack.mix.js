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


// start artisan serve
require('laravel-mix-serve');
mix.serve();



/*
Automatische Ordnerwahl
Source: Root Verzeichniss
Destination: public Ordner
 */
mix.sass('resources/sass/app.sass', '/app.css')
    .sourceMaps();

mix.ts('resources/ts/app.ts', '/app.js')
    .sourceMaps();

// Tailwind expanded without sass
/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);
*/

 // Auto-Reload
mix.browserSync('localhost:8000')
