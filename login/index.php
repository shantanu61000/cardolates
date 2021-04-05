<?php
session_start();
    if(isset($_SESSION["cardolates_user_id"])){
        header("Location: ../compose");
    }
    else{
        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardolates - Login / Sigup Page</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../shared/floating label/floatingLabel.css">
    <link rel="stylesheet" href="../shared/nav/styles/nav.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-labelledby="forgotPassLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPassLabel">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="forgotPassForm">
                    <div class="modal-body">
                        <div class="form-group m-0">
                            <label for="forgotEmail" class="down">Email</label>
                            <input type="email" class="form-control m-0" name="forgotEmail" id="forgotEmail" required>
                            <p class="text-danger forgotPassError"></p>
                            <p class="text-success emailSentSuccess"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="forgotSubmitBtn"> <span class="forgotPassSpinner"></span> Get Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" id="signUpForm">
                        <div class="form-group">
                            <label for="signUpEmail" class="down">Email</label>
                            <input type="email" id="signUpEmail" name="signUpEmail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="signUpPass" class="down">Password</label>
                            <input type="password" id="signUpPass" name="signUpPass" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="signUpCnfPass" class="down">Confirm Password</label>
                            <input type="password" id="signUpCnfPass" name="signUpCnfPass" class="form-control" required>
                        </div>
                        <p class="error d-none" id="signUpError">

                        </p>
                        <button value="abc" type="submit" class="send-btn" name="signUpBtn" id="signUpBtn"> Sign Up </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php include("../shared/nav/nav.php") ?>
    <div class="breadcrub d-md-none">
        <img src="../img/back.png" alt="Back Button" class="img-fluid">
        <span>&nbsp; Login </span>
    </div>
    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-5 mt-5 d-none d-sm-block">
                    <img src="../img/ID Card-amico.svg" alt="ID card" class="img-fluid">
                </div>
                <div class="col-12 col-sm-6 col-lg-4 offset-md-1">
                    <div class="row justify-content-center">
                        <div class="col-3 p-0">
                            <img src="../img/logo2.svg" alt="Cardolates Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-12">
                            <h3 class="welcome-text">Welcome to Cardolates</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-12 mt-2">
                            <form method="POST" id="loginForm">
                                <div class="form-group">
                                    <label for="email" class="down">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="down">Password</label>
                                    <input type="password" id="pass" name="pass" class="form-control" required>
                                </div>
                                <p class="error d-none" id="loginError"></p>
                                <div class="form-group mb-3">
                                    <button type="submit" class="send-btn" name="loginBtn" id="loginBtn">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <p class="forgot-pass" data-toggle="modal" data-target="#forgotPass" style="cursor: pointer;">Forgot Password ?</p>
                            <div class="form-group">
                                <button class="modal-btn" type="button" data-toggle="modal" data-target="#signUpModal">Sign Up</button>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center mt-4 mb-5">
                        <div class="col-11 col-sm-12 ellipse"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../shared/floating label/floatingLabel.js"></script>
<script src="../shared/nav/nav.js"></script>
<script type="module" src="login.js"></script>

</html>
        <?php
    }

?>