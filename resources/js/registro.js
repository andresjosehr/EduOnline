
window.TipodeCuenta=function(tipo){

	$("#rol").val(tipo);

	$(".account-type").fadeOut(300, function(){
		$(".register_form").fadeIn( 300)
	});

}

window.RegresarRegistro=function(tipo){

	$("#rol").val(tipo);

	$(".register_form").fadeOut(300, function(){
		$(".account-type").fadeIn( 300)
	});

}


window.ExitoRegistro=function(){
	
 	$('html, body').animate({scrollTop:0}, 200, function(){
		$(".alert").addClass("d-none");
		$(".registro_success_messaje").removeClass("d-none");
		window.location.href = window.url+`/escritorio`
 	});
}