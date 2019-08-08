@include("header");

<main>
		<div class="container_panel">
			<div class="row mt-3 d-flex justify-content-center">
				<div class="col-lg-3 p-md-0 order-3 order-lg-1">
					<div class="row justify-content-center">
						<div class="col-11 mr-lg-3 mr-xl-0 ml-md-3 ml-lg-0 col-md-5 col-lg-11 profile-header mt-3 mt-lg-0 order-1 order-md-2 order-lg-1 px-0 es_profile_menu">
							<div class="user_name mt-3 d-flex align-items-center">
								<i class="fa fa-user user_circle"></i>
								<div class="profile_name ml-3">
									<a href="perfil">
										<h5 class="text-white p-0 m-0">{{Auth::user()->nombres}}</h5>
										<h6 class="text_name p-0 m-0">{{Auth::user()->username}}</h6>
									</a>
								</div>
							</div>
							<div class="profile_information mt-3 d-flex justify-content-between">
								<span class="information-style">Plan:</span>
								<a class="text-white" href="#" target="_blank"><u class="information-style">Upgrade</u></a>
							</div>
							<div class="profile_information mt-1 d-flex justify-content-between">
								<span class="information-style">Member of:</span>
								<a class="text-white" href="#" target="_blank"><u class="information-style">Create a
										team</u></a>
							</div>
							<div class="profile_information_2 mt-3 d-flex justify-content-between">
								<span class="information-style">EduOnline created</span>
								<span class="information-style">-</span>
							</div>
							<div class="profile_information_2 mt-1 d-flex justify-content-between">
								<span class="information-style">Plays of your EduOnline
								</span>
								<span class="information-style">-</u>
							</div>
							<div class="profile_information_2 mt-1 d-flex justify-content-between">
								<span class="information-style">Total players
								</span>
								<span class="information-style">-</span>
							</div>
							<div class="profile_information_2 mt-2 d-flex justify-content-between">
								<span class="information-style">My interests</span>
								<a class="text-white" href="#" target="_blank"><u class="information-style">Add
										Interests</u></a>
							</div>
						</div>
						<div class="col-lg-12 col-md-7 row mt-3 order-2 order-md-1 order-lg-2 pb-5 pb-lg-0">
							<div class="col-lg-12 px-3 px-lg-0">
								<div class="ranking-profile-student position-relative pl-lg-3 pr-lg-3 pr-md-0 pl-md-0 mt-lg-4 mt-md-0">
									<div class="card">
										<div class="d-flex bg-blue-ranking rounded-top justify-content-between p-3">
											<span class="text-white"><i class="fa fa-bars"></i></span>
											<a href="ranking" class="font-weght-bold text-white">RANKING</a>
											<span class="text-white"><i class="fa fa-share-alt"></i></span>
										</div>
										<div class="photo-ranking text-center bg-blue-ranking px-3 pb-5">
											<img class="rounded-circle w-25" src="img/photos/1.jpg">
											<p class="small text-white">Nro 10</p>
										</div>
										<div class="ranking-1 bg-blue-ranking position-absolute top-one-ranking2 top-one-ranking">
											<div class="px-2 py-0 mb-1">
												<div class="d-flex align-items-center justify-content-between">
													<p class="small-xs py-3 font-weight-bold text-white">1</p>
													<img class="rounded-circle img-user-ranking" src="img/photos/7.jpg">
													<p class="small-xs py-3 font-weight-bold text-white">lorem impsum</p>
													<p class="small-xs py-3 font-weight-bold text-white">87236</p>
													<p class="small-xs py-3 font-weight-bold text-white"><img class="cup-student-profile-ranking" src="img/icons/cup.png"></i>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body mt-5 body-table-ranking p-2">
											<div class="border p-2 mb-1 mt-lg-4 mt-xl-0">
												<div class="d-flex align-items-center justify-content-between">
													<p class="small-xs py-3 font-weight-bold text-blue-light">2</p>
													<img class="rounded-circle img-user-ranking" src="img/photos/2.jpg">
													<p class="small-xs py-3 font-weight-bold text-blue-light">lorem impsum
													</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light">87236</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light"><i class="fa fa-star"></i></p>
												</div>
											</div>
											<div class="border p-2 mb-1">
												<div class="d-flex align-items-center justify-content-between">
													<p class="small-xs py-3 font-weight-bold text-blue-light">3</p>
													<img class="rounded-circle img-user-ranking" src="img/photos/3.jpg">
													<p class="small-xs py-3 font-weight-bold text-blue-light">lorem impsum
													</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light">87236</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light"><i class="fa fa-star"></i></p>
												</div>
											</div>
											<div class="border p-2 mb-1">
												<div class="d-flex align-items-center justify-content-between">
													<p class="small-xs py-3 font-weight-bold text-blue-light">4</p>
													<img class="rounded-circle img-user-ranking" src="img/photos/4.jpg">
													<p class="small-xs py-3 font-weight-bold text-blue-light">lorem impsum
													</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light">87236</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light"><i class="fa fa-star"></i></p>
												</div>
											</div>
											<div class="border p-2 mb-1">
												<div class="d-flex align-items-center justify-content-between">
													<p class="small-xs py-3 font-weight-bold text-blue-light">5</p>
													<img class="rounded-circle img-user-ranking" src="img/photos/5.jpg">
													<p class="small-xs py-3 font-weight-bold text-blue-light">lorem impsum
													</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light">87236</p>
													<p class="small-xs py-3 font-weight-bold text-blue-light"><i class="fa fa-star"></i></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2" align="center">
					<div class="get_started_main">
						<div class="get_started mt-3 mt-lg-0">
							<div class="progress-bar bg-green-dark p-2">
								<div class="d-flex">
									<p class="d-block text-white font-weight-bold">
										<span>Guia de Inicio</span>
									</p>
									<span class="font-weight-bold mx-2">1/3</span>
									<div class="content-bar-progress-profile">
										<div class="progress-bar__ProgressBarInner-sc-190vuq3-1 bar-progress-profile"></div>
									</div>
								</div>
							</div>
							<div class="body-step p-3">
								<div class="d-flex container p-0 justify-content-around guia_inicio_pasos">
									<div class="grid-flex w-100 text-left">
										<div class="d-flex">
											<div>
												<div class="checkList"></div>
												<div disabled class="border-number bg-white position-absolute rounded-circle text-center">
													1</div>
												<img src="http://mesuthazen.com/wp-content/themes/privado/img/avatar.png" alt="Create account" class="border-img-status rounded-circle mb-2 ml-3">
											</div>
											<div class="line-green"></div>
										</div>
										<button type="button" class="btn btn-light btn-get-started font-weight-bold btn-disabled" disabled>Crear Cuenta</button>
									</div>
									<div class="grid-flex w-100 text-center">
										<div class="d-flex">
											<div class="line-green"></div>
											<div class="">
												<div class="number-position bg-white position-absolute rounded-circle text-center text-black">
													2</div>
												<img src="https://i.pinimg.com/236x/f9/b5/6d/f9b56d9facaca35f60216cf8c1ac1a23.jpg" alt="Create quiz" class="border-img-status rounded-circle mb-2">
											</div>
											<div class="line-green"></div>
										</div>
										<button type="button" class="btn btn-light btn-get-started font-weight-bold">Create una clase</button>
									</div>
									<div class="grid-flex w-100 text-right">
										<div class="d-flex">
											<div class="line-green"></div>
											<div class="">
												<div class="number-position bg-white position-absolute rounded-circle text-center text-black">
													3</div>
												<img src="https://freerangestock.com/sample/118832/clipboard-and-checklist-vector-icon.jpg" alt="Host game" class="border-img-status rounded-circle mb-2">
											</div>
										</div>
										<button type="button" class="btn btn-light btn-get-started font-weight-bold">Examen</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-4 d-flex justify-content-center">
							<div class="col-lg-12 col-12">
								<div class="search_class text-center px-3">
									<form class="d-flex align-items-center justify-content-center">
										<input clases="pl-0" type="search" placeholder="Busca clases o profesores">
										<button type="submit" class="btn btn-info btn-login text-center font-weight-bold ml-2">Buscar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-0 pt-3">
						<div class="col-lg-12">
							<div class="container bg-white_shadows">
								<strong>
									<p class="py-2 m-0"> Profesores mejor calificados</p>
								</strong>
								<div class="row border-top ">
								</div>
								<div class="row  py-3 d-flex justify-content-center">
									<div class="col-lg-12 col-md-12 ">
										<section class="slider-area slider control-panel ">
											@for ($i = 0; $i < 4; $i++)
												<div>
													<a href="ver-perfil" class="nounderline">
														<div class="post-slide10 m-1 pb-0 border text-center">
															<img class="image_slider border" src="img/photos/11.png" alt="">
															<strong class="post-description p-0 m-0">
																Lorem ipsum
															</strong>
															<p class="post-description_subject text-uppercase m-0">
																Mátematica
															</p>
															<div class="container">
																<div class="row d-flex justify-content-center">
																	<div class="rating">
																		<input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="label_star" title="Good">1
																			stars</label>
																		<input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="label_star" title="Good">2
																			stars</label>
																		<input type="radio" id="star3" name="rating" value="3" /><label class="label_star" for="star3" title="Good">3 stars</label>
																		<input type="radio" id="star4" name="rating" value="4" /><label class="label_star" for="star4" title="Good">4 stars</label>
																		<input type="radio" id="star5" name="rating" value="5" /><label class="label_star" for="star5" title="Good">5
																			star</label>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
											@endfor	
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pt-3 mt-0 pb-4">
						<div class="col-lg-12">
							<div class="container bg-white_shadows">
								<div class="row">
									<div class="col-5 ml-2 mt-1 border_classes text-center">
										<strong>
											<p class="py-1 m-0">Últimas clases agregadas</p>
										</strong>
									</div>
									<div class="col-5 text-center">
										<strong>
											<p class="py-2 m-0">Últimas juegos agregadas</p>
										</strong>
									</div>
								</div>
								<div class="row border-bottom mb-2"></div>
								<div class="p-4">
									<div class="row border">
										<div class="col-lg-3 col-12 border pr-0 pl-0"> <img width="100%" src="img/photos/class_1.jpg" alt=""> </div>
										<div class="col-lg-9 col-12">
											<div class="row h-50">
												<div class="col-lg-12 text-left pt-2">
													<strong>Lorem ipsum dolor sit amet</strong>
												</div>
											</div>
											<div class="row h-50 bg-f2f2f2 d-flex align-items-center">
												<div class="col-lg-12 col-12 mt-lg-0 mt-2">
													<div class="row px-3 pb-lg-0 pb-3 d-flex justify-content-between ">
														<p>EduOnline</p>
														<strong>30.7k plays
														</strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-4 border">
										<div class="col-lg-3 col-12 border pr-0 pl-0"> <img width="100%" src="img/photos/class_2.jpg" alt=""> </div>
										<div class="col-lg-9 col-12">
											<div class="row h-50">
												<div class="col-lg-12 text-left pt-2">
													<strong>Lorem ipsum dolor sit amet</strong>
												</div>
											</div>
											<div class="row h-50 bg-f2f2f2 d-flex align-items-center">
												<div class="col-lg-12 col-12 mt-lg-0 mt-2">
													<div class="row px-3 pb-lg-0 pb-3 d-flex justify-content-between ">
														<p>EduOnline</p>
														<strong>30.7k plays
														</strong>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-4 border">
										<div class="col-lg-3 col-12 border pr-0 pl-0"> <img width="100%" src="img/photos/class_3.jpg" alt=""> </div>
										<div class="col-lg-9 col-12">
											<div class="row h-50">
												<div class="col-lg-12 text-left  pt-2">
													<strong>Lorem ipsum dolor sit amet</strong>
												</div>
											</div>
											<div class="row h-50 bg-f2f2f2 d-flex align-items-center">
												<div class="col-lg-12 col-12 mt-lg-0 mt-2">
													<div class="row px-3  pb-lg-0 pb-3 d-flex justify-content-between ">
														<p>EduOnline</p>
														<strong>30.7k plays
														</strong>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 p-md-0 mt-lg-0 mt-0 order-2 order-lg-3">
					<div class="lastest_test border pl-3 pr-3 pt-2 pb-3 bg-white_shadows">
						<strong>
							<p class="py-2 m-0"> Últimas pruebas realizadas
							</p>
						</strong>
						<div class="row border-top mb-2">
						</div>
						<div class=" border d-flex justify-content-between ultimas_clases_shadow rounded">
							<div class="ml-2 d-flex align-items-center">
								<div class="lastest_test_done">
									<p class="numero_pruebas_presentadas">1</p>
								</div>

								<p class="small py-3 font-weight-bold ml-3">lorem impsum</p>
							</div>
							<p class="small text-blue-light mr-4 font-weight-bold py-3">Calificacion</p>
						</div>
						<div class=" border mt-2 d-flex justify-content-between ultimas_clases_shadow rounded">
							<div class="ml-2 d-flex align-items-center">
								<div class="lastest_test_done">
									<p class="numero_pruebas_presentadas">2</p>
								</div>

								<p class="small py-3 font-weight-bold ml-3">lorem impsum</p>
							</div>
							<p class="small text-blue-light mr-4 font-weight-bold py-3">Calificacion</p>
						</div>
						<div class=" border mt-2 d-flex justify-content-between ultimas_clases_shadow rounded">
							<div class="ml-2 d-flex align-items-center">
								<div class="lastest_test_done">
									<p class="numero_pruebas_presentadas">3</p>
								</div>

								<p class="small py-3 font-weight-bold ml-3">lorem impsum</p>
							</div>
							<p class="small text-blue-light mr-4 font-weight-bold py-3">Calificacion</p>
						</div>
						<div class=" border mt-2 d-flex justify-content-between ultimas_clases_shadow rounded">
							<div class="ml-2 d-flex align-items-center">
								<div class="lastest_test_done">
									<p class="numero_pruebas_presentadas">4</p>
								</div>
								<p class="small py-3 font-weight-bold ml-3">lorem impsum</p>
							</div>
							<p class="small text-blue-light mr-4 font-weight-bold py-3">Calificacion</p>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-12">
							<div class="border pl-3 pr-3 pt-2 pb-3 bg-white_shadows">
								<strong>
									<p class="py-2 m-0"> Get started with these tips
									</p>
								</strong>
								<div class="row border-top mb-2">
								</div>
								<div class=" d-flex justify-content-between">
									<div class=" pb-2 d-flex align-items-center">
										<div class="tips_get_started text-center py-2">
											<i class="fa fa-exclamation-circle text-white"></i>
										</div>
										<p class="small font-weight-bold ml-3">Tips to keep EduOnline nicknames
											appropriate for your class.
										</p>
									</div>
								</div>
								<div class="row border-top mb-2">
								</div>
								<div class=" mt-1 d-flex justify-content-between">
									<div class="pb-2 d-flex align-items-center">
										<div class="tips_get_started_2 text-center py-2">
											<i class="fa fa-thumbs-up text-white"></i>
										</div>
										<p class="small font-weight-bold ml-3">Tips to keep EduOnline nicknames
											appropriate for your class.</p>
									</div>
								</div>
								<div class="row border-top mb-2">
								</div>
								<div class=" mt-1 d-flex justify-content-between">
									<div class=" pb-2 d-flex align-items-center">
										<div class="tips_get_started_3 text-center py-2">
											<i class="fa fa-folder-open text-white"></i>
										</div>
										<p class="small font-weight-bold ml-3">7 tips to easily organize and
											navigate
											your EduOnline.</p>
									</div>
								</div>
								<div class="row border-top mb-2">
								</div>
								<div class="text-center">
									<a class="" href="#" target="_blank"><u class="information-style text-center">Read
											More</u></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
		$(document).ready(function(){
			EscritorioSlider();
			VerifyPopup();

			@if (isset($_GET["confirmacion-email"]))
				swal("¡Listo!" ,"Confirmacion de email exitosa", "success");
			@endif
		});
	</script>

@include("footer");