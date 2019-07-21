@include("header")

<main class="text-grey">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center text-md-left font-weight-bold text-black">Edit your information</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-6 order-2 order-md-1">
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
                            <select class="form-control select-arrow" id="user_type_input">
                                <option>As a student</option>
                                <option>As a teacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="worplace_details_input">Workplace details (required)</label>
                            <select class="form-control select-arrow" id="worplace_details_input">
                                <option>School</option>
                                <option>University</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="language_input">Preferred language</label>
                            <select class="form-control select-arrow" id="language_input">
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
                <div class="col-11 col-md-6 text-center order-1 order-md-2">
                    <div class="col-12">
                        <label for="edit_profile" class="pointer">
                            <img src="img/icons/Edu.png" alt="Profile Picture" class="img-fluid pt-4" width="25%">
                            <a>
                                <p class="update-pr py-4">Update your profile picture</p>
                            </a>
                        </label>
                        <input type="file" id="edit_profile" class="d-none">
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

@include("footer")