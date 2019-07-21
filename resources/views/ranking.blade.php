@include("header");
<main>
        <div class="container mt-5">
            <div class="row text-center mb-5">
                <div class="col-sm-4">
                    <div class="card align-items-center">
                        <img src="img/photos/1.jpg" class="card-img my-4" alt="persona1" title="persona1">
                        <div class="">
                            <p class="card-text">Lorem ipsum</p>
                            <hr class="">
                            <a href="#">See this profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 py-4 py-sm-0">
                    <div class="card align-items-center">
                        <img src="img/photos/2.jpg" class="card-img my-4" alt="persona2" title="persona2">
                        <div class="">
                            <p class="card-text">Lorem ipsum</p>
                            <hr class="">
                            <p class="m-0"><span class="arrow-up">▲</span> 4 positions</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card align-items-center">
                        <img src="img/photos/3.jpg" class="card-img my-4" alt="persona3" title="persona3">
                        <div class="">
                            <p class="card-text">Lorem ipsum</p>
                            <hr class="">
                            <p class="m-0"><span class="arrow-up">▲</span> 2 positions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row col-12 justify-content-between m-0 p-0">
                        <p class="text-x1 m-1">MY FOLLOWING AND ME</p>
                        <p class="text-x2 m-1">FIND ME IN THE LEADERBOARD?</p>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-12">
                    <div class="row alert-box d-flex align-items-center justify-content-between mb-4 px-3">
                        <div class="col-10">
                            <p class="text-alert my-2">You want to compare yourself with your friends? If so <a href="#" class="alert-a">invite them</a> right now.</p>
                        </div>
                        <div class="col-2 text-right">
                            <a href="#" class="undecorated text-alert my-2"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 table-wrapper-scroll-y">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="img/photos/4.jpg" class="users-list-img" alt=""></td>
                                <td>Dennis Porter</td>
                                <td>Marathon Training</td>
                                <td>6,082 total points</td>
                                <td>2,020 points to go</td>
                                <td><span class="arrow-up">▲</span> 4 positions</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="img/photos/5.jpg" class="users-list-img" alt=""></td>
                                <td>Victoria Palmer</td>
                                <td>Victoria has no club</td>
                                <td>5,826 total points</td>
                                <td>256 points to go</td>
                                <td><span class="arrow-up">▲</span> 2 positions</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><img src="img/photos/6.jpg" class="users-list-img" alt=""></td>
                                <td>Joshua Armstrong</td>
                                <td>Early Birds</td>
                                <td>5,107 total points</td>
                                <td>719 points to go</td>
                                <td><span class="arrow-up red">▼</span> 2 positions</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><img src="img/photos/7.jpg" class="users-list-img" alt=""></td>
                                <td>Alice Reyes</td>
                                <td>Alice has no club</td>
                                <td>4,013 total points</td>
                                <td>1,094 points to go</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><img src="img/photos/8.jpg" class="users-list-img" alt=""></td>
                                <td>Tyler Carpenter</td>
                                <td>Tyler has no club</td>
                                <td>2,982 total points</td>
                                <td>1,031 points to go</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><img src="img/photos/9.jpg" class="users-list-img" alt=""></td>
                                <td>Russel Shaw</td>
                                <td>Half Marathon Training</td>
                                <td>@2,005 total points</td>
                                <td>977 points to go</td>
                                <td><span class="arrow-up">▲</span> 1 positions</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><img src="img/photos/10.jpg" class="users-list-img" alt=""></td>
                                <td>Melissa Collins</td>
                                <td>Early Birds</td>
                                <td>@930 total points</td>
                                <td>1,075 points to go</td>
                                <td><span class="arrow-up red">▼</span> 1 positions</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row text-center justity-content-center py-5">
                <div class="col-3 col-12 m-0">
                    <a href="#" class="pagination_arrow mr-2 p-2">◄</a>
                    <a href="#" class="pagination_numbers px-1 p-2">1</a>
                    <a href="#" class="pagination_numbers px-1 p-2">2</a>
                    <a href="#" class="pagination_numbers px-1 p-2">3</a>
                    <a href="#" class="pagination_numbers px-1 p-2">4</a>
                    <a href="#" class="pagination_numbers px-1 p-2">5</a>
                    <a href="#" class="pagination_arrow ml-2 p-2">►</a>
                </div>
            </div>
        </div>
    </main>


@include("footer");