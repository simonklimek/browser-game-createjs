<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header and navigation
outputHeader("My Game Website - Profile");
outputNavigation("Profile");
?>


    <!-- Login flipping window and rules -->
    <section class="myrules">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class=" card flipcard card-flip h-100 flipcontainer shadowed">
                        <!-- SIGN UP CARD -->
                        <div class="front">
                            <div class="card-body">
                                <h3 class="card-title">create profile:</h3>
                                <p class="card-text">already have account? <br /><a onclick="flip()">click here to login</a></p>
                                <form name="registration-form" onsubmit="return false">
                                    <!-- prevents reload the page to see login status -->
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input name="femail" type="email" class="form-control" id="emailInput" required placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="nameInput" required placeholder="player name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="passwordInput" required placeholder="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary" onclick="storeUser()">create account</button>
                                            <p id="signupresult" style="color: #721c24;">all fields are required</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- LOGIN CARD -->
                        <div class="back">
                            <div class="card-body">
                                <h3 class="card-title">login to profile:</h3>
                                <p class="card-text">don't have account? <br /><a onclick="flip()">click here to sign up</a></p>
                                <form id="usrDetails" onsubmit="return false">
                                    <div class="form-group row">
                                        <!--<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>-->
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="emailLoginInput" required placeholder="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="passwordLoginInput" required placeholder="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary" onclick="login()">log in</button>
                                            <!-- ERROR / SUCCESS MESSAGE -->
                                            <p id="loginFailure" style="color: #721c24;"> </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RULES RIGHT CARD  -->
                <div class="col-lg-8">
                    <div class="card shadowed">
                        <div class="card-body">
                            <h3 class="card-title">banks game rules:</h3>
                            <p class="card-text">Choose position on the map x:(0-400) y:(0-300) and type in the command window and hit Drop!
                                <br><br>example: 150:50</p>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img src="assets/clock.png" width="90px" />
                                    <p>no time limit</p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <img src="assets/nav.png" width="80px" />
                                    <p>command & conquer</p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <img src="assets/tank.png" width="130px" />
                                    <p>two weapons available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php
//Output the footer and scripts
outputFooter();
outputScripts();
?>