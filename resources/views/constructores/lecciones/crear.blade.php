@include("header")

<main class="create_leccion">
   <div class="container p-0 m-0 mw-100">
      <div class="row p-0 container_child mx-0 mx-lg-n2">
         <div class="col-lg-4 p-0">
         	<label class="w-100" for="img_clase">
	            <div class="feature_leccion_img" style="background-image: url({{ asset('img/lecciones_img/') }}/{{$Data['Clase']->img}})">
	            	<div class="feeature_img_lesson_overlay pt-5">
				        <p class="font-weight-bold text-white mt-5 mb-3">Cambiar Imagen destacada de la clase</p>
				        <label for="img_clase" class="feeature_img_lesson_custom-button cursor-pointer">
				        	Cambiar
				        </label>
				      </div>
	            </div>
            </label>
            <input onchange='AjaxFileRequest("POST", "{{Request::root()}}/crear/lecciones/subir-foto-clase", "img_clase")' type="file" class="d-none" id="img_clase">
            <div class="descripcion_leccion p-3 ml-3">
               <div class="row">
                  <div class="col-12">
                     <h4 class="font-weight-bold">{{$Data["Clase"]->nombre}}</h4>
                  </div>
                  <div class="col-6 my-3">
                     <button onclick="window.SalvarDatosEditor(window.LeccionSeleccionada); swal('¡Listo!', 'Clase guardada exisitosamente', 'success')" type="button" class="btn btn-success btn-get-started font-weight-bold btn_constructor_leccion">Guardar</button>
                  </div>
                  <div class="col-6 my-3" align="right">
                     <i onclick="AddFavoriteLesson(this)" class="fa fa-star-o mx-2 text-secondary icon_create cursor-pointer"></i>
                     <a href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                     <i class="fa fa-ellipsis-v mx-2 text-secondary icon_create"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right mt-3 w-auto p-0 menu_leccion_create" aria-labelledby="dropdownMenuButton2" style="width: 200px !important">
                        <div class="row">
                           <div class="col-12">
                              <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                              <i class="fa fa-eye pr-3 menu_leccion_icon"></i> Visualizar</a>
                           </div>
                           <div class="col-12">
                              <a onclick="EliminarClase()" class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                              <i class="fa fa-trash-o pr-3 menu_leccion_icon"></i>
                              Eliminar</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 my-3">
                     <h5 class="font-weight-bold">Lecciones publica</h5>
                     <p>Todas las lecciones seran de acceso libre</p>
                  </div>
                  <div class="col-12 my-3">
                     <span class="mr-2">
                     <span class="font-weight-bold">0</span>
                     <span>Favoritos</span>
                     </span>
                     <span class="mx-2">
                     <span class="font-weight-bold">0</span>
                     <span>Visitas</span>
                     </span>
                     <span class="mx-2">
                     <span class="font-weight-bold">0</span>
                     <span>Reseñas</span>
                     </span>
                  </div>
                  <div class="col-2 my-3 pr-2">
                     <img width="100%" src="{{ asset('img/fotos_perfil/Edu.png') }}" alt="">
                  </div>
                  <div class="col-10 px-0 mt-lg-n2">
                     <div class="mt-4">
                        <p class="font-weight-bold profile_inf_leccion_create1 mb-0">{{Auth::user()->username}}</p>
                        <p class=" profile_inf_leccion_create2">Fecha de creacion: {{$Data["Clase"]->created_at}}</p>
                     </div>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row">
                  <div class="col-12 my-2">
                     <h3 class="font-weight-bold">Lista de lecciones</h3>
                  </div>
               </div>
               <div class="row" id="listado_lecciones">
                  @php $ClaseActive='lesson_active' @endphp
                  @foreach ($Data["Clase"]->Lecciones as $Leccion)
                     <div class="col-12 my-2 {{$ClaseActive}}" id='{{$Leccion->id}}' data-estado_leccion='{{$Leccion->estado}}' data-apertura_programada='{{$Leccion->fecha_apertura}}' data-contenido='{{$Leccion->contenido}}'>
                        @php $ClaseActive='' @endphp
                        @if ($Leccion->estado!=1)
                           <i class="fa fa-lock icon_lesson_disabled" aria-hidden="true"></i>
                        @endif
                     <div class="ml-4 lesson_card @if ($Leccion->estado!=1) disabled_lesson @endif">
                        <div class="row ">
                           <div class="col-4 p-0 numero_lesson_card" style="background-image: url({{ asset('img/lecciones_img') }}/{{$Leccion->img}})"></div>
                           <div class="col-7 p-2">
                              <small>Leccion {{$Leccion->orden}}</small>
                              <h4 onclick="ChangeContent('{{$Leccion->id}}')" class="font-weight-bold titulo_lesson cursor-pointer">{{$Leccion->nombre}}</h4>
                           </div>
                           <div class='col-1 pt-2 pl-0' align="center">
                              <a href="#" id="5asd4f5sdf" data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v text-secondary icon_create"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right mt-3 w-auto p-0 menu_leccion_create" aria-labelledby="5asd4f5sdf" style="width: 200px !important">
                                 <div class="row">
                                    <div class="col-12">
                                       <a onclick="EditarLeccion('{{$Leccion->id}}')" class="btn_editar_lesson dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                                       <i class="fa fa-pencil pr-3 menu_leccion_icon"></i> Editar</a>
                                    </div>
                                    <div class="col-12">
                                       <a onclick="DuplicarLeccion('{{$Leccion->id}}')" class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion btn_duplicar_lesson" href="#">
                                       <i class="fa fa-copy pr-3 menu_leccion_icon"></i>
                                       Duplicar</a>
                                    </div>
                                    <div class="col-12">
                                       <a onclick="EliminarLeccion('{{$Leccion->id}}')" class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion btn_eliminar_lesson" href="#">
                                       <i class="fa fa-trash-o pr-3 menu_leccion_icon"></i>
                                       Eliminar</a>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <i class="fa fa-arrows move_lesson" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="row">
                  <div class="col-12 my-2">
                     <div class="ml-2 lesson_card add_new_lesson_card" onclick="AnadirLessonCreate()">
                        <div class="row">
                           <div class="col-12 mt-2" align="center">
                              <i class="fa fa-plus-circle" aria-hidden="true"></i>
                              <span>Añadir leccion</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-8 py-5 col_editor px-1 px-lg-3 px-xl-5">
            <div class="div_editor">
               <div id="editorjs" class="crear_leccion px-lg-5 px-4"></div>
            </div>
         </div>
      </div>
   </div>
