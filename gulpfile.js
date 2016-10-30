var gulp = require('gulp');
var sass = require('gulp-sass');
var elixir = require('laravel-elixir');
var BrowserSync = require('laravel-elixir-browsersync2');

elixir(function(mix) {
    mix.sass('./fesrc/sass/admin/main.sass','public/admin/css/admin.css');
    mix.sass('./fesrc/sass/main.sass','public/customer/css/main.css');

    BrowserSync.init();
    mix.BrowserSync({
        proxy: "http://www.test.manyhong.cn",
        notify: false
    });
});
