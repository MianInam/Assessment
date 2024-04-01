const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

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
    .vue()
    .webpackConfig({
        plugins: [
            new BrowserSyncPlugin({
                proxy: 'http://127.0.0.1:8000',
                port: 3000,
                open: false,
                files: [
                    'resources/views/**/*.php',
                    'app/**/*.php',
                    'public/**/*.*'
                ]
            })
        ]
    });
