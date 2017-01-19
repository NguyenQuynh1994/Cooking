const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    mix.styles('layout.css')
       .sass('app.scss')
       .webpack('app.js')
       .scripts('angularjs/app.js', 'public/angularjs/app.js')
       .scripts('angularjs/controllers/loginCtrl.js', 'public/angularjs/controllers/loginCtrl.js')
       .scripts('angularjs/controllers/navCtrl.js', 'public/angularjs/controllers/navCtrl.js')
       .scripts('angularjs/services/user.js', 'public/angularjs/services/user.js');
});
