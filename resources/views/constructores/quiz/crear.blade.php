@include("constructores.quiz.header")


<script>  

window.DuplicarPregunta=function(id){


  

  $("body").trigger("click");

  // get the last DIV which ID starts with ^= "klon"
  var $div = $("div[data-id_pregunta='"+id+"']");

  // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
  var $klon = $div.clone().prop('data-id_pregunta', 'nueva_copia' );
  $klon.hide();

  $("div[data-id_pregunta='"+id+"']").after( $klon );
  $klon.show(300, function(){
    $("body").trigger("click");
  });

  var NuevaID=makeidfunction(10);

  $("div[data-id_pregunta='"+id+"']:last").attr('data-id_pregunta', NuevaID);

  var DatosACopiar = window.Preguntas[window.PreguntaActiva];

  window.PreguntaActiva = NuevaID;
  window.Preguntas[window.PreguntaActiva]={}
  window.Preguntas[window.PreguntaActiva] = DatosACopiar;


  OrdenPreguntas();

}

</script>




<main class="create_leccion altura_ventana">
   <div class="container p-0 m-0 mw-100 altura_ventana">
      <div class="row p-0 container_child mx-0 mx-lg-n2 altura_ventana">
         <div class="col-lg-2 p-0 create_quiz_sidebar pb-4 px-4 px-md-0 altura_ventana" align="center">
          <div class="d-md-flex d-lg-block">
          <div class="preguntas_miniaturas d-lg-block py-md-3 py-lg-0">
            @php $i=0; @endphp
          @foreach ($Datos["Quiz"]->Preguntas as $Pregunta)
            <div class="caja_miniatura" data-id_pregunta='{{$Pregunta->id}}'>
              <div class="position-relative cuadro_question_num_div">
                <span class="cuadro_question_num text-secondary font-weight-bold">1. </span>
              </div>
              <div class="cuadro_question ml-4 ml-lg-0 p-2 mt-3 cursor-pointer @if ($i==0) cuadro_question_active @endif" onclick="ChangePregunta(this)">
                <div class="position-relative">
                  <a href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                    <span class="cuadro_question_num text-secondary"><i class="question_options fa fa-ellipsis-v text-secondary cursor-pointer"></i></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right w-auto p-0 menu_leccion_create menu_pregunta" aria-labelledby="dropdownMenuButton2" style="width: 200px !important">
                          <div class="row">
                             <div class="col-12">
                                <a onclick="DuplicarPregunta($(this).parent().parent().parent().parent().parent().parent().attr('data-id_pregunta'))" class="font-14 dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                                <i class="fa fa-copy pr-3 menu_leccion_icon"></i> Duplicar</a>
                             </div>
                             <div class="col-12">
                                <a onclick="EliminarPregunta()" class="font-14 dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
                                <i class="fa fa-trash-o pr-3 menu_leccion_icon"></i>
                                Eliminar</a>
                             </div>
                          </div>
                       </div>
                </div>
                <div class="position-relative">
                  <div class="miniatura_capa_hover">
                    <h4 class="hover_quiz_pregunta font-weight-bold">Pregunta</h4>
                  </div>
                </div>
                 <div class="row">
                    <div class="col-12 prev_ques_quiz_tit_div mb-2" align="center">
                       <span id="prev_ques_quiz_tit_{{$Datos["QuestionID"]}}" class="font-weight-bold text-secondary prev_ques_quiz_tit">
                        @if ($Pregunta->pregunta!="")
                          {{$Pregunta->pregunta}}
                          @else
                          Pregunta
                        @endif
                       </span>
                    </div>
                    <div class="col-2 mb-2 seg_miniatura pr-0">
                      <div class="div_dashed">
                        <div>
                          <span class="seg_prev">{{$Pregunta->segundos}}</span>
                        </div>
                      </div>                  
                    </div>
                    <div class="col-8 mb-2 quiz_media_div_prev_miniatura" align="center" id="multimedia_prev_{{$Datos["QuestionID"]}}" @if ($Pregunta->img!=null || $Pregunta->link_video_yt!=null) style="display: none;" @endif>
                       <div class="quiz_media_div quiz_media_div_prev">
                          <i class="fa fa-file-image-o text-secondary icon_image_prev" aria-hidden="true"></i><br>
                       </div>
                    </div>
                    <div class="col-8 mb-2 media_miniatura" align="center" @if ($Pregunta->img=="" && $Pregunta->link_video_yt=="") style="display: none;" @endif>
                      @if ($Pregunta->link_video_yt!="")
                        <img width="100%" height="63px" src="http://img.youtube.com/vi/{{$Pregunta->link_video_yt}}/0.jpg" tipo='youtube'>
                      @endif

                      @if ($Pregunta->img!="")
                        <img width="100%" height="63px" src="{{ asset('img/quiz_img') }}/{{$Pregunta->img}}" tipo='imagen'>
                      @endif
                    </div>
                    @if ($Pregunta->tipo==1)
                      <div class="col-6 pr-1 mb-1">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_1_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_1=="false") style="display: none;" @endif></i>
                      </div>
                      <div class="col-6 pl-1 mb-1">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_2_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_2=="false") style="display: none;" @endif></i>
                      </div>
                      <div class="col-6 pr-1">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_3_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_3=="false") style="display: none;" @endif></i>
                      </div>
                      <div class="col-6 pl-1">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_4_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_4=="false") style="display: none;" @endif></i>
                      </div>
                    @else
                    <div class="col-6 pr-1 mt-3">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_3_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_vf!="false") style="display: none;" @endif></i>
                      </div>
                      <div class="col-6 pl-1 mt-3">
                         <div class="resp_quiz_prev w-100"></div>
                         <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_4_{{$Datos["QuestionID"]}}" aria-hidden="true" @if ($Pregunta->correcta_vf=="false") style="display: none;" @endif></i>
                      </div>
                    @endif
                 </div>
              </div>
              <div class="position-relative alert_question_div" style="display: none;">
                <i class="fa fa-info alert_question cursor-pointer" onmouseover="MoverTooltipAlert(this)" aria-hidden="true"></i>
              </div>
            </div>
            @php $i++; @endphp
          @endforeach
          </div>
        </div>
            <div class="quiz_sidebar_footer mt-3">
               <button id="anadir_pregunta_quiz" type="button" class="btn btn-light btn-header font-weight-bold fa-1x">Añadir Pregunta</button>
            </div>
         </div>
         <div class="col-lg-10 py-10 px-1 px-lg-3 px-xl-5 col_quiz px-4 px-lg-0">
            <div class="row mt-5">
               <div class="col-12 mb-4" align="center">
                  <input type="text" class="create_quiz_question_input w-100" 
                         placeholder="Haz click aqui para escribir tu pregunta" 
                         onfocus="this.placeholder = '' " 
                         onblur="this.placeholder = 'Haz click aqui para escribir tu pregunta'"
                         onkeyup='QuizQuestionTitle(this, window.PreguntaActiva)'
                         data-tippy-hideOnClick="false">
               </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-2 col-sm-4 mb-4 py-5 my-5 py-sm-0 my-sm-0">    
                <div class="wrapper">
                  <input class="hidden-trigger" id="toogle" type="checkbox">
                  <label class="circle" for="toogle">
                     <span class="font-weight-bold quiz_sec">5</span><br>
                     <span class="font-weight-bold span_sec_btn_quiz">seg</span>
                  </label>            
                  <div class="subs">
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub1" type="radio" name="sub-circle" value="5"/>
                      <label for="sub1" class="font-weight-bold sec_text">5</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub2" type="radio" name="sub-circle" value="10"/>
                      <label for="sub2" class="font-weight-bold sec_text">10</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub3" type="radio" name="sub-circle" value="20"/>
                      <label for="sub3" class="font-weight-bold sec_text">20</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub4" type="radio" name="sub-circle" value="30"/>
                      <label for="sub4" class="font-weight-bold sec_text">30</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub5" type="radio" name="sub-circle" value="60"/>
                      <label for="sub5" class="font-weight-bold sec_text">60</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub6" type="radio" name="sub-circle" value="90"/>
                      <label for="sub6" class="font-weight-bold sec_text">90</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub7" type="radio" name="sub-circle" value="120"/>
                      <label for="sub7" class="font-weight-bold sec_text">120</label>
                    </button>
                    <button class="sub-circle" onclick="CambiarSegundosQuiz(this)">
                      <input class="hidden-sub-trigger" id="sub8" type="radio" name="sub-circle" value="240"/>
                      <label for="sub8" class="font-weight-bold sec_text">240</label>
                    </button>
                   </div>
                </div>
               </div>
               <div class="col-12 col-md-8 col-sm-8 mb-4 recurso_pregunta mt-3 mt-sm-0" align="center">
                  <div class="quiz_media_div quiz_media_prin p-4 py-5">
                    <div class="quiz_media_div_content">
                       <i class="fa fa-file-image-o fa-2x text-secondary" aria-hidden="true"></i><br>
                       <p class="my-3">
                          Selecciona un recurso
                       </p>
                       <div class="quiz_media_footer" align="center">
                          <button type="button" class="btn btn-light btn-header font-weight-bold fa-1x">
                            <label for="img_quiz" class="cursor-pointer">Subir Imagen</label>
                          </button>
                          <button onclick="$('#QuizYouTube').modal('show');" type="button" class="btn btn-light btn-header font-weight-bold fa-1x">Link YouTube</button>
                          <input onchange='AjaxFileRequest("POST", "{{Request::root()}}/crear/quiz/subir-foto-quiz", "img_quiz", "{{$Datos["QuestionID"]}}")' type="file" id="img_quiz" class="d-none">
                       </div>
                    </div>
                  </div>
                  <div class="quiz_img_recurso w-100" style="display: none;">
                    <button onclick="RemoverImageQuiz()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x btn_remove_youtube_quiz">Remover</button>
                    <button onclick="ModifyCreditsQuiz()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x rounded-circle btn_info_youtube_quiz"><i class="text-black fa fa-info fa-1x text-secondary" aria-hidden="true"></i></button>
                  </div>
                  <div class="quiz_video_recurso" style="display: none;">
                    <div class="w-100 h-100 quiz_video_recurso_div">
                    </div>
                    <button onclick="RemoverYouTubeQuiz()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x btn_remove_youtube_quiz">Remover</button>
                    <button onclick="ModifyCreditsQuiz()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x rounded-circle btn_info_youtube_quiz"><i class="text-black fa fa-info fa-1x text-secondary" aria-hidden="true"></i></button>
                    <button onclick="ModifyYouTubeQuiz()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x rounded-circle btn_modify_youtube_quiz"><i class="text-black fa fa-youtube-play fa-1x text-secondary" aria-hidden="true"></i></button>
                  </div>
               </div>
               <button onclick="RemoveMediaQuizPreg('{{$Datos["QuestionID"]}}')" class="btn btn-light font-weight-bold btn_quiz_remove_media d-none">Remover</button>
            </div>
              <div class="row quiz_respuestas mb-5 mt-4 opcion_multiple_div">
               @include("constructores.quiz.campos_seleccion_multiple")
              </div>
              <div class="row quiz_respuestas mb-5 mt-4 verdadero_falso_div" style="display: none;">
               @include("constructores.quiz.campos_verdadero_falso")
             </div>
         </div>
      </div>
   </div>
