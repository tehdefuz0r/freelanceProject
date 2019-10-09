<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> <!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top -->

<div class="container"> <!-- container Starts -->

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"> <!-- navbar-toggler Starts -->

        <span class="navbar-toggler-icon"></span>

    </button> <!-- navbar-toggler Ends -->

    <a class="navbar-brand" href="http://localhost/freelanceProject/test.php">Proiect Testing</a>

    <a class="navbar-toggler" href="http://localhost/freelanceProject/mobile_categories.php">
        <i class="fa fa-th-large" style="font-size:1.5em;"></i>
    </a>

</div> <!-- container Ends -->

<div class="collapse navbar-collapse" id="navbarNav">

<hr>

    <form class="form-inline mr-auto" method="post">

        <div class="input-group">

            <input type="text" class="form-control" required placeholder="Search proposals" name="search_query">

            <span class="input-group-btn">

                <button class="btn btn-primary" name="search" type="submit">

                    <i class="fa fa-search"></i>

                </button>

            </span>

        </div>

    </form>

    <hr>

    <ul class="navbar-nav">

        <li class="nav-item active"> <a href="http://localhost/freelanceProject/test.php" class="nav-link"> Acasa </a> </li>

        <li class="nav-item"> <a href="#" class ="nav-link" data-toggle="modal" data-target="#register-modal">Devin-o un vanzator!</a>  </li>

        <li class="nav-item"> <a href="#" class ="nav-link" data-toggle="modal" data-target="#login-modal">Logheaza-te</a>  </li>

        <li class="nav-item"> <a href="#" class ="btn btn-primary" data-toggle="modal" data-target="#register-modal">Inregistreaza-te</a>  </li>

    </ul>

</div>

</nav> <!-- navbar navbar-expand-lg navbar-dark bg-dark fixed-top Ends -->

<?php include("category_nav.php"); ?>

<div class="alert alert-danger text-center mb-0 h6"> <!-- alert alert-danger text-center mb-0 h6 Starts -->

    <i class="fa fa-exclamation-circle"> </i>
    EROARE, EROARE, CEVA E IN NEREGULA!

</div> <!-- alert alert-danger text-center mb-0 h6 Ends -->

<div class="modal fade" id="register-modal"> <!-- modal fade Starts -->

    <div class="modal-dialog"> <!-- modal-dialog Starts -->

        <div class="modal-form register modal-content"> <!-- modal-form register modal-content Starts -->

            <div class="modal-header"> <!-- modal-header Starts -->

                <h5 class="modal-title"> Register Account </h5>

                <button class="close" data-dismiss="modal">

                    <span>&times;</span> <!-- &times este X pentru CLOSE -->

                </button>

            </div> <!-- modal-header Ends -->

            <div class="modal-body"> <!-- modal-body Starts -->

                <form action="" method="post">

                    <div class="form-group"> <!-- form-group Starts -->

                        <label class="form-control-label font-weight-bold"> Full Name </label>

                        <input type="text" class="form-control" name="name" placeholder="Enter your full name">

                    </div> <!-- form-group Ends -->

                    <div class="form-group"> <!-- form-group Starts -->

                        <label class="form-control-label font-weight-bold"> Username </label>

                        <input type="text" class="form-control" name="username" placeholder="Enter your username">

                        <small class="form-text text-muted">

                            Username-ul nu poate fi schimbat dupa crearea contului.

                        </small>

                    </div> <!-- form-group Ends -->

                    <div class="form-group"> <!-- form-group Starts -->

                        <label class="form-control-label font-weight-bold"> Email Address </label>

                        <input type="email" class="form-control" name="email" placeholder="Enter your email address">

                    </div> <!-- form-group Ends -->

                    <div class="form-group"> <!-- form-group Starts -->

                        <label class="form-control-label font-weight-bold"> Password </label>

                        <input type="password" class="form-control" name="password" placeholder="Enter your password">

                    </div> <!-- form-group Ends -->

                    <div class="form-group"> <!-- form-group Starts -->

                        <label class="form-control-label font-weight-bold"> Confirm Password </label>

                        <input type="password" class="form-control" name="con-password" placeholder="Enter your password again">

                    </div> <!-- form-group Ends -->

                    <input type="submit" name="register" class="btn btn-success btn-block" value="Register Here">

                </form>

            </div> <!-- modal-body Ends -->


        </div> <!-- modal-form register modal-content Ends -->

    </div> <!-- modal-dialog Ends -->

