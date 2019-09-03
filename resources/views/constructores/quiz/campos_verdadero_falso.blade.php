<div class="col-6 mb-1 div_quiz_resp mt-5">
      <div class="triangle_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="TRIANGLETitle TRIANGLEDesc"><title id="TRIANGLETitle">title</title><desc id="TRIANGLEDesc">description</desc><path d="M27,24.559972 L5,24.559972 L16,7 L27,24.559972 Z"></path></svg></span></div>
      <input value="Verdadero" type="text" class="triangle_change_back text-white create_quiz_resp_input w-100" readonly="">
             <label for="verdadero">
                <i onclick='ChangeCorrectRespVF(this, "1", "falso_check", "2", true)' class="fa fa-check check_res_quiz cursor-pointer verdadero_check" aria-hidden="true"></i>
             </label>
             <input type="radio" name="verdadero_falso" id="verdadero" class="d-none">
   </div>
   <div class="col-6 mb-1 div_quiz_resp mt-5">
      <div class="exagon_icon resp_icon"><span class="card-icon__icon icon__Icon-xvsbpg-0 DrEfm"><svg data-functional-selector="icon" viewBox="0 0 32 32" aria-labelledby="DIAMONDTitle DIAMONDDesc"><title id="DIAMONDTitle">title</title><desc id="DIAMONDDesc">description</desc><path d="M4,16.0038341 L16,4 L28,16.0007668 L16,28 L4,16.0038341 Z"></path></svg></span></div>
      <input value="Falso" type="text" class="exagon_change_back text-white create_quiz_resp_input w-100" readonly="">
             <label for="falso">
                <i onclick='ChangeCorrectRespVF(this, "2", "verdadero_check", "1", false)' class="fa fa-check check_res_quiz cursor-pointer falso_check" aria-hidden="true"></i>
             </label>
             <input type="radio" name="verdadero_falso" id="falso" class="d-none">
   </div>