@include("seguridad/header");
<main class="text-grey">
        <div class="layout-circle"></div>
        <div class="layout-half-circle"></div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold text-blue-sky mb-5">Reseteo de contraseña</h1>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center">
                	<div class="alert alert-success w-100 d-none" role="alert">
		              ¡Listo! Te hemos enviado un email
		            </div>
		            <div class="alert alert-danger w-100 d-none" role="alert">
                      Email no registrado
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 d-flex align-items-center">
                    <form class="col-12 px-0" id="reset_form" method="POST" data-parsley-validate="">
                        <div class="form-group">
                            <label for="email_input" class="font-weight-bold">Escribe tu direccion de correo</label>
                            <input type="email" class="form-control" id="email" id="email_input" placeholder="&#xf0e0; Email" required="required">
                        </div>
                        <button onclick="ValidarGeneral('POST', 'reset-pass', '', 'reset_form')" type="button" class="col-12 btn btn-info btn-login text-center font-weight-bold">Resetear contraseña</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-11 col-sm-9 col-xl-7 text-center">
                    <p class="pb-2"><em>Los correos electrónicos se recopilan solo para restablecer las contraseñas y se procesan de una manera al momento de la recopilación. EduOnline! recopila y procesa datos como se describe en nuestra <a href="#"> Política de privacidad y Política de privacidad infantil.</em></a></p>
                    <p class="pb-2"><a href="login"><em>Cancelar</em></a></p>
                    <p><em>Si te sientes desorientado, por favor <a href="#">haznolos saber</a></em></p>
                </div>
            </div>
        </div>
    </main>
@include("seguridad/footer");