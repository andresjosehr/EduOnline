window.ErrorLogin=function(){

	$(".alert").addClass("d-none");
	$(".login_failed_messaje").removeClass("d-none");
}


window.ExitoLogin=function(){

	$(".alert").addClass("d-none");
	$(".login_success_messaje").removeClass("d-none");

	window.location.href = window.url+`/escritorio`;

}