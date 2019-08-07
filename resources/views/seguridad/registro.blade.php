@include("seguridad/header");
<main class="account-type">
    <div class="layout-circle"></div>
    <div class="layout-half-circle"></div>
    <div class="container pt-5 d-flex align-items-center justify-content-center">
      <div class="row mt-n10">
        <div class="col-12">
          <h1 class="text-center font-weight-bold text-black mb-5">Quiero usar EduOnline:</h1>
        </div>
        <div class="col-12 justify-content-center pb-5 d-sm-flex">
          <div class="col-sm-6 text-center text-sm-right">
            <button onclick="TipodeCuenta('2')" class="col-9 col-md-9 col-lg-6 btn btn-warning btn-teacher text-center text-md-left font-weight-bold">Como <br>profesor</button>
          </div>
          <div class="col-sm-6 pt-5 pt-sm-0 text-center text-sm-left">
            <button onclick="TipodeCuenta('3')" class="col-9 col-md-9 col-lg-6 btn btn-warning btn-student text-center text-md-left font-weight-bold">Como<br>estudiante</button>
          </div>
        </div>

      </div>
    </div>
  </main>


<div class="register_form" style="display: none">
   <div class="layout-circle"></div>
   <div class="layout-half-circle"></div>
   <div class="container-fluid pt-3">
      <div class="row text-left">
         <div class="col-12 pl-sm-4">
            <a onclick="RegresarRegistro()" href="#" class="no-underline">
               <p><i class="fa fa-chevron-left pr-2"></i> Volver</p>
            </a>
         </div>
      </div>
   </div>
   <div class="container pt-2 text-grey">
      <div class="row justify-content-center">
         <div class="col-12">
            <h1 class="text-center font-weight-bold mb-5 text-black">Detalles de tu cuenta</h1>
         </div>
      </div>
      	<div class="row justify-content-center pb-3">
         	<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center">
		      	<div class="alert alert-success registro_success_messaje d-none w-100" role="alert">
		          Registro exitoso. Redirigiendo
		        </div>
		    </div>
		</div>
      <div class="row justify-content-center pb-3">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center">
            <form class="col-12 px-0" id="registro_form">
              @csrf
            	<input type="hidden" id="rol">
               <div class="form-group">
                  <label for="school_university_input">Escribe tus nombres (requerido)</label>
                  <input type="text" class="form-control" id="nombres" required="">
               </div>
               <div class="form-group">
                  <label for="school_university_input">Escribe tu escuela o universidad (opcional)</label>
                  <input type="text" class="form-control" id="universidad">
               </div>
               <div class="form-group">
                  <label for="worplace_details_input">Espacio de trabajo (requerido)</label>
                  <select class="form-control" id="espacio_trabajo" required="">
                     <option>Escuela</option>
                     <option>Universidad</option>
                  </select>
               </div>
               <div class="form-group">
                  <hr>
               </div>
               <div class="form-group">
                  <label for="username_input">Nombre de usuario (requerido)</label>
                  <input type="text" class="form-control" id="username" required="">
               </div>
               <div class="form-group">
                  <label for="email_input">Correo Electronico (requerido)</label>
                  <input type="email" class="form-control" id="email" required="">
               </div>
               <div class="form-group">
                  <label for="password_input">Contraseña (requerida)</label>
                  <input type="password" class="form-control" id="password"
                 	 data-parsley-minlength="8"
                  	 data-parsley-uppercase="1"
                  	 data-parsley-lowercase="1"
                  	 data-parsley-number="1"
                  	 data-parsley-special="1"
                  	 data-parsley-required>
               </div>
               <div class="form-group d-flex align-items-start">
                  <div class="col-1 text-center">
                     <input class="form-check-input m-0" type="checkbox" id="accept_terms_checkbox_input" required="">
                  </div>
                  <div class="col-11 px-0">
                     <p>He leido y estoy de acuerdo con los <a href="#">Terminos y Condiciones</a> de EduOnline!. EduOnline! recopilará y procesará los datos como se describe en la <a href="#"> Política de privacidad </a> y <a href="#"> Política de privacidad infantil. </a> (obligatorio)
                     </p>
                  </div>
               </div>
               <button type="button" onclick="ValidarGeneral('POST', '{{Request::root()}}/seguridad/registro', '', 'registro_form')" class="col-12 btn btn-info text-white btn-login text-center font-weight-bold">Unirme a EduOnline</button>
            </form>
         </div>
      </div>
      <div class="row justify-content-center py-3">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center">
            <div class="col-5 pl-0">
               <hr>
            </div>
            <div class="col-2">
               <p class="text-center m-0">o</p>
            </div>
            <div class="col-5 pr-0">
               <hr>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                    <a class="col-12 btn btn-info btn-google text-center mb-3 font-weight-bold login_btn_social">
                        <span class="float-left">
                            <img src="{{ asset('img/icons/google.png') }}" alt="google">
                        </span>
                         Ingresar con Google
                     </a>
                    <a href="{{ route('seguridad.facebook', 'facebook') }}"  class="col-12 btn btn-info btn-fb text-center font-weight-bold login_btn_social">
                        <span class="float-left">
                            <img src="{{ asset('img/icons/facebook.png') }}" alt="facebook">
                        </span> 
                    Ingresar con Facebook</a>
                </div>
            </div>
      <div class="row justify-content-center py-5">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-left">
            <p>Entiendo que puedo retirar mi consentimiento en cualquier momento y que el retiro no afectará la legalidad del consentimiento antes de su retiro, como se describe en la <a href="#">Politica de Privacidad</a> EduOnline!
            </p>
         </div>
      </div>
   </div>
</div>
@include("seguridad/footer");