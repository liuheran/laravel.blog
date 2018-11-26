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
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts(
    [
        'js/jquery.js',
        'js/bootstrap.js',
        'js/jquery.dataTables.js',
        'js/dataTables.bootstrap.js'
    ],
    'public/assets/js/admin.js',
    'resources/assets'
);

// 编译 Less
mix.less('admin.less', 'public/assets/css/admin.css');