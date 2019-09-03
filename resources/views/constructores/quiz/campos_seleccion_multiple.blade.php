
  <div class="col-6 mb-1 div_quiz_resp">
      <div class="triangle_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="TRIANGLETitle TRIANGLEDesc"><title id="TRIANGLETitle">title</title><desc id="TRIANGLEDesc">description</desc><path d="M27,24.559972 L5,24.559972 L16,7 L27,24.559972 Z"></path></svg></span></div>
      <input type="text" id="input_resp_1" class="input_resp_1 create_quiz_resp_input original_input_resp_quiz w-100" 
             placeholder="Respuesta 1"
             data-tippy-hideOnClick="false" 
             onkeyup='ChangeRespContent(this, "triangle_change_back", "1")'>
             <label for="resp1">
                <i onclick='ChangeCorrectResp(this, "prev_resp_check_1_{{$Datos["QuestionID"]}}", 1)' class="fa fa-check check_res_quiz cursor-pointer i_check_1" aria-hidden="true"></i>
             </label>
             <input type="checkbox" id="resp1" class="d-none">
   </div>
   <div class="col-6 mb-1 div_quiz_resp">
      <div class="exagon_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="DIAMONDTitle DIAMONDDesc"><title id="DIAMONDTitle">title</title><desc id="DIAMONDDesc">description</desc><path d="M4,16.0038341 L16,4 L28,16.0007668 L16,28 L4,16.0038341 Z"></path></svg></span></div>
      <input type="text" id="input_resp_2" class="input_resp_2 create_quiz_resp_input original_input_resp_quiz w-100" 
             placeholder="Respuesta 2" 
             data-tippy-hideOnClick="false"
             onkeyup='ChangeRespContent(this, "exagon_change_back", "2")'>
             <label for="resp2">
                <i onclick='ChangeCorrectResp(this, "prev_resp_check_2_{{$Datos["QuestionID"]}}", 2)' class="fa fa-check check_res_quiz cursor-pointer i_check_2" aria-hidden="true"></i>
             </label>
             <input type="checkbox" id="resp2" class="d-none">
   </div>
   <div class="col-6 div_quiz_resp">
      <div class="circle_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="CIRCLETitle CIRCLEDesc"><title id="CIRCLETitle">title</title><desc id="CIRCLEDesc">description</desc><path d="M16,27 C9.92486775,27 5,22.0751322 5,16 C5,9.92486775 9.92486775,5 16,5 C22.0751322,5 27,9.92486775 27,16 C27,22.0751322 22.0751322,27 16,27 Z"></path></svg></span></div>
      <input type="text" id="input_resp_3" class="input_resp_3 create_quiz_resp_input original_input_resp_quiz w-100" 
             placeholder="Respuesta 3 (opcional)" 
             onkeyup='ChangeRespContent(this, "circle_change_back", "3")'>
             <label for="resp3">
                <i onclick='ChangeCorrectResp(this, "prev_resp_check_3_{{$Datos["QuestionID"]}}", 3)' class="fa fa-check check_res_quiz cursor-pointer i_check_3" aria-hidden="true"></i>
             </label>
             <input type="checkbox" id="resp3" class="d-none">
   </div>
   <div class="col-6 div_quiz_resp">
      <div class="cua_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="SQUARETitle SQUAREDesc"><title id="SQUARETitle">title</title><desc id="SQUAREDesc">description</desc><path d="M7,7 L25,7 L25,25 L7,25 L7,7 Z"></path></svg></span></div>
      <input type="text" id="input_resp_4" class="input_resp_4 create_quiz_resp_input original_input_resp_quiz w-100" 
             placeholder="Respuesta 4 (opcional)" 
             onkeyup='ChangeRespContent(this, "cua_change_back", "4")'>
             <label for="resp4">
                <i onclick='ChangeCorrectResp(this, "prev_resp_check_4_{{$Datos["QuestionID"]}}", 4)' class="fa fa-check check_res_quiz cursor-pointer i_check_4" aria-hidden="true"></i>
             </label>
             <input type="checkbox" id="resp4" class="d-none">
   </div>

