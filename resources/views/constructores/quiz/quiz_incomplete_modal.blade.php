
<!-- Modal -->
<div class="modal fade" id="QuizIncomplete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" style="z-index: 9999999;">
  <div class="modal-dialog" role="document" style="height: 521px;width: 416px;max-width: 728px">
    <div class="modal-content" style="height: 521px;width: 416px;">
      <form data-parsley-validate="">
      <div class="modal-body p-4" style="height: 521px;width: 416px;">
        <h3 class="modal-title font-weight-bold modal_title_credits_quiz" id="exampleModalLabel2">Este examen no puede ser presentado</h3>
        <p class="mb-3 sub_title_quiz_credit mt-3">Todas las preguntas deben ser jugables antes de guardar el kahoot y comenzar a jugar.</p>
        <div class="w-100 mt-5 mb-2" align="center">
          <div class="div_incomplete_img"></div>
        </div>
        <p class="mb-3 mt-3 sub_title_quiz_credit font-weight-bold" align="center"> Pregunta(s) esta(n) incompleta(s)</p>
      <div  align="center" class="my-2 pt-3">
        <button type="button" class="btn btn-light cerrar_moda_youtube_quiz font-weight-bold dismiss_credit" data-dismiss="modal">Cerrar</button>
        <button onclick="window.location.href=window.url+'/recursos';" type="button" class="btn btn-success font-weight-bold success_credit">Guardar como Borrador</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>

<style>
  .div_incomplete_img{
    background-image: url(https://create.kahoot.it/v2/assets/Validation-Fail-Dialog-Illustration.1b31fca7.png);
    width: 182px;
    height: 182px;
  }
  #QuizIncomplete #exampleModalLabel2{
    line-height: 1;

  }
</style>

<script>
    // $('#QuizIncomplete').modal('show');
</script>

