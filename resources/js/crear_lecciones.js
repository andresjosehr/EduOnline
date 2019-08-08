//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////
/////// En este archivo se abarcan todas las funciones de frontend correspondiente al CRUD de lecciones
///////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////









window.ExitoUploadImgSubLesson=function(img){


	$(".swal-overlay #create_lesson_form .img_lesson_at_create").css("background-image", "url("+window.url+"/img/lecciones_img/"+img+")")

	$(".swal-overlay #create_lesson_form #img_leccion").val(img);


	$(".swal-overlay #create_lesson_form .img_lesson_at_create_label1").hide(300, function(){
		$(".swal-overlay #create_lesson_form .img_lesson_at_create_label2").show(300)
	})
}




window.LeccionCreadaExitosamente=function(lesson){

	lesson=JSON.parse(lesson);


	$("#listado_lecciones").append($("#lesson_created").html());
	$("#listado_lecciones .new_lesson").attr("id", lesson.id)
	$("#listado_lecciones .new_lesson").attr("data-estado_leccion", lesson.estado_leccion)
	$("#listado_lecciones .new_lesson").attr("data-apertura_programada", lesson.apertura_programada)
	$("#listado_lecciones .new_lesson .btn_editar_lesson").attr("onclick", "EditarLeccion("+"'"+lesson.id+"'"+")")
	$("#listado_lecciones .new_lesson .btn_eliminar_lesson").attr("onclick", "EliminarLeccion("+"'"+lesson.id+"'"+")")
	$("#listado_lecciones .new_lesson .btn_duplicar_lesson").attr("onclick", "DuplicarLeccion("+"'"+lesson.id+"'"+")")
	$("#listado_lecciones .new_lesson .titulo_lesson").attr("onclick", "ChangeContent("+"'"+lesson.id+"'"+")")

	$("#listado_lecciones .new_lesson .titulo_lesson").text(lesson.nombre)
	if (lesson.img_leccion==null) $("#listado_lecciones .new_lesson .numero_lesson_card").css("background-image", "url("+window.url+"/img/Edu.png)")
	if (lesson.img_leccion!=null) $("#listado_lecciones .new_lesson .numero_lesson_card").css("background-image", "url("+window.url+"/img/lecciones_img/"+lesson.img_leccion+")")
	$("#listado_lecciones .new_lesson small").text("Leccion "+ $("#listado_lecciones .col-12.my-2").length );


	if (lesson.estado_leccion==1) {
		$("#listado_lecciones .new_lesson .lesson_card").removeClass("disabled_lesson")
		$("#listado_lecciones .new_lesson .icon_lesson_disabled").remove()
	}


	$("#listado_lecciones .new_lesson").show(300);
	$(".descripcion_leccion").animate({ scrollTop: $(document).height() }, 350);
	$("#listado_lecciones .new_lesson").removeClass("new_lesson");

	window.ContenidoDeClases[lesson.id]={"time":lesson.id,"blocks":[],"version":lesson.id};


	swal.close();
	swal("¡Listo!", "Leccion creada exitosamente", "success");

}

window.ChangeContent=function(id){

	$(".codex-editor__redactor").hide(600, function(){
		window.SalvarDatosEditor(id);

		$(".codex-editor__redactor").show(600)
	})

	$("#listado_lecciones .col-12.my-2").map(function(){
		$(this).removeClass("lesson_active");
	});
	$("#"+id).addClass("lesson_active");
}

window.ExitoUploadImgSubClase=function(img){

	$(".feature_leccion_img").css("background-image", "url("+window.url+"/img/lecciones_img/"+img+")");

}



window.updateConteindoLeccion= function(LeccionSeleccionada, Contenidos){
	var Data = {}

	Data["LeccionSeleccionada"]=LeccionSeleccionada;
	Data["Contenidos"]=Contenidos;

	window.AjaxRequest("POST", window.url+"/crear/lecciones/update-contenido-lecciones", Data);
	$(".loader").hide();
}


