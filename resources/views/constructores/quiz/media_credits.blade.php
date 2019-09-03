
<!-- Modal -->
<div class="modal fade" id="QuizMediaCredits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" style="    z-index: 9999999;">
  <div class="modal-dialog" role="document" style="width: 728px; max-width: 728px;height: 348px">
    <div class="modal-content">
      <form data-parsley-validate="">
      <div class="modal-body p-4">
        <h3 class="modal-title font-weight-bold modal_title_credits_quiz" id="exampleModalLabel2">Añade los creditos de la imagen o el video</h3>
        <div class="row mt-3">
            <div class="col-12">
              <p class="mb-3 sub_title_quiz_credit">Recuerde acreditar la fuente original de la imagen o video que estas utilizando.</p>
              <div class="form-group">
                  <textarea onkeyup="VerifyCredit(this)" name="" id="" cols="15" rows="10" class="form-control w-100 textarea_credits"></textarea>
               </div>
            </div>
        </div>
      <div  align="center" class="my-2">
        <button type="button" class="btn btn-light cerrar_moda_youtube_quiz quiz_credit_btn font-weight-bold dismiss_credit" data-dismiss="modal">Cerrar</button>
        <button onclick="IncrustarCreditQuiz()" type="button" class="btn btn-success quiz_credit_btn font-weight-bold success_credit" disabled="">Hecho</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>

