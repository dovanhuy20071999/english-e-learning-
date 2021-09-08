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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
/*--------CSS----------*/
mix.styles('resources/css/bootstrap.min.css','public/assets/css/bootstrap.min.css')
mix.styles('resources/css/style.css','public/assets/css/style.css')
mix.styles('resources/css/responsive.css','public/assets/css/responsive.css')
mix.styles('resources/css/jquery.mCustomScrollbar.min.css','public/assets/css/jquery.mCustomScrollbar.min.css')
mix.styles('resources/css/owl.carousel.min.css','public/assets/css/owl.carousel.min.css')
mix.styles('resources/css/owl.theme.default.min.css','public/assets/css/owl.theme.default.min.css')

mix.styles('resources/fonts/fonts/material-icon/css/material-design-iconic-font.min.css','public/assets/fonts/fonts/material-icon/css/material-design-iconic-font.min.css')
mix.styles('resources/css/auth/css/style.css','public/assets/css/auth/css/style.css')
/*--------------JS-----------*/
mix.js('resources/js/jquery.min.js','public/assets/js/jquery.min.js')
mix.js('resources/js/popper.min.js','public/assets/js/popper.min.js')
mix.js('resources/js/bootstrap.bundle.min.js','public/assets/js/bootstrap.bundle.min.js')
mix.js('resources/js/jquery-3.0.0.min.js','public/assets/js/jquery-3.0.0.min.js')
mix.js('resources/js/plugin.js','public/assets/js/plugin.js')
mix.js('resources/js/jquery.mCustomScrollbar.concat.min.js','public/assets/js/jquery.mCustomScrollbar.concat.min.js')
mix.js('resources/js/custom.js','public/assets/js/custom.js')
mix.js('resources/js/owl.carousel.js','public/assets/js/owl.carousel.js')

/*-------------Image----------*/
mix.copy('resources/image/img-1.png','public/assets/image/img-1.png')
mix.copy('resources/image/img-6.png','public/assets/image/img-6.png')
mix.copy('resources/image/img-7.png','public/assets/image/img-7.png')
mix.copy('resources/image/call-icon1.png','public/assets/image/call-icon1.png')
mix.copy('resources/image/mail-icon1.png','public/assets/image/mail-icon1.png')
mix.copy('resources/image/logo1.png','public/assets/image/logo1.png')
mix.copy('resources/image/en.png','public/assets/image/en.png')
mix.copy('resources/image/vn.png','public/assets/image/vn.png')
mix.copy('resources/image/search-icon.png','public/assets/image/search-icon.png')
mix.copy('resources/image/family.jpg','public/assets/image/family.jpg')
mix.copy('resources/image/animal.jpg','public/assets/image/animal.jpg')
mix.copy('resources/image/job.jpg','public/assets/image/job.jpg')
mix.copy('resources/image/fruit.jpg','public/assets/image/fruit.jpg')
mix.copy('resources/image/signup-image.jpg','public/assets/image/signup-image.jpg')
mix.copy('resources/image/signin-image.jpg','public/assets/image/signin-image.jpg')
mix.copy('resources/image/banner-bg.png','public/assets/image/banner-bg.png')