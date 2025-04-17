let mix = require('laravel-mix');
require('dotenv').config(
    {
      path:__dirname+'/../../../../.env'
    }
);

require('laravel-mix-polyfill');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
    'popper.js/dist/popper.js': ['Popper'],
    sweetalert2:['Swal'],
    'magnific-popup':['magnificPopup'],
    moment: 'moment' // only one
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */


mix.js('resources/js/app.js', 'dist/js')
    .sass('resources/sass/app.scss', 'dist/css')
   ;

mix.setResourceRoot('../');
mix.setPublicPath('dist');


mix.extract(['vue','lodash', 'popper.js','jquery','bootstrap']);


mix.polyfill({
    enabled: true,
    useBuiltIns: "usage",
    targets: {"firefox": "50", "ie": 11}
});


var $prefix='../../../../';
var $suffix='/themes/miniblog';
var $resource_root=$prefix+$suffix;
var $public_path=$prefix+process.env.MIX_PUBLIC_FOLDER+$suffix;

console.log('public_path :'+$public_path);
console.log('dirname :'+__dirname);
$res=mix.copyDirectory(__dirname+'/dist', $public_path+'/dist');


