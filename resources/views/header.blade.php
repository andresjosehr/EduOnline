<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>Acceso | EduOnline</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-violet navbar-dark">
            <a class="col-5 col-sm-3 col-lg-2 col-xl-1 navbar-brand" href="#">
                <img src="img/page/logo/logo.png" class="img-fluid" width="100%" alt="EduOnline-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="escritorio"><i class="fa fa-home"></i>
                            escritorio</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="descubrir"><i class="fa fa-compass"></i>
                            Descubrir</a>
                    </li>
                   {{--  <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="#"><i class="fa fa-bars"></i>
                            EduOnline</a>
                    </li> --}}
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="foro"><i class="fa fa-comments"></i>
                            Foro</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="ml-lg-4 nav-item">
                        <a href="#"><button type="button" class="btn btn-light btn-header font-weight-bold">Create</button></a>
                    </li>
                    <li class="col nav-item d-flex justify-content-center pt-3 pt-lg-0">
                        <a href="#"><i class="ml-lg-4 fa fa-bell text-white"></i></a>
                        <a href="cerrar_sesion"><i class="ml-lg-4 fa fa-cog text-white"></i></a>
                        <a href="#"><i class="ml-lg-4 fa fa-info-circle text-white"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>