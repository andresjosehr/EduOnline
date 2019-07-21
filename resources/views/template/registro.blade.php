<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/page/logo/favicon.png">
    <!-- Font -->
    <title>Registrer | EduOnline</title>
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
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="login.html">Already got an account?</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html"><button type="button" class="btn btn-light btn-header font-weight-bold">Login</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="text-grey">
        <div class="layout-circle"></div>
        <div class="layout-half-circle"></div>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center font-weight-bold mb-5 text-black">Your account details</h1>
                </div>
            </div>
            <div class="row justify-content-center pb-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 d-flex align-items-center">
                    <form class="col-12 px-0">
                        <div class="form-group">
                            <label for="school_university_input">Add your school or university (optional)</label>
                            <input type="text" class="form-control" id="school_university_input">
                        </div>
                        <div class="form-group">
                            <label for="worplace_details_input">Workplace details (required)</label>
                            <select class="form-control" id="worplace_details_input">
                                <option>School</option>
                                <option>University</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="username_input">Pick a username (required)</label>
                            <input type="text" class="form-control" id="username_input">
                        </div>
                        <div class="form-group">
                            <label for="email_input">Add your email address (required)</label>
                            <input type="email" class="form-control" id="email_input">
                        </div>
                        <div class="form-group">
                            <label for="password_input">Create a password (required)</label>
                            <input type="password" class="form-control" id="password_input">
                        </div>
                        <div class="form-group d-flex align-items-start">
                            <div class="col-1 text-center">
                                <input class="form-check-input m-0" type="checkbox" id="accept_terms_checkbox_input">
                            </div>
                            <div class="col-11 px-0">
                                <p>I have read and agree with the EduOnline! <a href="#">Terms and Conditions</a>. EduOnline! will colect and process data as described in the <a href="#">Privacy
                                        Policy</a>, and <a href="#">Children’s Privacy</a>
                                    Policy, (required)
                                </p>
                            </div>
                        </div>
                        <button type="submit" class="col-12 btn btn-info btn-login text-center font-weight-bold">Join EduOnline</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center py-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 d-flex align-items-center">
                    <div class="col-5 pl-0">
                        <hr>
                    </div>
                    <div class="col-2">
                        <p class="text-center m-0">or</p>
                    </div>
                    <div class="col-5 pr-0">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6">
                    <button class="col-12 btn btn-info btn-google text-center mb-3 font-weight-bold">Sign up with
                        Google</button>
                    <button class="col-12 btn btn-info btn-fb text-center font-weight-bold">Sign up with
                        Facebook</button>
                </div>
            </div>
            <div class="row justify-content-center py-5">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-left">
                    <p>I understand that I can withdraw my consent at any time and the withdrawal will not affect the lawfulness of the consent before its withdrawal, as described in
                        the EduOnline! <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="js/utility.js"></script>
</body>

</html>