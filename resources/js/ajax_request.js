

window.AjaxRequest=function (metodo, ruta, datos) {
	$(".loader").show();


	$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

	$.ajax({
		type: metodo,
		url: ruta,
		data: datos,
		success: function(result) {
			$(".loader").hide();
			eval(result);
		},
		error: function(e) {
			$(".loader").hide();
	        console.log("Error en la peticion");
	        console.log(e);
	    }
	});


}