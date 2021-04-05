<?php
session_start();
if (!isset($_SESSION["cardolates_user_id"])) {
    header("Location:../login/");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cardolates - My Profile</title>
        <link rel="icon" type="image/png" href="../img/favicon.png">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../shared/nav/styles/nav.css">
        <link rel="stylesheet" href="styles/profile.css">
    </head>

    <body>
        <?php include("../shared/nav/nav.php"); ?>
        <div class="breadcrub">
            <img src="../img/back.png" alt="Back Button" class="img-fluid">
            <span>&nbsp;Profile </span>
        </div>
        <section class="profile-section">
            <div class="container mb-5">
                <form method="POST" id="profileForm">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3 col-sm-2 col-lg-1">
                            <div class="profile-icon"> <span><?php echo $_SESSION["cardolates_user_shortname"]?></span> </div>
                        </div>
                        <div class="col-11 col-sm-auto">
                            <p class="user-email">-</p>
                            <p class="user-plan">Plan - Free</p>
                            <button type="button" class="edit-profile-btn text-center">Edit Profile</button>
                            <button type="submit" class="save-profile-btn text-center d-none">Save</button>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <p class="error d-none profileError"></p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-sm-6">
                            <div class="form-group row justify-content-center align-items-center">
                                <label for="name" class="col-10 col-sm-3 col-form-label form-label pl-0">Name</label>
                                <input type="text" name="name" id="name" class="col-10 col-sm form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="gender" class="col-10 col-sm-3 col-form-label form-label pl-0">Gender</label>
                                <select name="gender" id="gender" class="col-10 col-sm form-control" disabled required>
                                    <option value="null"></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="college" class="col-10 col-sm-3 col-form-label form-label pl-0">College</label>
                                <select name="college" id="college" class="col-10 col-sm form-control" disabled required>
                                    <option value="null"></option>
                                    <option value="1">St. Xavier's College - Mumbai (Autonomous)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="uid" class="col-10 col-sm-3 col-form-label form-label pl-0">UID</label>
                                <input type="number" name="uid" id="uid" class="col-10 col-sm form-control" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="college" class="col-10 col-sm-3 col-form-label form-label pl-0">Year</label>
                                <input type="text" name="year" id="year" class="col-10 col-sm form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="course" class="col-10 col-sm-3 col-form-label form-label pl-0">Course</label>
                                <input type="text" name="course" id="course" class="col-10 col-sm form-control" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="form-group justify-content-center row align-items-center">
                                <label for="dept" class="col-10 col-sm-3 col-form-label form-label pl-0">Department</label>
                                <select name="dept" id="dept" class="col-10 col-sm form-control" disabled required>
                                    <option value="null"></option>
                                    <option value="1">Information Technology</option>
                                    <option value="2">Zoology</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </form>
            </div>
        </section>
    </body>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../shared/nav/nav.js"></script>
    <script src="profile.js"></script>

    </html>
<?php
}
?>