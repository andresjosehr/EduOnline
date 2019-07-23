
window.UpdatePerfilExito=function(mensaje){
$(".update_profile_success_messaje").text(mensaje);
$(".update_profile_success_messaje").removeClass("d-none");
}

window.ExitoActualizarAvatar=function(foto){


	$("#profile_avatar_up").attr("src", "img/fotos_perfil/"+foto);
}