window.DuplicarLeccion=function(id){
  
  $("body").trigger("click");

  // get the last DIV which ID starts with ^= "klon"
  var $div = $('#'+id);

  // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
  var $klon = $div.clone().prop('id', 'nueva_copia' );
  $klon.hide();

  $('#'+id).after( $klon );
  $klon.show(300, function(){
  	$("body").trigger("click");
  });

  var Data={};
  Data["nombre"]=$("#"+id+" .titulo_lesson").text();

  Data["contenido"]= JSON.stringify(window.ContenidoDeClases[id]);

  Data["estado_leccion"]=$("#"+id).attr("data-estado_leccion");
  var str = $("#"+id+" .numero_lesson_card").css("background-image");
  var res = str.split('/');
  res = res[res.length-1].split('"');
  Data["img_leccion"]=res[0];
  Data["apertura_programada"]=null;
  if ($("#"+id+"").attr("data-estado_leccion")==3) Data["apertura_programada"]=$("#"+id).attr("data-apertura_programada");

   Data["Posiciones"] = {}; var i=1;
	$("#listado_lecciones .col-12.my-2").map(function(){
		Data["Posiciones"][$(this).attr("id")]=i;
		$(this).find("small").text("Leccion "+i)
		i++;
	});



  AjaxRequest("POST", window.url+"/crear/lecciones/duplicar-leccion", Data);
  $(".loader").hide();
}


window.DuplicacionExitosa=function(id){
	$("#nueva_copia").prop('id', id );

	$("#listado_lecciones #"+id+" .btn_editar_lesson").attr("onclick", "EditarLeccion("+"'"+id+"'"+")")
	$("#listado_lecciones #"+id+" .btn_eliminar_lesson").attr("onclick", "EliminarLeccion("+"'"+id+"'"+")")
	$("#listado_lecciones #"+id+" .btn_duplicar_lesson").attr("onclick", "DuplicarLeccion("+"'"+id+"'"+")")
}


window.EliminarLeccion=function(id){

	swal({
	  title: "¡Espera!",
	  text: "¿Estas seguro de eliminar esta leccion?",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {	 	

	  	$("#"+id).hide(300, function(){
			$("#"+id).remove();

			var Data = {}; var i=1;
		 	Data["LeccionEliminar"]=id;
			$("#listado_lecciones .col-12.my-2").map(function(){
				Data[$(this).attr("id")]=i;
				$(this).find("small").text("Leccion "+i)
				i++;
			});

			AjaxRequest("POST", window.url+"/crear/lecciones/eliminar-leccion", Data);
			$(".loader").hide()
			swal("¡Listo!", "Leccion eliminada exitosamente", "success");


		})

	  } else {
	    swal.close()
	  }
	});

}


window.EditarLeccion=function(id){

	const wrapper = document.createElement('div');
	wrapper.innerHTML = $(".create_lesson").html();



	swal({
	  title: "Edita tu leccion",
	  content: wrapper,
	  buttons: false,
	});

	$(function() {
		$('.swal-overlay input#apertura_programada').bootstrapMaterialDatePicker({
		  format: 'MM/DD/YYYY HH:mm',
		  shortTime: false,
		  date: true,
		  time: true,
		  monthPicker: false,
		  year: true,
		  clearButton: false,
		  nowButton: false,
		  switchOnClick: true,
		  cancelText: 'Cancel',
		});
	});
		

	$(".swal-overlay #create_lesson_form .img_lesson_at_create_label1").addClass("d-none")
	$(".swal-overlay #create_lesson_form .img_lesson_at_create_label2 div").css("background-image", $("#"+id+" .numero_lesson_card").css("background-image") );
	$(".swal-overlay #create_lesson_form .img_lesson_at_create_label2").show()
	$(".swal-overlay #create_lesson_form #nombre").val($("#"+id+" .titulo_lesson").text());
	$(".swal-overlay #create_lesson_form #estado_leccion").val($("#"+id).attr("data-estado_leccion"));

	var str = $("#"+id+" .numero_lesson_card").css("background-image");
	var res = str.split('/');
	res = res[res.length-1].split('"');

	$(".swal-overlay #create_lesson_form #img_leccion").val(res[0]);

	if ($("#"+id+"").attr("data-estado_leccion")==3) {
		$(".swal-overlay #create_lesson_form #column_apertura_programada").show()
		$(".swal-overlay #create_lesson_form #apertura_programada").val($("#"+id).attr("data-apertura_programada"))
	}

	$(".swal-overlay #create_lesson_form .btn_create_lesson").text("Editar Leccion");
	$(".swal-overlay #create_lesson_form").append("<input type='hidden' id='id' value='"+id+"'>");

	

	$(".swal-overlay #create_lesson_form .btn_create_lesson").attr("onclick", "UpdateLesson()");
}


