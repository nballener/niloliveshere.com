var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass('mytheme.scss', 'public/css/mytheme.css')
        .copy('resources/assets/img/banner-001.jpg', 'public/img/banner.jpg')
        .copy('bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy('bower_components/uikit/js', 'public/js')
        .copy('bower_components/uikit/css', 'public/css')
        .copy('bower_components/uikit/fonts', 'public/fonts');
});
