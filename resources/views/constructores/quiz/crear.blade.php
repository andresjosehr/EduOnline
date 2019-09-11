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

}

</script>




<main class="create_leccion">
   <div class="container p-0 m-0 mw-100">
      <div class="row p-0 container_child mx-0 mx-lg-n2">
         <div class="col-lg-2 p-0 create_quiz_sidebar pb-4" align="center">
          <div class="preguntas_miniaturas pt-4">
          <div class="caja_miniatura" data-id_pregunta='{{$Datos["QuestionID"]}}'>

            <div class="position-relative cuadro_question_num_div">
              <span class="cuadro_question_num text-secondary">1. </span>
            </div>
            <div class="cuadro_question cuadro_question_active p-2 mt-3 cursor-pointer" onclick="ChangePregunta(this)">
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
                  <div class="col-12 prev_ques_quiz_tit_div mb-2">
                     <span id="prev_ques_quiz_tit_{{$Datos["QuestionID"]}}" class="font-weight-bold text-secondary prev_ques_quiz_tit">Pregunta</span>
                  </div>
                  <div class="col-2 mb-2 seg_miniatura pr-0">
                    <div class="div_dashed">
                      <div>
                        <span class="seg_prev">5</span>
                      </div>
                    </div>                  
                  </div>
                  <div class="col-8 mb-2 quiz_media_div_prev_miniatura" align="center" id="multimedia_prev_{{$Datos["QuestionID"]}}">
                     <div class="quiz_media_div quiz_media_div_prev">
                        <i class="fa fa-file-image-o text-secondary icon_image_prev" aria-hidden="true"></i><br>
                     </div>
                  </div>
                  <div class="col-8 mb-2 media_miniatura" align="center" style="display: none">
                    <img src="" width="100%" height="63px">
                  </div>
                  <div class="col-6 pr-1 mb-1">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_1_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pl-1 mb-1">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_2_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pr-1">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_3_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pl-1">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_4_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
               </div>
            </div>
            <div class="position-relative alert_question_div" style="display: none;">
              <i class="fa fa-info alert_question cursor-pointer" onmouseover="MoverTooltipAlert(this)" aria-hidden="true"></i>
            </div>
          </div>
        </div>
            <div class="quiz_sidebar_footer mt-3">
               <button id="anadir_pregunta_quiz" type="button" class="btn btn-light btn-header font-weight-bold fa-1x">Añadir Pregunta</button>
            </div>
         </div>
         <div class="col-lg-10 py-10 px-1 px-lg-3 px-xl-5 col_quiz">
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
              <div class="col-2 mb-4">    
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
               <div class="col-8 mb-4 recurso_pregunta" align="center">
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
    window.PreguntaActiva="{{$Datos["QuestionID"]}}";
    window.Preguntas={};
    window.Preguntas["{{$Datos["QuestionID"]}}"]={};
    window.QuizFunctionDefault();

    window.Preguntas[window.PreguntaActiva]["pregunta"]="";
    window.Preguntas[window.PreguntaActiva]["respuesta_1"]="";
    window.Preguntas[window.PreguntaActiva]["respuesta_2"]="";
    window.Preguntas[window.PreguntaActiva]["respuesta_3"]="";
    window.Preguntas[window.PreguntaActiva]["respuesta_4"]="";

    window.Preguntas[window.PreguntaActiva]["correcta_1"]=false;
    window.Preguntas[window.PreguntaActiva]["correcta_2"]=false;
    window.Preguntas[window.PreguntaActiva]["correcta_3"]=false;
    window.Preguntas[window.PreguntaActiva]["correcta_4"]=false;
    window.Preguntas[window.PreguntaActiva]["segundos"]=5;

    window.Preguntas[window.PreguntaActiva]["link_video_yt"] = "";
    window.Preguntas[window.PreguntaActiva]["img"]           ="";

    window.Preguntas[window.PreguntaActiva]["tipo_pregunta"] = 1;
    window.QuizConfig={};
    window.QuizConfig["nombre"]="";
    window.QuizConfig["descripcion"]="";
    window.QuizConfig["img"]="";
    window.QuizConfig["credit_img"]="";
    window.QuizConfig["video_lobby"]="";
    window.QuizConfig["idioma"]="";
    window.QuizConfig["visible"]="";


    window.QuestionQuizTooltip._tippy.disable();

    window.Resp[1]._tippy.disable();
    window.Resp[2]._tippy.disable();



  })
</script>



@include("constructores.quiz.media_credits")
@include("constructores.quiz.pregunta_miniatura")
@include("constructores.quiz.anadir_pregunta_tooltip")
@include("constructores.quiz.quiz_settings")
@include("constructores.quiz.youtube_link")
@include("footer")