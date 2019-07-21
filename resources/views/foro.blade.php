@include("header");

<div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-11">
                <div class="row border-bottom">
                    <h1 class="text-center text-md-left font-weight-bold text-black mb-2">Foro</h1>
                </div>
                <div class="row my-3">
                    <p class="new-topic">Borderlands 2 > General Discussion > New Topic</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 order-2 order-lg-1 pb-5 pb-lg-0">
                        <div class="box-color">
                            <div class="row m-0">
                                <div class="col-2">
                                    <div class="row">
                                        <div class="col-12 mt-3 p-2 d-flex align-items-center justify-content-center">
                                            <img src="img/photos/7.jpg" class="rounded-circle img-forum m-lg-0 ml-3">
                                            <div class="dot"></div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="row d-flex align-items-center justify-content-center p-lg-0 pl-3">
                                                <img src="img/icons/number3.png">
                                                <img src="img/icons/flag.png">
                                            </div>
                                            <div class="row d-flex align-items-center justify-content-center p-lg-0 pl-3">
                                                <img src="img/icons/tag.png">
                                                <img src="img/icons/medal.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="row p-3 pr-5">
                                        <input type="text" placeholder="Enter Topic Title" class="form-control px-3">
                                    </div>
                                    <div class="row pt-0 px-3 pb-3 pr-5">
                                        <div class="col-lg-6 mb-3 mb-lg-0 p-0 pr-lg-2">
                                            <select class="form-control">
                                                <option>Category</option>
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 p-0 pl-lg-2">
                                            <select class="form-control">
                                                <option>Subcategory</option>
                                                <option>Subcategory 1</option>
                                                <option>Subcategory 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pt-0 px-3 pb-3 pr-5">
                                        <textarea placeholder="Enter Topic Title" class="form-control"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 pr-0">
                                            <p class="share-txt text-left">
                                                Who can see this?
                                            </p>
                                        </div>
                                        <div class="col-6 p-0">
                                            <p class="share-txt text-left">
                                                Share on Social Networks
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                                <label class="custom-control-label pt-1" for="defaultInline1">Everyone</label>
                                            </div>

                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                                <label class="custom-control-label pt-1" for="defaultInline2">Only Friends</label>
                                            </div>
                                        </div>
                                        <div class="col-6 pl-0 d-sm-flex align-items-center">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                                <label class="custom-control-label d-flex align-items-center" for="defaultInline3"><img src="img/icons/facebook_icon.svg" height="20px"></label>
                                            </div>

                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline4">
                                                <label class="custom-control-label d-flex align-items-center" for="defaultInline4"><img src="img/icons/twitter_icon.svg" height="20px"></label>
                                            </div>

                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                                <label class="custom-control-label d-flex align-items-center" for="defaultInline5"><img src="img/icons/google_icon.svg" height="20px"></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 border-top p-3">
                                <div class="col-sm-9 m-0 p-0 pl-3 d-flex justify-content-center align-items-center custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                    <label class="custom-control-label pt-1" for="defaultInline6">Email me when someone posts a reply</label>
                                </div>
                                <div class="col-sm-3 p-0 text-right d-flex justify-content-center align-items-center">
                                    <i class="far fa-smile icon-smile p-3"></i>
                                    <button type="button" class="btn btn-succes btn-post font-weight-bold text-white">Post</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-2">
                            <div class="col-11 p-0">
                                <i class="fa fa-info-circle icon-info mr-3"></i>
                                <p class="topic-title" style="display:inline;">Similar posts according to your <span style="color:gray;">Topic Title</span> </p>
                            </div>
                            <div class="col-1 p-0 text-right">
                                <i class="fa fa-spinner"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4 pb-4 pb-lg-0 order-1 order-lg-2 ">
                        <div class="box-color col-12 py-2">
                            <div class="row px-4 pt-3 pb-2 border-bottom">
                                <p class="categories px-3 mb-0">Categories</p>
                            </div>
                            <div class="row px-4 py-1">
                                <div class="col-12 mt-2">
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Trading for Money</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Vault Keys Giveaway</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Misc Guns Location</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">50</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Looking for Players</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">36</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Stupid Bugs & Solve</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">41</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">Video & Audio Drivers</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-10 d-flex align-items-center pl-1">
                                            <p class="categories mb-0">2k Official Forums</p>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="num-cat px-2 d-flex justify-content-center">
                                                <p class="mb-0 py-1">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                	<div class="col-12">
                    	<div class="box-color">
                            <div class="row m-0">
                                <div class="col-2">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 mt-3 p-2 d-flex align-items-center justify-content-center">
                                            <img src="img/photos/2.jpg" class="img-forum rounded-circle m-lg-0 ml-3">
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col-12">
                                            <div class="row d-flex align-items-center justify-content-center">
                                                <img src="img/icons/number4.png">
                                                <img src="img/icons/flag.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 pt-4 pb-2 border-right">
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="text-black pb-2 font-weight-bold">10 Kids Unaware of Their Halloween Costume</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="topic-title">It’s one thing to subject yourself to a Halloween costume mishap because, hey. that’s your prerogative.</p>
                                    </div>
                                </div>
                                <div class="col-2 text-center pt-3 px-0">
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom pb-4">
                                        <div class="cuadro">
                                            <p class="m-0 p-2">560</p>
                                        </div>
                                        <div class="arrow-down"></div>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-eye"></i> 1,568</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center ">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-clock"></i> 24 min</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-2">
                        </div>
                        <div class="box-color">
                            <div class="row m-0">
                                <div class="col-2">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 mt-3 p-2 d-flex align-items-center justify-content-center">
                                            <img src="img/photos/3.jpg" class="img-forum rounded-circle m-lg-0 ml-3">
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col-12">
                                            <div class="row d-flex align-items-center justify-content-center">
                                                <img src="img/icons/number4.png">
                                                <img src="img/icons/flag.png">
                                            </div>
                                            <div class="row  d-flex align-items-center justify-content-center">
                                                <img src="img/icons/tag.png">
                                                <img src="img/icons/medal.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 pt-4 pb-2 border-right">
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="text-black pb-2 font-weight-bold">What Instagram Ads Will Look Like</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="topic-title">Instagram offered a first glimpse at what its ands will look like a blog post Thursday. The sample ad, which you can see below.</p>
                                    </div>
                                </div>
                                <div class="col-2 text-center pt-3 px-0">
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom pb-4">
                                        <div class="cuadro">
                                            <p class="m-0 p-2">89</p>
                                        </div>
                                        <div class="arrow-down"></div>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-eye"></i> 1,568</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center s">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-clock"></i> 15 min</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-2">
                        </div>
                        <div class="box-color">
                            <div class="row m-0">
                                <div class="col-2">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 mt-3 p-2 d-flex align-items-center justify-content-center">
                                            <img src="img/photos/2.jpg" class="img-forum rounded-circle m-lg-0 ml-3">
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col-12">
                                            <div class="row d-flex align-items-center justify-content-center">
                                                <img src="img/icons/number3-2.png">
                                                <img src="img/icons/flag.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 pt-4 pb-2 border-right">
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="text-black pb-2 font-weight-bold">The Future of Magazines Is on Tablets</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center">
                                        <p class="topic-title">Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association. </p>
                                    </div>
                                </div>
                                <div class="col-2 text-center pt-3 px-0">
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom pb-4">
                                        <div class="cuadro">
                                            <p class="m-0 p-2">89</p>
                                        </div>
                                        <div class="arrow-down"></div>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center border-bottom">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-eye"></i> 1,568</p>
                                    </div>
                                    <div class="row m-0 d-flex align-items-center justify-content-center">
                                        <p class="post-details m-0 p-lg-0 p-md-0 p-2"><i class="far fa-clock"></i> 15 min</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-2">
                        </div>
                        <div class="row m-2">
                        </div>
                        <div class="row text-center d-flex justify-content-center p-3">
                            <div class="row row justify-content-between m-0">
                                <a href="#" class="text-decoration-none pag-a"><i class="fa fa-less-than icon-arrow"></i></a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">1</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">2</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">3</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">4</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">5</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">6</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1">
                                    <p class="pag px-2">7</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">8</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">9</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">10</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">11</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">12</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">13</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">14</p>
                                </a>
                                <a href="#" class="text-decoration-none px-1 d-none d-lg-block">
                                    <p class="pag px-2">15</p>
                                </a>
                                <a href="#" class="text-decoration-none pag-a"><i class="fa fa-greater-than icon-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@include("footer");