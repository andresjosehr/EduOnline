
window.ChangeCorrectResp=function(e, num, forClean = false){



      if ($(e).hasClass("resp_check_quiz")) {
        if (!forClean) {
          window.Preguntas[window.PreguntaActiva]["correcta_"+num]="false";
          $("div[data-id_pregunta='"+window.PreguntaActiva+"'] #prev_resp_check_"+num).hide(150)
        }
         $(e).removeClass("resp_check_quiz");
      }  else {
        if (!forClean) {
          window.Preguntas[window.PreguntaActiva]["correcta_"+num]="true";
          $("div[data-id_pregunta='"+window.PreguntaActiva+"'] #prev_resp_check_"+num).show(150)
        }
            $(e).addClass("resp_check_quiz");
         } 

         window.ValidateCompleteForSuccess();

   }

   window.QuizQuestionTitle=function(e, id){

     ValidateQuestion();
     window.ValidateCompleteForSuccess();

     window.Preguntas[window.PreguntaActiva]["pregunta"]=e.value;


      if (e.value!="") $("div[data-id_pregunta='"+id+"'] .prev_ques_quiz_tit").text(e.value);
      if (e.value=="") $("div[data-id_pregunta='"+id+"'] .prev_ques_quiz_tit").text("Pregunta");
   }

   window.ChangeRespContent=function(e, clase, num){

      window.ValidateCompleteForSuccess();

     ValidateResp(num)

     window.Preguntas[window.PreguntaActiva]["respuesta_"+num]=e.value

       e.placeholder = ''

      if (e.value!='') {

         $(e).addClass(clase);
         $(e).removeClass("original_input_resp_quiz");

      }

      if (e.value=='') {

         e.placeholder = 'Respuesta '+num

         $(e).removeClass(clase);
         $(e).addClass("original_input_resp_quiz");

      }

   }

   window.ChangeCorrectRespVF=function(e, num, contra, contra_num, respuesta_vf) {


          if (num==1) {var posicion="first"; var contraposicion='last';}
          if (num==2) {var posicion="last";  var contraposicion='first';}

         if ($(e).hasClass("resp_check_quiz")) {
            
         } else {

            $(e).addClass("resp_check_quiz");

            $("."+contra).removeClass("resp_check_quiz");
         }

          window.Preguntas[window.PreguntaActiva]["respuesta_vf"]=respuesta_vf;

         $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .check_resp_quiz_prev:"+posicion).show(300);
         $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .check_resp_quiz_prev:"+contraposicion).hide(300, function(){
           window.ValidateCompleteForSuccess();
         });
       
   }


   window.ExitoCrearQuiz=function(id){

      $(".alert_modulo_creado").removeClass("d-none");
      window.location=window.url+"/crear/quiz/"+id;

   }

   window.RemoveMediaQuizPreg=function(id){

      $("#img_quiz_preg_"+id).remove();
      $("#img_min_quiz_preg_"+id).remove();

      $("#multimedia_prev_"+id).removeClass("d-none");
      $(".recurso_pregunta").removeClass("d-none");
   }

   window.ExitoUploadImgQuiz=function(data){

      data=JSON.parse(data);
      window.Preguntas[window.PreguntaActiva]["img"]=data.img;


      $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .quiz_media_div_prev_miniatura").hide();
      $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura img").attr("src", window.url+"/img/quiz_img/"+data.img);
      $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura").show();

      $(".quiz_img_recurso").css("background-image", "url("+window.url+"/img/quiz_img/"+data.img+")");
      $(".quiz_img_recurso").show();
      $(".quiz_media_prin").hide();


   }




   window.CambiarAlturaMediaQuiz=function(){

      var AlturaMedia = $("html").height() - 480


        if ($("html").height()>720 && $("html").width()>973) {
          $(".quiz_media_prin").css("height", AlturaMedia+"px");
          $(".quiz_img_recurso").css("height", AlturaMedia+"px");
          $(".quiz_video_recurso").css("height", AlturaMedia+"px");
        } else{
          $(".quiz_img_recurso").css("height", "300px");
          $(".quiz_video_recurso").css("height", "300px");
        }

  

      if ($("html").width()<=974) {
        $(".quiz_media_prin").css("height", "300px");
        $(".quiz_img_recurso").css("height", "300px");
        $(".quiz_video_recurso").css("height", "300px");

        $(".create_quiz_sidebar").attr("align", "left");
        window.AndirQuestionQuizTooltip._tippy.set({placement: 'bottom'});
      } else{
        window.AndirQuestionQuizTooltip._tippy.set({placement: 'right'});
        $(".create_quiz_sidebar").attr("align", "center");
      }
    };


    window.CambiarSegundosQuiz=function(e){

      $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .seg_prev").text($(e).find(".sec_text").text())
      $(".quiz_sec").text($(e).find(".sec_text").text())

      window.Preguntas[window.PreguntaActiva]["segundos"]=$(e).find(".sec_text").text();

      $("#toogle").prop("checked", false);
    }


    window.ModifyYouTubeQuiz=function(){



    $("#link_video_quiz").val(window.Preguntas[window.PreguntaActiva]["link_video_yt"])
    $(".quiz_video_recurso_div").html(window.Preguntas[window.PreguntaActiva]["iframe_video_yt"]);
    $("#quiz_video_begin").val(window.Preguntas[window.PreguntaActiva]["empieza_video_yt"]);
    $("#quiz_video_end").val(window.Preguntas[window.PreguntaActiva]["termina_video_yt"]);

    $(".quiz_media_div_yt").hide(0, function(){
      $(".video_quiz_prev_modal").show(0)
    })


    $('#QuizYouTube').modal('show');

  }

  window.ModifyCreditsQuiz=function(){



    if (($("#QuizSettings").data('bs.modal') || {})._isShown) {


                  $(".textarea_credits").val("");
                  $(".textarea_credits").text("");
                  $(".textarea_credits").val(window.QuizConfig["credit_img"]);
                  $(".textarea_credits").text(window.QuizConfig["credit_img"]);
    } else{



      $(".textarea_credits").val(window.Preguntas[window.PreguntaActiva]["credito_media"]);
      $(".textarea_credits").text(window.Preguntas[window.PreguntaActiva]["credito_media"]);

    }

    $('#QuizMediaCredits').modal('show');

  }
  window.RemoverYouTubeQuiz=function(){

    $(".quiz_media_div_yt").hide(0, function(){
      $(".video_quiz_prev_modal").show(0)
    });

    $(".quiz_video_recurso").hide(0, function(){
        $(".quiz_media_prin").show(0)
    });

    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .quiz_media_div_prev_miniatura").show();
    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura").hide();

    window.Preguntas[window.PreguntaActiva]["credito_media"]    = "";
    window.Preguntas[window.PreguntaActiva]["link_video_yt"]    = "";
    window.Preguntas[window.PreguntaActiva]["iframe_video_yt"]  = "";
    window.Preguntas[window.PreguntaActiva]["empieza_video_yt"] = "";
    window.Preguntas[window.PreguntaActiva]["termina_video_yt"] = "";
  }

  window.RemoverImageQuiz=function(){

    $(".quiz_media_div_yt").hide(0, function(){
      $(".video_quiz_prev_modal").show(0)
    });

    $(".quiz_img_recurso").hide(0, function(){
        $(".quiz_media_prin").show(0)
    });


    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .quiz_media_div_prev_miniatura").show();
    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura").hide();

    window.Preguntas[window.PreguntaActiva]["img"]="";
  }


  window.IncrustarCreditQuiz=function(tipo = 'media_pregunta'){

    if (($("#QuizSettings").data('bs.modal') || {})._isShown){
        window.QuizConfig["credit_img"]=$(".textarea_credits").val();
    }else{
       window.Preguntas[window.PreguntaActiva]["credito_media"]=$(".textarea_credits").val();
    }
    $(".dismiss_credit").click()

  }

  window.VerifyCredit=function(e){
    if (e.value!="") $(".success_credit").removeAttr("disabled");
    if (e.value=="") $(".success_credit").attr("disabled", "disabled");

    if (($("#QuizSettings").data('bs.modal') || {})._isShown){
        window.QuizConfig["credit_img"]=$(".textarea_credits").val();
    }else{
       window.Preguntas[window.PreguntaActiva]["credito_media"]=$(".textarea_credits").val();
    }
  }


 

   window.makeidfunction=function(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}


    window.cleanPregunta=function(){

      $(".create_quiz_question_input").val("")
      $(".quiz_img_recurso").hide();
      $(".quiz_video_recurso").hide();
      $(".quiz_media_div.quiz_media_prin.p-4.py-5").show();


      if($("#resp1").prop("checked")) ChangeCorrectResp($(".triangle_icon").parent().find("i")[0], 1, true)
      if($("#resp2").prop("checked")) ChangeCorrectResp($(".exagon_icon").parent().find("i")[0], 2, true)
      if($("#resp3").prop("checked")) ChangeCorrectResp($(".circle_icon").parent().find("i")[0], 3, true)
      if($("#resp4").prop("checked")) ChangeCorrectResp($(".cua_icon").parent().find("i")[0], 4, true)

      $("#input_resp_1").prop("value", "")
      $("#input_resp_2").prop("value", "")
      $("#input_resp_3").prop("value", "")
      $("#input_resp_4").prop("value", "")

      $("#input_resp_1").prop("placeholder", "Respuesta 1")
      $("#input_resp_2").prop("placeholder", "Respuesta 2")
      $("#input_resp_3").prop("placeholder", "Respuesta 3 (Opcional)")
      $("#input_resp_4").prop("placeholder", "Respuesta 4 (Opcional)")


      $(".input_resp_1").addClass("original_input_resp_quiz")
      $(".input_resp_2").addClass("original_input_resp_quiz")
      $(".input_resp_3").addClass("original_input_resp_quiz")
      $(".input_resp_4").addClass("original_input_resp_quiz")

      $(".input_resp_1").removeClass("triangle_change_back")
      $(".input_resp_2").removeClass("exagon_change_back")
      $(".input_resp_3").removeClass("circle_change_back")
      $(".input_resp_4").removeClass("cua_change_back")

      $("input#falso").prop("checked", false);
      $("input#verdadero").prop("checked", false);
      $(".check_res_quiz").removeClass("resp_check_quiz");

    }


     window.animateCSS=function(element, animationName, callback) {
          const node = document.querySelector(element)
          node.classList.add('animated', animationName)

          function handleAnimationEnd() {
              node.classList.remove('animated', animationName)
              node.removeEventListener('animationend', handleAnimationEnd)

              if (typeof callback === 'function') callback()
          }

          node.addEventListener('animationend', handleAnimationEnd)
      }



