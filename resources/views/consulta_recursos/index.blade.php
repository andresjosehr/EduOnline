@include("header")

<main class="create_leccion">
   <div class="container p-0 m-0 mw-100">
      <div class="row p-0 container_child mx-0 mx-lg-n2">
         <div class="col-lg-2 col-md-8 pt-5 pl-4 text-secondary d-lg-block recursos_sidebar">
            <div class="row my-2 recursos_sidebar_list recursos_sidebar_list_active" onclick="VerRecurso(this)">
              <div class="col-12 mt-n4 mb-3 d-block d-lg-none" align="right">
                <i onclick="hideRecursosSideBar()" class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
              </div>
              <div class="col-12 mb-4" align="center">
                  <h5 class="font-weight-bold">Mis recursos</h5>
               </div>
               <div class="col-2 pr-0" align="right">
                  <i class="fa fa-book" aria-hidden="true"></i>
               </div>
               <div class="col-10">
                  <p class="font-weight-bold">Clases</p>
               </div>
            </div>
            <div class="row my-2 recursos_sidebar_list" onclick="VerRecurso(this)">
               <div class="col-2 pr-0" align="right">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
               </div>
               <div class="col-10">
                  <p class="font-weight-bold">Examenes</p>
               </div>
            </div>
            <div class="row my-2 recursos_sidebar_list" onclick="VerRecurso(this)">
               <div class="col-2 pr-0" align="right">
                  <i class="fa fa-puzzle-piece" aria-hidden="true"></i>

               </div>
               <div class="col-10">
                  <p class="font-weight-bold">Juegos</p>
               </div>
            </div>
            <div class="row my-2 recursos_sidebar_list" onclick="VerRecurso(this)">
               <div class="col-2 pr-0" align="right">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
               </div>
               <div class="col-10">
                  <p class="font-weight-bold">Favoritos</p>
               </div>
            </div>
         </div>
         <div class="col-lg-10 col-md-12 py-5 col_editor px-1 px-lg-3 px-xl-5 recursos_list hideRecursosSideBar()" >
            <div class="row px-3">
              <div class="col-2">
                <span onclick="showRecursosSideBar()">
                  <i class="fa fa-caret-right cursor-pointer recursos_btn_sidebar" aria-hidden="true"></i>
                </span>
              </div>
               <div class="col-8 mt-4 mb-3" align="center"> 
                  <div class="form-group w-100">
                     <input type="text" class="form-control recursos_search_input" placeholder="&#xf002; Buscar">
                  </div>
               </div>

               <div class="col-6 mb-4"> 
                  <p class="font-weight-bold">Mis recursos</p>
               </div>
               <div class="col-6 mb-4" align="right"> 
                  <span class="mr-3">Ordenar por: </span>
                  <a href="#" id="dropdownMenuButton2" class="recursos_orden text-dark font-weight-bold" data-toggle="dropdown">
                    <span>Nombre </span>
                    <span><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right mt-3 w-auto p-0 menu_leccion_create" aria-labelledby="dropdownMenuButton2" style="width: 200px !important">
                     <div class="row">
                        <div class="col-12" align="center">
                           <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                           Fecha</a>
                        </div>
                        <div class="col-12" align="center">
                           <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                           Nº de vistas</a>
                        </div>
                        <div class="col-12" align="center">
                           <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                           Aleatorio</a>
                        </div>
                     </div>
                  </div>




                  
               </div>

               <div class="col-12 mb-4"> 
                  <span class="font-weight-bold recursos_number">Recursos: (3)</span>
                  <a href="{{Request::root()}}/crear" class="ml-4 text-success">Crear nuevo</a>
               </div>
                @foreach ($Data["Clases"] as $Clase)
                  <div class="col-12 mb-4" id="clase_{{$Clase->id}}"> 
                  <div class="card w-100 recursos_card">
                    <div class="card-body p-0">
                      <div class="row mx-0">
                         <div class="col-3 feature_img_recurso px-0">
                           <div class="feature_img_recurso_2" style="background-image: url({{ asset('img/lecciones_img') }}/{{$Clase->img}});">
                              <p class="recurso_info_img_featura py-1 px-3 font-weight-bold d-none d-md-block" align="right">{{count($Clase->Lecciones)}} Lecciones</p>
                           </div>
                         </div>
                         <div class="col-9 px-0">
                            <div class="row pt-3 h-100 recurso_row_info_card">
                               <div class="pl-4 col-9">
                                  <h5 class="font-weight-bold ">{{$Clase->nombre}}</h5>
                                  <p class="font-weight-bold mt-n1 recurso_user">{{Auth::user()->username}}</p>
                               </div>
                               <div class="col-3 pr-4" align="right">
                                  <i onclick="AddFavoriteLesson(this)" class="fa fa-star-o mx-2 text-secondary icon_create cursor-pointer d-none d-md-inline-block"></i>
                                  <a href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v mx-2 text-secondary icon_create"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right mt-3 w-auto p-0 menu_leccion_create" aria-labelledby="dropdownMenuButton2" style="width: 200px !important">
                                     <div class="row">
                                        <div class="col-12">
                                           <a class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                                           <i class="fa fa-share-alt pr-3 menu_leccion_icon"></i>
                                           Compartir</a>
                                        </div>
                                        <div class="col-12">
                                           <a onclick="EliminarClaseRecursos({{$Clase->id}})" class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                                           <i class="fa fa-trash-o pr-3 menu_leccion_icon"></i>
                                           Eliminar</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-12 recursos_card_footer">
                                  <div class="row">
                                     <div class="col-6 mt-3 d-none d-md-block">
                                        <p class="font-weight-bold">Acceso: <span>Publico</span></p>
                                     </div>
                                     <div class="col-md-6 col-12 mt-2 recursos_div_btn_visualizar" align="right">
                                        <a href="{{URL::to('/crear/lecciones')}}/{{$Clase->id}}" class="btn btn-success btn-get-started font-weight-bold">Visualizar</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
               </div>
                @endforeach
                @if (count($Data["Clases"])<1)
                <div class="col-12 mt-5" align="center">
                  <h2 class="font-weight-bold mt-3">Aun no tienes recursos creados</h2>
                  <a href="{{URL::to('/crear')}}" class="btn btn-success btn-get-started font-weight-bold mt-2">Crear un recurso nuevo</a>
                </div>
                @endif
            </div>
         </div>
      </div>
   </div>