</div> <!-- modal fade Ends -->

<div class="modal fade" id="login-modal"> <!-- modal fade Starts -->

    <div class="modal-dialog"> <!-- modal-dialog Starts -->

        <div class="modal-form login modal-content"> <!-- modal-form login modal-content Starts -->

            <div class="modal-header"> <!-- modal-header Starts -->

                <h5 class="modal-title"> Login to your account</h5>

                <button type="button" class="close" data-dismiss="modal">

                    <span>&times;</span> <!-- &times este X pentru CLOSE -->

                </button>

            </div> <!-- modal-header Ends -->

            <div class="modal-body"> <!-- modal-body Starts -->

                <div class="form-group"> <!-- form-group Starts -->

                    <input type="text" class="form-control" name="seller_user_name" placeholder="Username">

                </div> <!-- form-group Ends -->

                <div class="form-group"> <!-- form-group Starts -->

                    <input type="password" class="form-control" name="seller_pass" placeholder="Password">

                </div> <!-- form-group Ends -->

                <input type="submit" name="login" class="btn btn-success btn-block" value="Login">

                <div class="text-center mt-3"> <!-- text-center mt-3 Starts -->

                    <a href="#" data-toggle="modal" data-target="#register-modal" data-dismiss="modal"> Register </a>

                    &nbsp;&nbsp; | &nbsp;&nbsp;

                    <a href="#" data-toggle="modal" data-target="#forgot-modal" data-dismiss="modal"> Forgot Password </a>

                </div> <!-- text-center mt-3 Ends -->

            </div> <!-- modal-body Ends -->

        </div> <!-- modal-form login modal-content Ends -->

    </div> <!-- modal-dialog Ends -->

</div> <!-- modal fade Ends -->

<div class="modal fade" id="forgot-modal"> <!-- modal fade Starts -->

    <div class="modal-dialog"> <!-- modal-dialogue Starts -->

        <div class="modal-form forgot modal-content"> <!-- modal-form forgot modal-content Starts -->

            <div class="modal-header"> <!-- modal-header Starts -->

                <h5 class="modal-title"> Recover your password</h5>

                <button type="button" class="close" data-dismiss="modal">

                    <span>&times;</span> <!-- &times este X pentru CLOSE -->

                </button>

            </div> <!-- modal-header Ends -->

            <div class="modal-body"> <!-- modal-body Starts -->

                <p class="text-muted text-center mb-2"> <!-- text-muted text-center mb-2 Starts -->

                    Enter your bitch-ass-nigga profile email & and we'll Hiroshima your password reset link...

                </p> <!-- text-muted text-center mb-2 Ends -->

                <form action="" method="post">

                    <div class="form-group"> <!-- form-group Starts -->

                        <input type="text" class="form-control" name="forgot_email" placeholder="Enter Email">

                    </div> <!-- form-group Ends -->

                    <input type="submit" name="forgot" class="btn btn-success btn-block" value="Submit">

                    <p class="text-muted text-center mt-2"> <!-- text-muted text-center mt-2 Starts -->

                        Not a member yet?

                        <a href="#" data-target="#register-modal" data-toggle="modal" data-dismiss="modal"> Register now!</a>

                    </p> <!-- text-muted text-center mt-2 Ends -->

                </form>

            </div> <!-- modal-body Ends -->

        </div> <!-- modal-form forgot modal-content Ends -->

    </div> <!-- modal-dialog Ends -->

</div> <!-- modal fade Ends -->