</main>





<script>

  $(document).ready(function(){


    window.PreguntaActiva ={{$Datos["Quiz"]->Preguntas[0]->id}};
    window.Preguntas      ={};
    window.QuizFunctionDefault();


    @foreach ($Datos["Quiz"]->Preguntas as $Pregunta)

    window.Preguntas[{{$Pregunta->id}}]={};

    window.Preguntas[{{$Pregunta->id}}]["pregunta"]      ="{{$Pregunta->pregunta}}";
    window.Preguntas[{{$Pregunta->id}}]["respuesta_1"]   ="{{$Pregunta->respuesta_1}}";
    window.Preguntas[{{$Pregunta->id}}]["respuesta_2"]   ="{{$Pregunta->respuesta_2}}";
    window.Preguntas[{{$Pregunta->id}}]["respuesta_3"]   ="{{$Pregunta->respuesta_3}}";
    window.Preguntas[{{$Pregunta->id}}]["respuesta_4"]   ="{{$Pregunta->respuesta_4}}";
    
    window.Preguntas[{{$Pregunta->id}}]["correcta_1"]    ={{$Pregunta->correcta_1}};
    window.Preguntas[{{$Pregunta->id}}]["correcta_2"]    ={{$Pregunta->correcta_2}};
    window.Preguntas[{{$Pregunta->id}}]["correcta_3"]    ={{$Pregunta->correcta_3}};
    window.Preguntas[{{$Pregunta->id}}]["correcta_4"]    ={{$Pregunta->correcta_4}};

    @if ($Pregunta->tipo==2) 
      window.Preguntas[{{$Pregunta->id}}]["respuesta_vf"]    ={{$Pregunta->respuesta_vf}};
    @endif


    window.Preguntas[{{$Pregunta->id}}]["segundos"]      ={{$Pregunta->segundos}};
    
    window.Preguntas[{{$Pregunta->id}}]["link_video_yt"] = "{{$Pregunta->link_video_yt}}";
    window.Preguntas[{{$Pregunta->id}}]["iframe_video_yt"] = document.createRange().createContextualFragment('{{$Pregunta->iframe_video_yt}}');
    window.Preguntas[{{$Pregunta->id}}]["img"]           = "{{$Pregunta->img}}";
    
    window.Preguntas[{{$Pregunta->id}}]["tipo_pregunta"] = {{$Pregunta->tipo}};

    window.Preguntas[{{$Pregunta->id}}]["credito_media"] = '{{$Pregunta->credito_media}}';



    window.QuizConfig={};
    window.QuizConfig["nombre"]='{{$Datos["Quiz"]->nombre}}';
    window.QuizConfig["descripcion"]="{{$Datos["Quiz"]->descripcion}}";
    window.QuizConfig["img"]="{{$Datos["Quiz"]->img}}";
    window.QuizConfig["credit_img"]="{{$Datos["Quiz"]->credit_img}}";
    window.QuizConfig["video_lobby"]="{{$Datos["Quiz"]->video_lobby}}";
    window.QuizConfig["idioma"]="{{$Datos["Quiz"]->idioma}}";
    window.QuizConfig["visible"]="{{$Datos["Quiz"]->visible}}";


    window.QuestionQuizTooltip._tippy.disable();

    window.Resp[1]._tippy.disable();
    window.Resp[2]._tippy.disable();



    @endforeach


    $(".cuadro_question_active:first").click();

  })
</script>



@include("constructores.quiz.media_credits")
@include("constructores.quiz.pregunta_miniatura")
@include("constructores.quiz.anadir_pregunta_tooltip")
@include("constructores.quiz.quiz_settings")
@include("constructores.quiz.youtube_link")
@include("footer")