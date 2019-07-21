
window.EmailResetNoEnviado=function(){

	$(".alert").addClass("d-none");
	$(".alert-danger").removeClass("d-none");
}



window.EmailResetEnviado=function(){

	$(".alert").addClass("d-none");
	$(".alert-success").removeClass("d-none");
}


window.ReseteoExitoso=function(){

	window.location.href = `../login/exito`
}