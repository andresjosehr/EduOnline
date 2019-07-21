

window.ValidarGeneral=function(metodo, ruta, datos, idForm){

    $("input, select").map(function(){
        $(this).removeClass("is-invalid");
    })

    $(".invalid-feedback").remove();

	if (!$('#'+idForm).parsley().isValid()) {
		$('#'+idForm).submit();
		return false;
	}

    if (datos=="") {
    	var DatosForm={};
        $('#'+idForm+' input, #'+idForm+' select').map(function(){
        	DatosForm[this.id]=this.value;
        });
        AjaxRequest(metodo, ruta, DatosForm);
    }


}



window.MostrarErrores=function(errores){

    errores=JSON.parse(errores);

    console.log(errores)

    for (var key in errores) {
        $("#"+key).addClass("is-invalid");
        $("#"+key).after('<div class="invalid-feedback">'+errores[key]+'</div>');
    }
}
        