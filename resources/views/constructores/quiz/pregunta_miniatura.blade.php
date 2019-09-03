<div class="plantilla_pregunta d-none">
  <div class="caja_miniatura" style="display: none;">
          <div class="position-relative cuadro_question_num_div">
              <span class="cuadro_question_num text-secondary">1. </span>
            </div>
            <div class="cuadro_question cuadro_question_active p-2 mt-3 cursor-pointer" onclick="ChangePregunta(this)">
              <div class="position-relative">
                <a href="#" id="dropdownMenuButton2" data-toggle="dropdown">
                  <span class="cuadro_question_num text-secondary"><i class="fa fa-ellipsis-v text-secondary question_options cursor-pointer"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right w-auto p-0 menu_leccion_create menu_pregunta" aria-labelledby="dropdownMenuButton2" style="width: 200px !important">
                        <div class="row">
                           <div class="col-12">
                              <a onclick="DuplicarPregunta()" class="font-14 dropdown-item dropdown-item_sub_config text-secondary font-weight-bold px-3 py-3 a_menu_leccion" href="#">
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
                  <div class="col-6 pr-1 mb-1 pregunta_miniatura">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_1_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pl-1 mb-1 pregunta_miniatura">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev2" id="prev_resp_check_2_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pr-1 pregunta_miniatura">
                     <div class="resp_quiz_prev w-100"></div>
                     <i class="fa fa-circle check_resp_quiz_prev check_resp_quiz_prev1" id="prev_resp_check_3_{{$Datos["QuestionID"]}}" aria-hidden="true" style="display: none;"></i>
                  </div>
                  <div class="col-6 pl-1 pregunta_miniatura">
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
