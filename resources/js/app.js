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
require('./../../node_modules/sweetalert/dist/sweetalert.min.js');
require('./../../node_modules/material-icons/css/material-icons.scss');
require('./../../node_modules/material-icons/iconfont/material-icons.scss');
require('./../../node_modules/daemonite-material/js/material');
require('./../../node_modules/jquery-ui/');

$(document).ready(function(){
		window.moment = require('./../vendor/moment');
		require('./../../node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker');		
})




require('./editor');
require('./cambiar_pass');
require('./crear_lecciones');
require('./template');
require('./login');
require('./perfil');
require('./general');
require('./escritorio');
require('./reset_password');
require('./registro');
require('./create');
require('./ajax_request');

window.dragula = require('./../../node_modules/dragula/dist/dragula.min.js');

