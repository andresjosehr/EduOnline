<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <script>window.url='{{Request::root()}}'</script>

    <!-- Font -->
    <title>Acceso | EduOnline</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-violet navbar-dark">
            <a class="col-5 col-sm-3 col-lg-2 col-xl-1 navbar-brand" href="#">
                <img src="{{ asset('img/page/logo/logo.png') }}" class="img-fluid" width="100%" alt="EduOnline-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link text-white mr-3" href="registrer.html"> ¿Aun sin cuenta?</a>
                    </li>
                    <li class="nav-item">
                        <a href="registro"><button type="button" class="btn btn-light btn-header font-weight-bold">Registrarse</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>