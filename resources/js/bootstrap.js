window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

try {
    window.Popper = require('popper.js').default;
    const jQuery=window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    //require('bootstrap-select');

    //window.objectFitImages=require('object-fit-images');
    //require('jquery.cookie');
    require('magnific-popup');
    //require('prismjs');
    //var Swiper = $.Swiper = require('swiper');
    //window.Swiper = require('swiper/js/swiper');
    require('jquery-migrate');
    //require('nouislider');
    //window.Dropzone=require('dropzone');
    //window.SmoothScroll = require('smooth-scroll');

    //const Swal = window.Swal = require('sweetalert2');

    //const flatpickr = window.flatpickr = require("flatpickr");
	//const it = require("flatpickr/dist/l10n/it.js").default.it;

} catch (e) {
    console.log(e);
}



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
