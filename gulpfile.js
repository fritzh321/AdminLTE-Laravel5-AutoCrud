var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less', 'resources/css');

    mix.styles([
        'app.css',
        'AdminLTE.css',
        'skins/skin-purple.min.css'
    ]);

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'plugins/iCheck/icheck.min.js',
        'app.min.js'
    ]);

    mix.copy('resources/js/plugins/iCheck/square', 'public/js/plugins/iCheck/square');

    mix.version(['public/css/all.css', 'public/js/all.js']);


});
