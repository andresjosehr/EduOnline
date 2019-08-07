<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>window.url='{{Request::root()}}'</script>
    
    <title> Acceso | EduOnline</title>
</head>

<body>
    <header>
        @if (Auth::user()->email_confirm_code!=null)
        <div class="panel panel-default" align="center">
          <div class="alert alert-warning alert-dismissible fade show mb-0 py-2" role="alert">
              <strong>¡Atencion!</strong> <i class="fa fa-exclamation-circle"></i> Te hemos enviado un correo electronico para poder verificar tu cuenta
              <button type="button" class="close py-2" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
        @endif
        <nav class="navbar navbar-expand-lg bg-violet navbar-dark">
            <a class="col-5 col-sm-3 col-lg-2 col-xl-1 navbar-brand" href="{{ route('escritorio') }}">
                <img src="{{ asset('img/page/logo/logo.png') }}" class="img-fluid" width="100%" alt="EduOnline-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="{{ route('escritorio') }}"><i class="fa fa-home"></i>
                            Escritorio</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="{{ route('descubrir') }}"><i class="fa fa-compass"></i>
                            Descubrir</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="{{ route('recursos') }}"><i class="fa fa-list"></i>
                            Mis recursos</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="{{ route('foro') }}"><i class="fa fa-comments"></i>
                            Foro</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="ml-lg-4 nav-item">
                        <a href="crear"><button type="button" class="btn btn-light btn-header font-weight-bold">Crear</button></a>
                    </li>
                    <li class="col nav-item d-flex justify-content-center pt-3 pt-lg-0">
                        <a href="#"><i class="ml-lg-4 fa fa-bell text-white"></i></a>
                        <a href="cerrar_sesion"><i class="ml-lg-4 fa fa-cog text-white"></i></a>
                        <div class="dropdown">
                            <a href="#" id="dropdownMenuButton" data-toggle="dropdown"><i class="ml-lg-4 fa fa-cog text-white"></i></a>
                            <div class="dropdown-menu dropdown-menu-right mt-3 w-auto" aria-labelledby="dropdownMenuButton" style="width: 400px !important">
                              <span class="dropdown-item font-weight-bold color_prin"><i class="fa fa-user mr-2" style="font-size: 17px"></i> {{Auth::user()->email}}</span>
                              <a class="dropdown-item dropdown-item_sub_config pl-5" href="#">Mi perfil</a>
                              <a class="dropdown-item dropdown-item_sub_config pl-5" href="perfil">Editar cuenta</a>
                              <a class="dropdown-item dropdown-item_sub_config pl-5" href="{{ route('cambio-pass') }}">Cambiar Contraseña</a>
                              <a class="dropdown-item dropdown-item_sub_config pl-5" href="#">Eliminar mi cuenta</a>
                              <div class="dropdown-divider"></div>
                              <span class="dropdown-item font-weight-bold color_prin"><i class="fa fa-folder mr-2" style="font-size: 17px"></i>
                                @if (Auth::user()->universidad!="") {{Auth::user()->universidad}}
                                @else Añade tu colegio o universidad
                                @endif
                              </span>
                              <a class="dropdown-item dropdown-item_sub_config pl-5" href="#">Comprar un plan</a>
                              <div class="dropdown-divider"></div>
                              <a href="cerrar_sesion" class="dropdown-item text-danger font-weight-bold color_prin"><i class="fa fa-close mr-2" style="font-size: 17px"></i> Cerrar sesion</a>
                            </div>
                        </div>
                        <a href="#"><i class="ml-lg-4 fa fa-info-circle text-white"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>