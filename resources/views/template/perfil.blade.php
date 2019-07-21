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
    <title>Edit Profile | EduOnline</title>
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
                        <a class="nav-link text-white font-weight-bold" href="#"><i class="fas fa-home"></i>
                            Home</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="#"><i class="far fa-compass"></i>
                            Discover</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="#"><i class="fas fa-bars"></i>
                            EduOnline</a>
                    </li>
                    <li class="ml-3 nav-item">
                        <a class="nav-link text-white font-weight-bold" href="#"><i class="fas fa-chart-bar"></i>
                            Reports</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="ml-lg-4 nav-item">
                        <a href="#"><button type="button" class="btn btn-light btn-header font-weight-bold">Create</button></a>
                    </li>
                    <li class="col nav-item d-flex justify-content-center pt-3 pt-lg-0">
                        <a href="#"><i class="ml-lg-4 fas fa-bell text-white"></i></a>
                        <a href="#"><i class="ml-lg-4 fas fa-cog text-white"></i></a>
                        <a href="#"><i class="ml-lg-4 fas fa-info-circle text-white"></i></a>
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
                    <h1 class="text-center text-md-left font-weight-bold text-black">Edit your information</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-11 col-md-6">
                    <form class="col-12 px-0">
                        <div class="form-group">
                            <label for="username_input">Username</label>
                            <input type="text" class="form-control" id="username_input">
                        </div>
                        <div class="form-group">
                            <label for="name_input">Name</label>
                            <input type="text" class="form-control" id="username_input">
                        </div>
                        <div class="form-group">
                            <label for="email_input">Email address</label>
                            <input type="email" class="form-control" id="email_input">
                        </div>
                        <div class="form-group">
                            <label for="school_university_input">Organization</label>
                            <input type="text" class="form-control" id="school_university_input">
                        </div>
                        <div class="form-group">
                            <label for="user_type_input">User type</label>
                            <select class="form-control" id="user_type_input">
                                <option>As a student</option>
                                <option>As a teacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="worplace_details_input">Workplace details (required)</label>
                            <select class="form-control" id="worplace_details_input">
                                <option>School</option>
                                <option>University</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="language_input">Preferred language</label>
                            <select class="form-control" id="language_input">
                                <option>English</option>
                                <option>Español</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bio_input">Bio</label>
                            <textarea class="form-control" id="bio_input" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-11 col-md-6 text-center">
                    <div class="col-12">
                        <img src="img/profile-picture/Edu.png" alt="Profile Picture" class="img-fluid pt-4" width="25%">
                        <p class="text-underline py-4">Update your profile picture</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 text-center text-md-right">
                    <hr>
                    <button type="submit" class="col-12 col-md-3 col-lg-2 btn btn-success text-center font-weight-bold">Save changes</button>
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