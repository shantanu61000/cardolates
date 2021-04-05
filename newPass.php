<?php
if (isset($_GET['str']) && isset($_GET['action'])) {
    $token = hash("sha256", $_GET['str']);
    if ($_GET['action'] == 'resetpassword') {
        include('connection.php');
        $query = "select * from reset_tokens where token='$token'";
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_array($res);
            $createdOn = $row['createdon'];
            $diff =  (time() - strtotime($createdOn)) / 60;
            if ($diff > 10) {
?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Cardolates Reset Password</title>
                    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
                    <link rel="stylesheet" href="shared/nav/styles/nav.css">
                </head>
                <body>
                <?php include ("shared/nav/nav.php")?>
                    <h3 class="text-center mt-5">Password Reset Link Expired.</h3>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                    <p class="p-3"> <strong>Note: </strong> Reset links are only valid for 10 minutes from the time it was generated.</p>

                        </div>
                    </div>
                    <script src="node_modules/jquery/dist/jquery.min.js"></script>
                    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
                    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                    <script src="shared/nav/nav.js"></script>
                
                </body>
                </html>
            <?php
            } else {

            ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
                    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
                    <link rel="stylesheet" href="shared/nav/styles/nav.css">
                    <link rel="stylesheet" href="shared/floating label/floatingLabel.css">
                    <title>Cardolates Reset Password</title>
                    <style>
                        .newPass p.error {
                            font-size: 0.8rem;
                        }

                        .newPass p.response {
                            font-size: 0.9rem;
                        }
                    </style>
                </head>

                <body>
                    <?php include ("shared/nav/nav.php")?>
                    <div class="container newPass">
                        <div class="row justify-content-center" style="margin-top:100px">
                            <div class="col-sm-6 col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <h3 class="text-center" style="display: inline;">Cardolates.ml</h6> <span>Reset Password</span>
                                            </div>
                                        </div>
                                        <br>
                                        <form id="newPassForm">
                                            <div class="form-group">
                                                <label for="newPass" class="down">New Password</label>
                                                <input type="password" class="form-control transparentColor newPass" id="newPass">
                                                <p class="text-danger d-none error">Password is required</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="newPassC" class="down">Confirm New Password</label>
                                                <input type="password" class="form-control transparentColor newPassC" id="newPassC">
                                                <p class="text-danger d-none error">Confirm Password is required</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" class="m-0" value="showNewPass" id="showNewPass">&nbsp; <span style="font-size:0.8rem; color:#555"> Show Password </span>
                                            </div>
                                            <div class="form-group">
                                                <p class="response" style="font-size: 0.7rem;"></p>
                                                <button type="button" class="form-control btn changePassBtn" style="border:0px; background-color:#c70adc; font-weight:600; color:white; padding:0.475rem 12px">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="node_modules/jquery/dist/jquery.min.js"></script>
                    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
                    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                    <script src="shared/floating label/floatingLabel.js"></script>
                    <script src="shared/nav/nav.js"></script>
                    <script src="newPass.js"></script>
                </body>

                </html>

<?php
            }
        } else {
            echo "Invalid Link";
        }
    } else {
        echo "You cannot reset password. Errors encountered";
    }
} else {
    echo " Errors encountered";
}
?>