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
import tippy from 'tippy.js'


$(document).ready(function(){








	window.AlertQuestionQuizTooltip = document.querySelector('.preguntas_miniaturas');

	tippy(window.AlertQuestionQuizTooltip, {
	  content: "Debes completar la pregunta",
	  target: ".alert_question",
	  placement: 'right', // or 'left', 'right', ...
	  arrow: true,
  	  theme: 'eduonlinealert',
	})


	window.AndirQuestionQuizTooltip = document.querySelector('#anadir_pregunta_quiz');

	tippy(window.AndirQuestionQuizTooltip, {
	  theme: 'light-border',
	  content: $("#quiz_anadir_tooltip")[0],
	  placement: 'right', // or 'left', 'right', ...
	  arrow: true,
  	  arrowType: 'round', // or 'sharp' (default)
  	  trigger: 'click', // or 'focus'
  	  interactive: true,
	});



	window.QuestionQuizTooltip = document.querySelector('.create_quiz_question_input');

	tippy(window.QuestionQuizTooltip, {
	  theme: 'eduonline',
	  arrow: true,
	  trigger: 'click', // or 'focus'
	  arrowType: 'round', // or 'sharp' (default)
	  animation: 'fade',
	  placement: 'bottom',
	  content: "Debes añadir una pregunta",
	})



	window.Resp={};
	window.Resp["1"] = document.querySelector('#input_resp_1');

	tippy(window.Resp["1"], {
	  theme: 'eduonline',
	  arrow: true,
	  trigger: 'click', // or 'focus'
	  arrowType: 'round', // or 'sharp' (default)
	  animation: 'fade',
	  placement: 'bottom',
	  content: "Debes rellenar esta respuesta",
	  interactive: true,
	})



	window.Resp["2"] = document.querySelector('#input_resp_2');

	tippy(window.Resp["2"], {
	  theme: 'eduonline',
	  arrow: true,
	  trigger: 'click', // or 'focus'
	  arrowType: 'round', // or 'sharp' (default)
	  animation: 'fade',
	  placement: 'bottom',
	  content: "Debes rellenar esta respuesta",
	})


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
require('./crear_quiz');
require('./ajax_request');

window.dragula = require('./../../node_modules/dragula/dist/dragula.min.js');

require('./bootstrap');
window.Vue = require('vue');

