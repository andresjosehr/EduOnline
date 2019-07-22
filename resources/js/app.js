/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


global.$ = global.jQuery = require('./../../node_modules/jquery/dist/jquery');

require('./../../node_modules/bootstrap/dist/js/bootstrap');
require('./../../node_modules/popper.js/dist/popper');
require('./../vendor/parsley/parsley');
require('./../vendor/slick/js/slick');
require('./../../node_modules/parsleyjs/dist/i18n/es');



require('./template');
require('./login');
require('./general');
require('./escritorio');
require('./reset_password');
require('./registro');
require('./ajax_request');

