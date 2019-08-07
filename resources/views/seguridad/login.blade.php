    @include("seguridad.header");

    <main>
        <div class="layout-circle"></div>
        <div class="layout-half-circle"></div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold text-blue-sky mb-5">ACCESO</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                    <div class="alert alert-success login_success_messaje d-none" role="alert">
                      Inicio de sesion correcto. Redirigiendo
                    </div>
                    <div class="alert alert-danger login_failed_messaje d-none" role="alert">
                      Credenciales invalidas
                    </div>
                    @if ($reset_password=="exito")
                        <div class="alert alert-success" role="alert">
                          Cambio de contraseña exitoso. Ahora puedes iniciar sesion
                        </div>
                    @endif
                    <form id="login_form" method="POST" class="pt-2" data-parsley-validate="">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="user" placeholder="&#xf007; Nombre de usuario o Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="&#xf023; Password" required="">
                        </div>
                        <button onclick="ValidarGeneral('POST', '{{Request::root()}}/seguridad/email', '', 'login_form')" type="button" class="col-12 btn btn-info btn-login text-center font-weight-bold login_btn_social btn_login_padding">Ingresar</button>
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
                    <a onclick='window.open("{{ route('seguridad.facebook', 'facebook') }}", "Ingresar", "width=780,height=410,toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0,left=" + 500 + ",top=" + 200);'  class="col-12 btn btn-info btn-fb text-center font-weight-bold login_btn_social">
                        <span class="float-left">
                            <img src="{{ asset('img/icons/facebook.png') }}" alt="facebook">
                        </span> 
                    Ingresar con Facebook</a>
                </div>
            </div>
            <div class="row justify-content-center pt-2">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center mt-3">
                    <p><em><a href="reset-pass">¿Olvidaste tu contraseña?</a></em></p>
                    <p><em>Si te sientes desorientado, por favor <a href="#">haznolos saber</a></em></p>
                </div>
            </div>
        </div>
    </main>





    @include("seguridad.footer");