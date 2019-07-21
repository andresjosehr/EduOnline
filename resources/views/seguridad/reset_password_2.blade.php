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
                    <form class="col-12 px-0" id="reset_form2" method="POST" data-parsley-validate="">
                        <div class="form-group">
                            <label for="email_input" class="font-weight-bold">Escribe tu nueva contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="&#xf023;" required="required"
                            data-parsley-minlength="8"
                            data-parsley-uppercase="1"
                            data-parsley-lowercase="1"
                            data-parsley-number="1"
                            data-parsley-special="1"
                            data-parsley-required>
                        </div>
                        <div class="form-group">
                            <label for="email_input" class="font-weight-bold">Repite tu nueva contraseña</label>
                            <input type="password" class="form-control" id="password2" placeholder="&#xf023;" required="required"
                            data-parsley-minlength="8"
                            data-parsley-equalto="#password"
                            data-parsley-required />
                        </div>
                        <button onclick="ValidarGeneral('POST', '../reset-pass-2/{{$Codigo}}', '', 'reset_form2')" type="button" class="col-12 btn btn-info btn-login text-center font-weight-bold">Resetear contraseña</button>
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