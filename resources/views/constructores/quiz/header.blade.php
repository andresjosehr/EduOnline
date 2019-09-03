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

<body id="quiz_page" style="background: #f2f2f2">
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
                        <div class="quiz_settings cursor-pointer" onclick="$('#QuizSettings').modal('show');">
                          <div class="row h-100">
                            <div class="col-8 pl-4">
                              <p class="text-secondary font-weight-bold title_config_quiz ml-1">Ingresa el titulo...</p>
                            </div>
                            <div class="col-4" align="right">
                              <button type="button" class="btn btn-header-quiz btn-header font-weight-bold mt-1 mr-1">Config</button>
                            </div>
                          </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="ml-lg-2 nav-item nav-item-quiz">
                        <button type="button" class="btn btn-light btn-header font-weight-bold btn_quiz_visualizar text-white btn_quiz_header">Visualizar</button>
                    </li>
                    <li class="ml-lg-2 nav-item nav-item-quiz">
                        <button type="button" class="btn btn-light btn-header font-weight-bold btn_quiz_salir text-white btn_quiz_header">Salir</button>
                    </li>
                    <li class="ml-lg-2 nav-item nav-item-quiz">
                        <button type="button" class="btn btn-light btn-header font-weight-bold text-white btn_quiz_hecho btn_quiz_header">Hecho</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