window.UpdateLesson=function(){

	$(".is-invalid").map(function(){ $(this).removeClass("is-invalid") })
		$(".invalid-feedback").remove();
		if ( $(".swal-overlay #create_lesson_form #estado_leccion").val()!=3) $(".swal-overlay #create_lesson_form #apertura_programada").val(null);
		else {
			if ($(".swal-overlay #create_lesson_form #apertura_programada").val()==null || $(".swal-overlay #create_lesson_form #apertura_programada").val()=="") {
				$(".swal-overlay #create_lesson_form #apertura_programada").addClass("is-invalid");
        		$(".swal-overlay #create_lesson_form #apertura_programada").after('<div class="invalid-feedback">Debes Ingresar una fecha de apertura de la leccion</div>');
        		return false;
			}
		}

		if ($(".swal-overlay #create_lesson_form #nombre").val()=="" || $(".swal-overlay #create_lesson_form #nombre").val()==null) {
			$(".swal-overlay #create_lesson_form #nombre").addClass("is-invalid")
			$(".swal-overlay #create_lesson_form #nombre").after('<div class="invalid-feedback">Debes ingresar el nombre de la leccion</div>');
			return false;
		}


		if ($(".swal-overlay #create_lesson_form #estado_leccion").val()=="0" || $(".swal-overlay #create_lesson_form #estado_leccion").val()==null) {
			$(".swal-overlay #create_lesson_form #estado_leccion").addClass("is-invalid")
			$(".swal-overlay #create_lesson_form #estado_leccion").after('<div class="invalid-feedback">Debes indicar el estado de la leccion</div>');
			return false;
		}



		var Data={};
		$(".swal-overlay #create_lesson_form input[type='text'], .swal-overlay #create_lesson_form input[type='hidden'], .swal-overlay #create_lesson_form select").map(function(){
			Data[this.id]=$(this).val();
		});

		$("#listado_lecciones #"+Data.id).attr("data-estado_leccion", Data.estado_leccion)
		$("#listado_lecciones #"+Data.id).attr("data-apertura_programada", Data.apertura_programada)
		$("#listado_lecciones #"+Data.id+" .titulo_lesson").text(Data.nombre)
		if (Data.img_leccion==null) $("#listado_lecciones #"+Data.id+" .numero_lesson_card").css("background-image", "url("+window.url+"/img/Edu.png)")
		if (Data.img_leccion!=null) $("#listado_lecciones #"+Data.id+" .numero_lesson_card").css("background-image", "url("+window.url+"/img/lecciones_img/"+Data.img_leccion+")")


		if (Data.estado_leccion==1) {
			$("#listado_lecciones #"+Data.id+" .lesson_card").removeClass("disabled_lesson")
			$("#listado_lecciones #"+Data.id+" .icon_lesson_disabled").remove()
		} else{
			$("#listado_lecciones #"+Data.id+" .lesson_card").addClass("disabled_lesson")
			$("#listado_lecciones #"+Data.id).prepend('<i class="fa fa-lock icon_lesson_disabled" aria-hidden="true"></i>')
		}

		swal.close()
		swal("Listo", "Leccion Actualizada exitosamente", "success")


		AjaxRequest('POST', window.url+'/crear/lecciones/update-leccion', Data);
		$(".loader").hide();
}







	window.CreateLesson=function(){

		$(".is-invalid").map(function(){ $(this).removeClass("is-invalid") })
		$(".invalid-feedback").remove();
		if ( $(".swal-overlay #create_lesson_form #estado_leccion").val()!=3) $(".swal-overlay #create_lesson_form #apertura_programada").val(null);
		else {
			if ($(".swal-overlay #create_lesson_form #apertura_programada").val()==null || $(".swal-overlay #create_lesson_form #apertura_programada").val()=="") {
				$(".swal-overlay #create_lesson_form #apertura_programada").addClass("is-invalid");
        		$(".swal-overlay #create_lesson_form #apertura_programada").after('<div class="invalid-feedback">Debes Ingresar una fecha de apertura de la leccion</div>');
        		return false;
			}
		}

		if ($(".swal-overlay #create_lesson_form #nombre").val()=="" || $(".swal-overlay #create_lesson_form #nombre").val()==null) {
			$(".swal-overlay #create_lesson_form #nombre").addClass("is-invalid")
			$(".swal-overlay #create_lesson_form #nombre").after('<div class="invalid-feedback">Debes ingresar el nombre de la leccion</div>');
			return false;
		}


		if ($(".swal-overlay #create_lesson_form #estado_leccion").val()=="0" || $(".swal-overlay #create_lesson_form #estado_leccion").val()==null) {
			$(".swal-overlay #create_lesson_form #estado_leccion").addClass("is-invalid")
			$(".swal-overlay #create_lesson_form #estado_leccion").after('<div class="invalid-feedback">Debes indicar el estado de la leccion</div>');
			return false;
		}

		var Data={};
		$(".swal-overlay #create_lesson_form input[type='text'], .swal-overlay #create_lesson_form input[type='hidden'], .swal-overlay #create_lesson_form select").map(function(){
			Data[this.id]=$(this).val();
		})

		AjaxRequest('POST', window.url+'/crear/lecciones/crear-leccion', Data);
	}


	window.ValidateEstadoLeccionCreate=function(e){

		if (e==3) {
			$(".swal-overlay #column_apertura_programada").show(300);
		} else{
			$(".swal-overlay #column_apertura_programada").hide(300);
		}
	}

	window.ValidateDateCreateLesson=function(e){
		$(".invalid-feedback").remove();

		var today = new Date();
		var CurrentDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+" "+today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		CurrentDate = new Date(CurrentDate);

		var ConfigDate = new Date(e.value);

		if (ConfigDate<CurrentDate) {
			$(".swal-overlay #apertura_programada").addClass("is-invalid");
        	$(".swal-overlay #apertura_programada").after('<div class="invalid-feedback invalid-feedback-fechaprogramada">La fecha no puede ser anterior a la fecha actual</div>');
        	$(".swal-overlay #apertura_programada").val("");
		} else{
			$(".swal-overlay #apertura_programada").removeClass("is-invalid");
        	$(".invalid-feedback-fechaprogramada").remove('<div class="invalid-feedback">La fecha no puede ser anterior a la fecha actual</div>');
		}

		
	}

	window.AnadirLessonCreate=function(){
		const wrapper = document.createElement('div');
		wrapper.innerHTML = $(".create_lesson").html();

	  	swal({
		  title: "Introduce la informacion de la leccion",
		  content: wrapper,
		  buttons: false,
		});



		$(function() {
		  $('.swal-overlay input#apertura_programada').bootstrapMaterialDatePicker({
		    format: 'MM/DD/YYYY HH:mm',
		    shortTime: false,
		    date: true,
		    time: true,
		    monthPicker: false,
		    year: true,
		    clearButton: false,
		    nowButton: false,
		    switchOnClick: true,
		    cancelText: 'Cancel',
		  });
		});

}


