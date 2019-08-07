@include("header")

<main class="text-grey">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center text-md-left font-weight-bold text-black">Puedes editar tu informacion</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 order-2 order-md-1">
                    @csrf
                    <form class="col-12 px-0" id="perfil_form" data-parsley-validate="" enctype="multipart/form-data">
                        <div class="alert alert-success update_profile_success_messaje d-none" role="alert">
                        </div>
                        <div class="form-group">
                            <label for="username_input">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" value="{{Auth::user()->username}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="name_input">Nombres</label>
                            <input type="text" class="form-control" id="nombres" value="{{Auth::user()->nombres}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="email_input">Email address</label>
                            <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="school_university_input">Organizacion</label>
                            <input type="text" class="form-control" id="universidad" value="{{Auth::user()->universidad}}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="user_type_input">User type</label>
                            <select class="form-control select-arrow" id="user_type_input">
                                <option>As a student</option>
                                <option>As a teacher</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="worplace_details_input">Espacio de trabajo</label>
                            <select class="form-control select-arrow" id="espacio_trabajo" value="{{Auth::user()->espacio_trabajo}}" required="">
                                <option>Escuela</option>
                                <option>Universidad</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="language_input">Preferred language</label>
                            <select class="form-control select-arrow" id="language_input">
                                <option>English</option>
                                <option>Español</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="bio_input">Bio</label>
                            <textarea class="form-control" id="biografia" rows="3" value="{{Auth::user()->biografia}}">{{Auth::user()->biografia}}</textarea>
                        </div>
                    </form>
                </div>
                <div class="col-11 col-md-6 text-center order-1 order-md-2">
                    <div class="col-12">
                        <label for="avatar" class="pointer">
                            <img width="82px" src="@if(Auth::user()->avatar=='') img/icons/Edu.png @else {{Request::root()."/img/fotos_perfil/".Auth::user()->avatar}} @endif" alt="Foto de Pefil" id="profile_avatar_up" class="img-fluid pt-4" width="25%">
                            <a>
                                <p class="update-pr py-4">Actualiza tu foto de perfil</p>
                            </a>
                        </label>
                        <input onchange="AjaxFileRequest('POST', '{{Request::root()}}/perfil/{{Auth::user()->id}}', 'avatar')" type="file" id="avatar" class="d-none">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 text-center text-md-right">
                    <hr>
                    <button onclick="ValidarGeneral('PUT', '{{Request::root()}}/perfil/{{Auth::user()->id}}', '', 'perfil_form')" type="button" class="col-12 col-md-3 col-lg-2 btn btn-success text-center font-weight-bold">Guardar cambios</button>
                </div>
            </div>
        </div>
    </main>


@include("footer")