window.ChangePregunta=function(e, firstTime = false){

   if (window.PreguntaActiva == $(e).parent().attr("data-id_pregunta") && !firstTime) return false;

    ValidarBorrador()
  
    GuardarDatos();

    window.Resp["1"]._tippy.hide();
    window.Resp["2"]._tippy.hide();
    window.Resp["1"]._tippy.disable();
    window.Resp["2"]._tippy.disable();


    ValidateCompleteForError();
    ValidateCompleteForSuccess();


    $(".cuadro_question").map(function(){
          $(this).removeClass("cuadro_question_active");
      });

    $(e).addClass("cuadro_question_active");

    window.PreguntaActiva=$(e).parent().attr("data-id_pregunta");


      cleanPregunta();

      window.Preguntas[window.PreguntaActiva];

      $(".create_quiz_question_input").val(window.Preguntas[window.PreguntaActiva]["pregunta"]);

      $("#input_resp_1").val(window.Preguntas[window.PreguntaActiva]["respuesta_1"])
      $("#input_resp_2").val(window.Preguntas[window.PreguntaActiva]["respuesta_2"])
      $("#input_resp_3").val(window.Preguntas[window.PreguntaActiva]["respuesta_3"])
      $("#input_resp_4").val(window.Preguntas[window.PreguntaActiva]["respuesta_4"])


      if (window.Preguntas[window.PreguntaActiva]["respuesta_1"]!="") $("#input_resp_1").addClass("triangle_change_back"); $("#input_resp_1").removeClass("original_input_resp_quiz");
      if (window.Preguntas[window.PreguntaActiva]["respuesta_2"]!="") $("#input_resp_2").addClass("exagon_change_back"); $("#input_resp_2").removeClass("original_input_resp_quiz");
      if (window.Preguntas[window.PreguntaActiva]["respuesta_3"]!="") $("#input_resp_3").addClass("circle_change_back"); $("#input_resp_3").removeClass("original_input_resp_quiz");
      if (window.Preguntas[window.PreguntaActiva]["respuesta_4"]!="") $("#input_resp_4").addClass("cua_change_back"); $("#input_resp_4").removeClass("original_input_resp_quiz");

      $("input.hidden-sub-trigger[value='"+window.Preguntas[window.PreguntaActiva]["segundos"]+"']").click();

      if (window.Preguntas[window.PreguntaActiva]["link_video_yt"]=="" && window.Preguntas[window.PreguntaActiva]["img"]=="") {
        $(".quiz_media_prin").show();
        $(".quiz_img_recurso").hide();
        $(".quiz_video_recurso").hide();
      }

      if (window.Preguntas[window.PreguntaActiva]["link_video_yt"]!="" && window.Preguntas[window.PreguntaActiva]["img"]=="") {



        $(".quiz_video_recurso_div").html("<iframe width='100%' height='100%' src='https://www.youtube.com/embed/"+window.Preguntas[window.PreguntaActiva]['link_video_yt']+"?rel=0&amp;showinfo=0&amp;enablejsapi=1' frameborder='0' allowfullscreen=''></iframe>");


        $(".quiz_media_prin").hide();
        $(".quiz_img_recurso").hide();
        $(".quiz_video_recurso").show();
        
      }

      if (window.Preguntas[window.PreguntaActiva]["link_video_yt"]=="" && window.Preguntas[window.PreguntaActiva]["img"]!="") {


        $(".quiz_img_recurso").css("background-image", "url("+window.url+"/img/quiz_img/"+window.Preguntas[window.PreguntaActiva]["img"]+")");


        $(".quiz_media_prin").hide();
        $(".quiz_img_recurso").show();
        $(".quiz_video_recurso").hide();
        
      }

     if (window.Preguntas[window.PreguntaActiva]["correcta_1"]=="true") $("label[for=resp1] i").click();
     if (window.Preguntas[window.PreguntaActiva]["correcta_2"]=="true") $("label[for=resp2] i").click();
     if (window.Preguntas[window.PreguntaActiva]["correcta_3"]=="true") $("label[for=resp3] i").click();
     if (window.Preguntas[window.PreguntaActiva]["correcta_4"]=="true") $("label[for=resp4] i").click();




     ValidateQuestion();


     if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==1){
        $(".opcion_multiple_div").show()
        $(".verdadero_falso_div").hide()

         ValidateResp(1)
         ValidateResp(2)
         ValidateCheck();

      }
       if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==2){
         $(".opcion_multiple_div").hide()
         $(".verdadero_falso_div").show()

          if (window.Preguntas[window.PreguntaActiva]["respuesta_vf"]!=undefined) {
             if (window.Preguntas[window.PreguntaActiva]["respuesta_vf"]) {
                 $(".verdadero_check").click()
             } else{
               $(".falso_check").click()

             }
         }
       }


  }


    window.ValidateQuestion=function(){
      if ($(".create_quiz_question_input").val()!="") {

        window.QuestionQuizTooltip._tippy.hide();
        window.QuestionQuizTooltip._tippy.disable();

      } else{

        window.QuestionQuizTooltip._tippy.enable();
        window.QuestionQuizTooltip._tippy.show();

      }
    }

    window.ValidateResp=function(num){

      if (num==1 || num==2) {

        if ($("#input_resp_"+num).val()!="") {

          window.Resp[num]._tippy.hide();
          window.Resp[num]._tippy.disable();

        } else{

          window.Resp[num]._tippy.enable();
          window.Resp[num]._tippy.show();

        }

      }

    }


    window.ValidateCheck=function(){

      if (!window.Preguntas[window.PreguntaActiva]["correcta_1"] && !window.Preguntas[window.PreguntaActiva]["correcta_2"] && !window.Preguntas[window.PreguntaActiva]["correcta_3"] && !window.Preguntas[window.PreguntaActiva]["correcta_4"]) {
         animateCSS(".i_check_1", "wobble");
         animateCSS(".i_check_2", "wobble");
         animateCSS(".i_check_3", "wobble");
         animateCSS(".i_check_4", "wobble");
      }

    }


    window.ValidateCompleteForError=function(){

     if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==1) {
         if (window.Preguntas[window.PreguntaActiva]["pregunta"]=="" || window.Preguntas[window.PreguntaActiva]["respuesta_1"]=="" || window.Preguntas[window.PreguntaActiva]["respuesta_2"]==""  || (window.Preguntas[window.PreguntaActiva]["correcta_1"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_2"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_3"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_4"]=="false")) {
             $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div").show()
             animateCSS("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div", "bounce");
         }
       }

       if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==2) {
         if (window.Preguntas[window.PreguntaActiva]["pregunta"]=="" || ( !$("input#verdadero").prop("checked") && !$("input#falso").prop("checked"))) {

           $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div").show()
             animateCSS("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div", "bounce");

         }
       }

   }

   window.ValidateCompleteForSuccess=function(){

     if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==1) {
         if (window.Preguntas[window.PreguntaActiva]["pregunta"]=="" || window.Preguntas[window.PreguntaActiva]["respuesta_1"]=="" || window.Preguntas[window.PreguntaActiva]["respuesta_2"]==""  || (window.Preguntas[window.PreguntaActiva]["correcta_1"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_2"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_3"]=="false" && window.Preguntas[window.PreguntaActiva]["correcta_4"]=="false")) {
         }else{
           $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div").hide()
         }
       }

       if (window.Preguntas[window.PreguntaActiva]["tipo_pregunta"]==2) {
         if (window.Preguntas[window.PreguntaActiva]["pregunta"]=="" || ( !$("input#verdadero").prop("checked") && !$("input#falso").prop("checked"))) {


         }else{
           $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .alert_question_div").hide()
         }
       }

   }
     window.CrearPregunta=function(tipo){


        GuardarDatos()


        window.Resp["1"]._tippy.hide();
        window.Resp["2"]._tippy.hide();
        window.Resp["1"]._tippy.disable();
        window.Resp["2"]._tippy.disable();

       $(".preguntas_miniaturas").append($(".plantilla_pregunta").html())
       $(".preguntas_miniaturas .caja_miniatura:last .prev_ques_quiz_tit").text("Pregunta");
       $(".preguntas_miniaturas .caja_miniatura:last").show(280);
       $(".preguntas_miniaturas .caja_miniatura:last .seg_prev").text(5);

        window.AndirQuestionQuizTooltip._tippy.hide();

        ValidateCompleteForError();

        $(".cuadro_question").map(function(){
          $(this).removeClass("cuadro_question_active");
        });



        $(".preguntas_miniaturas .caja_miniatura:last .cuadro_question").addClass("cuadro_question_active");

        var id_temporal=makeidfunction(5);

        $(".preguntas_miniaturas .caja_miniatura:last").attr("data-id_pregunta", id_temporal);

        window.PreguntaActiva=id_temporal;

        window.Preguntas[window.PreguntaActiva]={};

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
      window.Preguntas[window.PreguntaActiva]["img"]           = "";


      cleanPregunta();
      $("#sub1").click();


      if (tipo==1){
        $(".opcion_multiple_div").show()
        $(".verdadero_falso_div").hide()
        window.Preguntas[window.PreguntaActiva]["tipo_pregunta"] = 1;

      }
       if (tipo==2){
         $(".opcion_multiple_div").hide()
         $(".verdadero_falso_div").show()

         window.Preguntas[window.PreguntaActiva]["tipo_pregunta"] = 2;

         $(".preguntas_miniaturas .caja_miniatura:last .pregunta_miniatura:first").remove();
      $(".preguntas_miniaturas .caja_miniatura:last .pregunta_miniatura:first").after().remove();

         $(".preguntas_miniaturas .caja_miniatura:last .pregunta_miniatura").css("margin-top", "16px");


       }


       OrdenPreguntas();


       var DatosCrear={}
       DatosCrear["tipo"] = tipo;


       AjaxRequest("POST", window.url+"/crear/quiz/crear-pregunta", DatosCrear);

       $(".loader").hide();


     }


     window.MoverTooltipAlert=function(e) {

    window.AlertQuestionQuizTooltip._tippy.set({target: "div[data-id_pregunta='"+$(e).parent().parent().attr("data-id_pregunta")+"'] .alert_question"});

  }



  window.IncrustarVideoQuiz=function(){

    var video = $(".input_quiz_vide").val();
    var video = video.split("=");
    var video = video[1].split("&")[0];
    $(".quiz_video_recurso_div").html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+video+'?rel=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>');
    $(".cerrar_moda_youtube_quiz").click();
    $(".quiz_media_prin").hide(0, function(){
        $(".quiz_video_recurso").show(0)
    });


    window.Preguntas[window.PreguntaActiva]["link_video_yt"]=video;
    window.Preguntas[window.PreguntaActiva]["iframe_video_yt"]="<iframe width='100%' height='100%' src='https://www.youtube.com/embed/"+video+"?rel=0&amp;showinfo=0&amp;enablejsapi=1' frameborder='0' allowfullscreen=''></iframe>";
    window.Preguntas[window.PreguntaActiva]["empieza_video_yt"]=$("#quiz_video_begin").val();
    window.Preguntas[window.PreguntaActiva]["termina_video_yt"]=$("#quiz_video_end").val();

    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .quiz_media_div_prev_miniatura").hide();
    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura img").attr("src", "http://img.youtube.com/vi/"+video+"/0.jpg");
    $("div[data-id_pregunta='"+window.PreguntaActiva+"'] .media_miniatura").show();

    $("#link_video_quiz").val("")
    $("#quiz_video_begin").val("");
    $("#quiz_video_end").val("");
  }


  window.InsetPrevVideoQuiz=function(e){

    var video = e.value.split("=");
    $(".video_quiz_prev_modal").html("<iframe width='100%' height='100%' src='https://www.youtube.com/embed/"+video[0]+"?rel=0&amp;showinfo=0&amp;enablejsapi=1' frameborder='0' allowfullscreen=''></iframe>");

    $(".quiz_media_div_yt").hide(0, function(){
      $(".video_quiz_prev_modal").show(0)
    });



    // <iframe class="question-media__YouTube-jctf0g-3 dFnNrJ" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/xcSs0eZHm6o?autoplay=1&playsinline=1&start=60&end=90&enablejsapi=1&origin=https%3A%2F%2Fcreate.kahoot.it&widgetid=9" id="widget10"></iframe>

  }


       window.OpenCreditsQuizSettings=function(){

                  $("#QuizSettings").css("z-index", "1");

                  $(".textarea_credits").val("");
                  $(".textarea_credits").text("");

                  $(".textarea_credits").val(window.QuizConfig["credit_img"]);
                  $(".textarea_credits").text(window.QuizConfig["credit_img"]);

                  ModifyCreditsQuiz();

       }



    window.QuizFunctionDefault=function(){

          $( window ).resize(function() {
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();

            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
            window.CambiarAlturaMediaQuiz();
          });
          
          window.CambiarAlturaMediaQuiz();


        $('#QuizMediaCredits').on('hidden.bs.modal', function () {
          $("#QuizSettings").css("z-index", "9999");
        })

    }


    window.OrdenPreguntas=function() {

      var Orden={}
      var i=1;
      $(".preguntas_miniaturas .caja_miniatura").map(function(){

        Orden[$(this).attr("data-id_pregunta")]=i;

        $(this).find(".cuadro_question_num.text-secondary.font-weight-bold").text(i)

        i++;
      });

      window.Preguntas["orden"]={};
      window.Preguntas["orden"]=Orden;
    }


    window.GuardarDatos=function(){

      OrdenPreguntas();

      AjaxRequest("POST", window.url+"/crear/quiz/guardar-pregutnas", window.Preguntas);

      $(".loader").hide();

    }


    window.ExitoCrearPregunta=function(id){

      $(".preguntas_miniaturas .caja_miniatura:last").attr("data-id_pregunta", id);


      window.Preguntas[id]={}
      window.Preguntas[id]=window.Preguntas[window.PreguntaActiva];
      delete window.Preguntas[window.PreguntaActiva];
      window.PreguntaActiva=id;

    }


    window.ValidarBorrador=function(){


      window.setTimeout(function(){

        window.Borrador={}
        window.Borrador.borrador="0";
        $(".position-relative.alert_question_div").map(function(){
            if($(this).css("display")=="block"){
              window.Borrador.borrador= "1";
            }         
        });

        AjaxRequest("POST", window.url+"/crear/quiz/validar-borrador", window.Borrador);


        $(".loader").hide();

      },300);

    }



    window.ExitoDuplicar=function(idOld, idNew) {
      
    }


    window.ExitoDuplicar=function(idOld, idNew) {
      $("div[data-id_pregunta='"+idOld+"']").attr("data-id_pregunta", idNew);
      window.Preguntas[idNew]={};
      window.Preguntas[idNew]=window.Preguntas[window.PreguntaActiva];
      delete window.Preguntas[window.PreguntaActiva];
      window.PreguntaActiva=idNew;
    }



    window.DuplicarPregunta=function(id){

      $("body").trigger("click");

      // get the last DIV which ID starts with ^= "klon"
      var $div = $("div[data-id_pregunta='"+id+"']");

      // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
      var $klon = $div.clone().prop('data-id_pregunta', 'nueva_copia' );
      $klon.hide();

      $("div[data-id_pregunta='"+id+"']").after( $klon );

      $klon.show(300);


      var NuevaID=makeidfunction(10);

      $("div[data-id_pregunta='"+id+"']:last").attr('data-id_pregunta', NuevaID);


      window.setTimeout(function(){

        var DatosACopiar = jQuery.extend(true, {}, window.Preguntas[window.PreguntaActiva]);

        window.PreguntaActiva = NuevaID;
        window.Preguntas[window.PreguntaActiva]={}
        window.Preguntas[window.PreguntaActiva] = DatosACopiar;


        $(".cuadro_question_active:first").removeClass('cuadro_question_active');

        OrdenPreguntas();

        var Datos      ={}
        Datos.pregunta =window.Preguntas[Object.keys(window.Preguntas)[Object.keys(window.Preguntas).length-1]];
        Datos.key      =Object.keys(window.Preguntas)[Object.keys(window.Preguntas).length-1];
        Datos.orden    =window.Preguntas["orden"];

        AjaxRequest("POST", window.url+"/crear/quiz/duplicar-pregunta", Datos);
        $(".loader").hide();

      }, 200);

    }


    window.EliminarPregunta=function(idPregunta){


      $("div[data-id_pregunta='"+idPregunta+"']").hide(300, function(){
         $("div[data-id_pregunta='"+idPregunta+"']").remove();
      });

       var Dato={};

       Dato.id=idPregunta;

       AjaxRequest("POST", window.url+"/crear/quiz/eliminar-pregunta", Dato);

       $(".loader").hide();

    }


    window.SalirQuiz=function() {
      
      $(".cuadro_question_active").click();

      GuardarDatos();
      ValidarBorrador();

      window.location.href = window.url+"/recursos";

    }


    window.GuardarQuiz=function(){

      ValidateQuestion();
      window.ValidateCompleteForError();



       GuardarDatos();

        window.Borrador={}
        window.Borrador.borrador="0";
        $(".position-relative.alert_question_div").map(function(){
            if($(this).css("display")=="block"){
              window.Borrador.borrador= "1";
            }         
        });

       if (window.Borrador.borrador==1) {
         $('#QuizIncomplete').modal('show');
       } else{
         window.location.href=window.url+"/recursos";
       }

    }