</main>
<div class="create_lesson d-none">
   <div class="row">
      <div class="col-12">
         <form" method="POST" id='create_lesson_form' class="pt-2">
         @csrf 
         <div class="row">
            <label for="img_lesson_create" class="w-100 img_lesson_at_create_label1">
               <div class="col-12 mb-2">
                  <div class="lesson_card add_new_lesson_card">
                     <div class="row">
                        <div class="col-12 mt-2" align="center">
                           <i class="fa fa-plus-circle" aria-hidden="true"></i>
                           <span>Añadir Imagen de leccion</span>
                        </div>
                     </div>
                  </div>
               </div>
            </label>
            <label for="img_lesson_create" class="w-100 img_lesson_at_create_label2" style="display: none">
               <div class="col-12 mb-2 img_lesson_at_create" style="background-image: url(https://images.all-free-download.com/images/graphiclarge/study_vector_6837285.jpg);">
               </div>
            </label>
            <input type="file" id='img_lesson_create' class="d-none" onchange='AjaxFileRequest("POST", "{{Request::root()}}/crear/lecciones/subir-foto-leccion", "img_lesson_create")'>
            <input type="hidden" id="img_leccion">
            <div class="col-12">
               <div class="form-group">
                  <input type="text" class="form-control" id="nombre" placeholder="&#xf02d; Nombre" required="">
               </div>
            </div>
            <div class="col-12">
               <div class="form-group">
                  <select onchange="ValidateEstadoLeccionCreate(this.value)" class="form-control" id="estado_leccion" required="">
                     <option value="0">Estado de la leccion</option>
                     <option value="1">Abierta</option>
                     <option value="2">Cerrada</option>
                     <option value="3">Apertura Programada</option>
                  </select>
               </div>
            </div>
            <div class="col-12" id="column_apertura_programada">
               <div class="form-group">
                  <div class='input-group date'>
                     <input placeholder="Ingresa la fecha de publicacion de la leccion" onchange="ValidateDateCreateLesson(this)" type='text' class="form-control" id='apertura_programada' />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <button onclick="CreateLesson()" type="button" class="col-12 btn btn-info btn-login text-center font-weight-bold login_btn_social btn_login_padding btn_create_lesson">Crear leccion</button>
         </form>	
      </div>
   </div>
</div>
<div id="lesson_created" class="d-none">
   <div class="col-12 my-2 new_lesson" style="display: none">
      <i class="fa fa-lock icon_lesson_disabled" aria-hidden="true"></i>
      <div class="ml-4 lesson_card disabled_lesson">
         <div class="row ">
            <div class="col-4 p-0 numero_lesson_card" style="background-image: url(https://us.123rf.com/450wm/dstarky/dstarky1704/dstarky170400059/75453301-ilustraci%C3%B3n-de-vector-de-port%C3%A1til-aislado-en-un-fondo-azul-con-sombra-icono-de-computadora-plana-con-pant.jpg?ver=6)"></div>
            <div class="col-7 p-2">
               <small>Leccion 4</small>
               <h4 class="font-weight-bold titulo_lesson cursor-pointer">Logica de Programacion</h4>
            </div>
            <div class='col-1 pt-2 pl-0' align="center">
               <a href="#" id="5asd4f5sdf" data-toggle="dropdown">
               <i class="fa fa-ellipsis-v text-secondary icon_create"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right mt-3 w-auto p-0 menu_leccion_create" aria-labelledby="5asd4f5sdf" style="width: 200px !important">
                  <div class="row">
                     <div class="col-12">
                        <a class="btn_editar_lesson dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                        <i class="fa fa-pencil pr-3 menu_leccion_icon"></i> Editar</a>
                     </div>
                     <div class="col-12">
                        <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion btn_duplicar_lesson" href="#">
                        <i class="fa fa-copy pr-3 menu_leccion_icon"></i>
                        Duplicar</a>
                     </div>
                     <div class="col-12">
                        <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion btn_eliminar_lesson" href="#">
                        <i class="fa fa-trash-o pr-3 menu_leccion_icon"></i>
                        Eliminar</a>
                     </div>
                  </div>
               </div>
               <br>
               <i class="fa fa-arrows move_lesson" aria-hidden="true"></i>
            </div>
         </div>
      </div>
   </div>
</div>



<style>
   .lesson_active{
         filter: drop-shadow(2px 4px 6px black);
   }
</style>
<script>
   $(document).ready(function(){ 
      window.DefaultCreateLesson();
      window.ContenidoDeClases={}
      @foreach ($Data["Clase"]->Lecciones as $Leccion)
         window.ContenidoDeClases['{{$Leccion->id}}']=JSON.parse($("#{{$Leccion->id}}").attr("data-contenido"));
      @endforeach
      @if (isset($Data["Clase"]->Lecciones[0]->id))
         window.LeccionSeleccionada='{{$Data["Clase"]->Lecciones[0]->id}}'
      @endif

      
   });
</script>


@include("footer")