
<!-- Modal -->
<div class="modal fade" id="QuizSettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-4">
        <h3 class="modal-title" id="exampleModalLabel">Confuguraciones</h3>
        <div class="row mt-4">
          <div class="col-7">
            <div class="form-group">
              <span class="font-weight-bold label_quiz_settings">Nombre</span> <span class="text-secondary optional_text ml-2">(Opcional)</span>
                <input type="text" class="form-control mt-1" id="user" placeholder="Escribe el nombre" required="">
            </div>
            <div class="form-group">
              <span class="font-weight-bold label_quiz_settings">Descripcion</span> <span class="text-secondary optional_text ml-2">(Opcional)</span>
                <textarea class="default-textarea mt-1 pb-0" name="" id="" cols="30" rows="10"></textarea>
                <small class="text-secondary">Da una buena descripcion para darle precencia a tu prueba</small>
            </div>
            <div class="form-group">
              <span class="font-weight-bold label_quiz_settings">Video del lobby</span>
                <input type="text" class="form-control mt-1" id="lobby_video" placeholder="Escribe el nombre" required="">
            </div>
          </div>
          <div class="col-5">
              <div class="img_quiz_div"> 
                <span class="font-weight-bold label_quiz_settings">Imagen de Prueba</span>
                <img class="img_quiz mt-1" src="https://create.kahoot.it/v2/assets/placeholder-cover-kahoot.6a22596b.png" alt="">
                <button onclick="$('#quiz_img').click()" type="button" class="btn btn-light font-weight-bold btn_change_quiz_image">Cambiar</button>
                <input onchange="AjaxFileRequest('POST', '{{Request::root()}}/crear/quiz/subir-foto-quizG', 'quiz_img')" type="file" id="quiz_img" class="d-none">
              </div>

              <div class="div_true_image_quizG" style="display: none;">
                <button onclick="OpenCreditsQuizSettings()" type="button" class="btn btn-light btn-header font-weight-bold fa-1x rounded-circle btn_credits_image_quiz"><i class="text-black fa fa-info fa-1x text-secondary" aria-hidden="true"></i></button>
                <button onclick="$('#quiz_img').click()" type="button" class="btn btn-light font-weight-bold btn_change_quiz_image_image">Cambiar</button>                
              </div>


              <div class="form-group lenguaje_config">
                <span class="font-weight-bold label_quiz_settings">Lenguaje</span>
                <div class="form-group">
                  <select class="form-control" id="estado_leccion" required="">
                    <option value="Albanian">Albanian</option>
                    <option value="American Sign Language">American Sign Language</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Català">Català</option>
                    <option value="Cymraeg">Cymraeg</option>
                    <option value="Dansk">Dansk</option>
                    <option value="Davvisámegiella">Davvisámegiella</option>
                    <option value="Deutsch">Deutsch</option>
                    <option value="Eesti keel">Eesti keel</option>
                    <option value="English">English</option>
                    <option value="Español" selected="">Español</option>
                    <option value="Euskara">Euskara</option>
                    <option value="Français">Français</option>
                    <option value="Gaeilge">Gaeilge</option>
                    <option value="Hrvatski">Hrvatski</option>
                    <option value="Italiano">Italiano</option>
                    <option value="Javanese">Javanese</option>
                    <option value="Latviešu valoda">Latviešu valoda</option>
                    <option value="Lietuvių kalba">Lietuvių kalba</option>
                    <option value="Lingua latīna">Lingua latīna</option>
                    <option value="Magyar">Magyar</option>
                    <option value="Malay">Malay</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Māori">Māori</option>
                    <option value="Nederlands">Nederlands</option>
                    <option value="Norsk">Norsk</option>
                    <option value="Norsk">Norsk</option>
                    <option value="Polski">Polski</option>
                    <option value="Português">Português</option>
                    <option value="Român">Român</option>
                    <option value="Slovenščina">Slovenščina</option>
                    <option value="Suomi">Suomi</option>
                    <option value="Svenska">Svenska</option>
                    <option value="Tiếng Việt">Tiếng Việt</option>
                    <option value="Türk">Türk</option>
                    <option value="Íslenska">Íslenska</option>
                    <option value="Čeština">Čeština</option>
                    <option value="ʻŌlelo Hawaiʻi">ʻŌlelo Hawaiʻi</option>
                    <option value="ελληνικά">ελληνικά</option>
                    <option value="Русский язык">Русский язык</option>
                    <option value="Українська мова">Українська мова</option>
                    <option value="български език">български език</option>
                    <option value="српски">српски</option>
                    <option value="עברית">עברית</option>
                    <option value="العربية">العربية</option>
                    <option value="فارسی">فارسی</option>
                    <option value="پنجابی">پنجابی</option>
                    <option value="हिन्दी">हिन्दी</option>
                    <option value="বাংলা">বাংলা</option>
                    <option value="தமிழ்">தமிழ்</option>
                    <option value="తెలుగు">తెలుగు</option>
                    <option value="ภาษาไทย">ภาษาไทย</option>
                    <option value="ქართული">ქართული</option>
                    <option value="中文">中文</option>
                    <option value="日本語">日本語</option>
                    <option value="한국말">한국말</option>

                  </select>
               </div>
              </div>

            </div>
        </div>
      </div>
      <div  align="center" class="mb-4">
        <button type="button" class="btn btn-light font-weight-bold btn_config_quiz" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success font-weight-bold btn_config_quiz">Hecho</button>
      </div>
    </div>
  </div>
</div>


<script>
  window.ExitoUploadImgQuizG=function(img){

    $(".div_true_image_quizG").css("background-image", "url("+window.url+'/img/quiz_img/'+img+")");
    $(".div_true_image_quizG").show();
    $(".img_quiz_div").hide();
    window.QuizConfig["img"]=img;

  }
</script>