</main>

<script>
   window.VerRecurso=function(e){
      $(".row.my-2.recursos_sidebar_list").map(function(){
         $(this).removeClass("recursos_sidebar_list_active");
      });

      $(e).addClass("recursos_sidebar_list_active");
   }

   window.showRecursosSideBar=function(){
        $(".recursos_sidebar").animate({left:0, opacity:"show"}, 180);
        $(function() {
          $({blurRadius: 0}).animate({blurRadius: 4}, {
              duration: 180,
              easing: 'swing', // or "linear"
                               // use jQuery UI or Easing plugin for more options
              step: function() {
                  console.log(this.blurRadius);
                  $('.recursos_list').css({
                      "-webkit-filter": "blur("+this.blurRadius+"px)",
                      "filter": "blur("+this.blurRadius+"px)"
                  });
              }
          });
      });
    }

    window.hideRecursosSideBar=function(){

      $(".recursos_sidebar").animate({left:0, opacity:"hide"}, 180);
        $(function() {
          $({blurRadius: 0}).animate({blurRadius: 0}, {
              duration: 180,
              easing: 'swing', // or "linear"
                               // use jQuery UI or Easing plugin for more options
              step: function() {
                  console.log(this.blurRadius);
                  $('.recursos_list').css({
                      "-webkit-filter": "blur("+this.blurRadius+"px)",
                      "filter": "blur("+this.blurRadius+"px)"
                  });
              }
          });
      });

    }
</script>

<style> 
    
    .recursos_btn_sidebar{
      display: block;
      margin-top: 30px;
      font-size: 26px;
    }
   .recursos_orden, .recursos_orden:hover{
      text-decoration: none;
   }
   .order_select:after{
      content: " ";
   }
   .order_select{
    background: transparent !important;
    border: transparent !important;
    font-weight: 700 !important;
    cursor: pointer !important;
   }
   .recursos_card_footer{
      background-color: #8181813d;
      border-bottom-right-radius: 10px;
      height: 56px;margin-bottom: -39px;
      box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 0px 10px 0 rgba(0, 0, 0, 0.2);
   }

   .recurso_row_info_card{
      padding-left: 15px;
      padding-right: 15px;
   }

   .recurso_user{
      font-size: 14px;
   }

   .recurso_info_img_featura{
      right: 28px;
       color: white;
       position: absolute;
       top: 76%;
       right: 28px;
       background: #00000038;
       border-radius: 10px;
   }
      .feature_img_recurso_2{
         height: 160px;
         border-top-left-radius: 10px !important;
         border-bottom-left-radius: 10px !important;
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
      }
      .recursos_card{
         min-height: 160px !important;
      }
      .recursos_number{
         font-size: 14px
      } 

      .recursos_search_input{
         height: 48px;
      }
      .recursos_search_input:active, .recursos_search_input:focus{
         border: solid 1px black !important;
      }
      .recursos_sidebar_list{
         font-size: 18px;
         cursor: pointer;
      }

      .recursos_sidebar_list_active{
         color: black;
      }

      .recursos_sidebar_list_active:after{
          content: " ";
          height: 27px;
          width: 7px;
          background: #46178f;
          position: absolute;
          left: 98%;
          border-radius: 10px;
          top: 112px;
      }

      .recursos_sidebar_list:hover{
         color: black;
      }
      .btn-get-started:hover{
        color: white !important;

      }
</style>
@include("footer")