window.AddFavoriteLesson=function(e){
	if ($(e).hasClass("text-secondary")) {

		$(e).removeClass("text-secondary")
		$(e).removeClass("fa-star-o");
		$(e).addClass("text-warning");
		$(e).addClass("fa-star");
	} else{
		$(e).removeClass("text-warning");
		$(e).removeClass("fa-star");
		$(e).addClass("text-secondary");
		$(e).addClass("fa-star-o");
	}
}



window.DefaultCreateLesson=function(){

	    $("body").prop("id", "body_create_lesson");

		dragula([document.querySelector('#listado_lecciones')], {
			revertOnSpill: true,
			moves: function (el, container, handle) {
			    return handle.classList.contains('move_lesson');
			}
		}).on('drop', function (el) {
			window.OrdenarLecciones()
		});

		$("html, body, main, .container, .container_child, .descripcion_leccion, .col_editor").css("height", "100%")

		var altura=Number($("body").height())-(Number($("header").height())+Number($(".feature_leccion_img").height()));

		$(".descripcion_leccion").css("max-height", altura+"px")

}

window.EliminarClase=function(){
	swal({
	  title: "¡Espera!",
	  text: "¿Estas seguro de eliminar esta clase? Toda la informacion asociada a ella sera eliminada y no podra recuperarse",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {	
	  	window.AjaxRequest("POST", window.url+"/eliminar-clase", '0');
	  } else {
	    swal.close()
	  }
	});
}

window.LeccionEliminadaExitosamente=function(){

	swal("Listo", "Clase Eliminada Exitosamente", "success");
	window.location.href = window.url+`/escritorio`


}

window.OrdenarLecciones=function(){
	var Data={};
	Data["Posiciones"] = {}; var i=1;
	$("#listado_lecciones .col-12.my-2").map(function(){
		Data["Posiciones"][$(this).attr("id")]=i;
		$(this).find("small").text("Leccion "+i)
		i++;
	});


	window.AjaxRequest("POST", window.url+"/crear/lecciones/ordenar-lecciones", Data);
	$(".loader").hide();

}


window.EliminarClaseRecursos=function(id){

	swal({
	  title: "¡Espera!",
	  text: "¿Estas seguro de eliminar esta clase? Toda la informacion asociada a ella sera eliminada y no podra recuperarse",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {	

	  	var Data={}
	  	Data["id"]=id;
	  	window.AjaxRequest("POST", window.url+"/eliminar-clase-recursos", Data);
	  	$(".loader").hide();
	  	$("#clase_"+id).hide(300, function(){
		$("#clase_"+id).remove();
		swal("Listo", "Clase eliminada satisfactoriamente", 'success')


	})
	  } else {
	    swal.close()
	  }
	});
}