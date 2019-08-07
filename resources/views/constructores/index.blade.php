@include("header")
<main class="create">
	<div class="container mt-5 pt-md-5 mt-0">
		<div class="row row_create mt-md-5 mt-0">
			<div class="col-12" align="center">
				<h3 align="center" class="font-weight-bold mb-5">¡Crea contenido para tus alumnos!</h3>
				<div class="alert alert-success w-50 mb-5 d-none alert_modulo_creado" role="alert">
                      Modulo creado correctamente. Iniciando constructor visual...
                </div>
				<div class="row" align="center">
					<div class="col-xl-4 col-md-4 col-sm-6 mt-4 mt-sm-0">
						<a href="#" onclick="CrearRecurso(1)" class="a_card">
							<div class="card">
							  <div class="card-body">
							    <h2 class="card-title text-black">Lecciones</h2>
							    <p class="card-text">Ideal para estudio.</p>
							    <div class="mt-3">
							    	<img width="100" src="https://png.pngtree.com/svg/20161205/studies_25354.png" alt="">
							    </div>
							    <div class="mt-4">
							    	<button type="button" class="btn btn-success btn-get-started font-weight-bold">Crear</button>
							    </div>
							  </div>
							</div>
						</a>
					</div>
					<div class="col-xl-4 col-md-4 col-sm-6 mt-4 mt-sm-0">
						<a href="#" class="a_card">
							<div class="card">
							  <div class="card-body">
							    <h2 class="card-title text-black">Examen</h2>
							    <p class="card-text">Ideal para evaluar.</p>
							    <div class="mt-3">
							    	<img width="100" src="http://chittagongit.com/images/list-icon-png/list-icon-png-17.jpg" alt="">
							    </div>
							    <div class="mt-4">
							    	<button type="button" class="btn btn-success btn-get-started font-weight-bold">Crear</button>
							    </div>
							  </div>
							</div>
						</a>
					</div>
					<div class="col-xl-4 col-md-4 col-sm-12 mt-4 mt-sm-4 mt-md-0">
						<a href="#" class="a_card">
							<div class="card">
							  <div class="card-body">
							    <h2 class="card-title text-black">Juegos</h2>
							    <p class="card-text">Ideal para interactuar.</p>
							    <div class="mt-3">
							    	<img width="100" src="https://static.thenounproject.com/png/1176719-200.png" alt="">
							    </div>
							    <div class="mt-4">
							    	<button type="button" class="btn btn-success btn-get-started font-weight-bold">Crear</button>
							    </div>
							  </div>
							</div>
						</a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="carousel__background"><div class="carousel__background--circle"></div></div>
		<div class="row mt-5">
			<div class="col-12 mt-5" align="center">
				<img width="70%" src="https://ipm-cdn.kahoot.it/wp-content/uploads/2019/01/Create_TeamPack_green_w-crown-2.png" alt="">
			</div>
		</div>
	</div>
</main>


<div class="crear_select_categoria_hiden d-none">
	<div class="crear_select_categoria mx-5">
		<div>
			<a href="#" onclick="crearModuloLeccion()">
				<img src="img/discover-cards/cover/math.png" class="rounded card-topic d-none d-lg-block h-100 " alt="math">
			</a>
		</div>
		<div>
			<a href="#" onclick="crearModuloLeccion()">
				<img src="http://localhost/Temporal/Workana/EduOnline/public/img/discover-cards/cover/chemistry.png" class="rounded card-topic d-none d-lg-block h-100 " alt="math">
			</a>
		</div>
		<div>
			<a href="#" onclick="crearModuloLeccion()">
				<img src="img/discover-cards/cover/math.png" class="rounded card-topic d-none d-lg-block h-100 " alt="math">
		</div>
		</a>
		<div>
			<a href="#" onclick="crearModuloLeccion()">
				<img src="http://localhost/Temporal/Workana/EduOnline/public/img/discover-cards/cover/physical.png" class="rounded card-topic d-none d-lg-block h-100 " alt="math">
			</a>
		</div>
		<div>
			<a href="#" onclick="crearModuloLeccion()">
				<img src="http://localhost/Temporal/Workana/EduOnline/public/img/discover-cards/cover/chemistry.png" class="rounded card-topic d-none d-lg-block h-100 " alt="math">
			</a>
		</div>
	</div>
</div>


@include("footer")