@foreach ($Data["Quiz"] as $Quiz)
<div class="col-12 mb-4" id="clase_{{$Quiz->id}}">
   <div class="card w-100 recursos_card">
      <div class="card-body p-0">
         <div class="row mx-0">
            <div class="col-3 feature_img_recurso px-0">
               <div class="feature_img_recurso_2" style="background-image: url({{ asset('img/lecciones_img') }}/{{$Quiz->img}});">
                  <p class="recurso_info_img_featura py-1 px-3 font-weight-bold d-none d-md-block" align="right">{{count($Quiz->Preguntas)}} Preguntas</p>
               </div>
            </div>
            <div class="col-9 px-0">
               <div class="row pt-3 h-100 recurso_row_info_card">
                  <div class="pl-4 col-9">
                     <h5 class="font-weight-bold ">
                      @if ($Quiz->nombre!="")
                        {{$Quiz->nombre}}
                      @else
                        (Sin nombre)
                      @endif
                    </h5>
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
                              <a onclick="EliminarClaseRecursos({{$Quiz->id}})" class="dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
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
                           <a href="{{URL::to('/crear/quiz')}}/{{$Quiz->id}}" class="btn btn-success btn-get-started font-weight-bold">Visualizar</a>
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