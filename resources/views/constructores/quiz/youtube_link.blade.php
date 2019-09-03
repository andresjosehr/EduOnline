
<!-- Modal -->
<div class="modal fade" id="QuizYouTube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 450px">
    <div class="modal-content">
      <form data-parsley-validate="">
      <div class="modal-body p-4">
        <h3 class="modal-title font-weight-bold" id="exampleModalLabel">Añade un video de YouTube</h3>
        <div class="row mt-4">
            <div class="col-12">
              <div class="form-group">
                <span class="font-weight-bold label_quiz_settings">Pega el Link de YouTube</span>
                  <input onkeyup="InsetPrevVideoQuiz(this)" type="text" class="form-control mt-1 input_quiz_vide" id="link_video_quiz" placeholder="Escribe el nombre" required="">
              </div>
            </div>

            <div class="col-12">
              <div class="quiz_media_div quiz_media_div_yt p-4 py-5 w-100" align="center">
                 <i class="fa fa-file-video-o fa-2x text-secondary" aria-hidden="true"></i><br>
                <div class="w-100 mt-3 pl-2" align="left">
                   <p class="my-1">
                     1. Busca un video en Youtube
                   </p>
                   <p class="my-1">
                     2. Selecciona "Compartir" y copia el link
                   </p>
                   <p class="my-1">
                     3. Pegalo en el campo de arriba
                   </p>
                 </div>
              </div>

              <div class="video_quiz_prev_modal" style="display: none;height: 250px;">
              </div>

            </div>
            <div class="col-6 mt-4">
                <span class="font-weight-bold label_quiz_settings">Empieza en:</span>
                <input id='quiz_video_begin' type="text" class="form-control mt-1" data-parsley-lt="#quiz_video_end" placeholder="0 segundos">
            </div>
            <div class="col-6 mt-4">
                <span class="font-weight-bold label_quiz_settings">Termina en:</span>
                <input id='quiz_video_end' type="text" class="form-control mt-1" data-parsley-lt="#quiz_video_begin" placeholder="0 segundos">
            </div>
        </div>
      <div  align="center" class="my-4">
        <button type="button" class="btn btn-light cerrar_moda_youtube_quiz" data-dismiss="modal">Cerrar</button>
        <button onclick="IncrustarVideoQuiz()" type="button" class="btn btn-success">Hecho</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>