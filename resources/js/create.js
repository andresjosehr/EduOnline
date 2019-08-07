window.CrearRecurso=function(){

	window.Recurso={};
	$(".create").css("filter", "blur(4px)");
	$(".carousel__background").css("top", "18rem");


	swal({
	  title: "Escribe el nombre de tu grupo de lecciones",
	  content: "input",
	  icon: "https://png.pngtree.com/svg/20161205/studies_25354.png",
	  buttons: true,
  	  dangerMode: true,
	})
	.then((value) => {
	  if (value==null) {
	  	$(".create").css("filter", "blur(0px)");
	  	swal.close();
	  } else {
	  	window.Recurso["nombre"]=value;
	  	const wrapper = document.createElement('div');
		wrapper.innerHTML = $(".crear_select_categoria_hiden").html();
	  	swal({
		  title: "Elige la categoria a la cual pertenece",
		  content: wrapper,
		  buttons: false,
		}).then((value) => {
			if (value==null) {
			  	$(".create").css("filter", "blur(0px)");
			  	swal.close();
			}
		});
		 InicializarSlideEscogerCategoria();
	  }
	});
}


window.InicializarSlideEscogerCategoria=function(){
	if ($('.crear_select_categoria.slick-initialized')[0]==undefined) {
			$('.swal-modal .crear_select_categoria').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 3,
				autoplay: false,
				slidesToScroll: 1,
				responsive: [{
						breakpoint: 1200,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							infinite: true,
							dots: false
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
	}
}


window.crearModuloLeccion=function(){

	window.Recurso["categoria"]="Matematica";

	AjaxRequest("POST", window.url+"/crear/clase", Recurso)
}

ClaseCreadaExistosamente=function(id){

	$(".row_create").removeClass("mt-md-5");
	$(".alert_modulo_creado").removeClass("d-none");
	$(".carousel__background").css("top", "20rem");
	swal.close();
	window.location="crear/lecciones/"+id;

}


			
