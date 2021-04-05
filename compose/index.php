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
        <link rel="stylesheet" href="../shared/floating label/floatingLabel.css">
        <link rel="stylesheet" href="styles/compose.css">
    </head>

    <body>
        <?php include("../shared/nav/nav.php"); ?>
        <div class="breadcrub">
            <img src="../img/back.png" alt="Back Button" class="img-fluid">
            <span>&nbsp; Compose </span>
        </div>
        <section class="compose-section">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-10 col-sm-8 col-md-4 col-lg-3 order-last order-md-first preview-col">
                        <h4 class="text-center font-weight-bold">Preview</h4>
                        <div class="preview">
                            <div class="letter">
                                <img src="img/logo.png" alt="Cardolates logo" class="preview-logo">
                                <p>Song: <span id="previewSong"></span></p>
                                <p>Message: <span id="previewMessage"></span></p>
                            </div>
                            <img src="img/envolope.png" alt="Envolope Image" class="img-fluid envolope">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-md-1">
                        <div class="card">
                            <div class="card-header">
                                <div class="search-wrapper">
                                    <i class="fa fa-search text-white"></i>
                                    <!-- <img src="img/search.png" alt="Search Icon" class="img-fluid"> -->
                                    <input type="text" placeholder="Search Recepient" id="searchRec" class="search-recepient">
                                </div>
                            </div>
                            <form method="POST" id="composeForm">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="search-rec-wrapper">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="recInfo" class="up">Recepient Info</label>
                                        <textarea name="recInfo" readonly class="form-control" id="recInfo" cols="30" rows="2"></textarea>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="message" class="down">Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="song" class="down">Dedicate a Song</label>
                                        <input type="text" class="form-control" id="song" name="song">
                                    </div>
                                    <div class="form-group">
                                        <p class="up">Choose Template</p>
                                        <div class="temp-wrapper">
                                            <input type="radio" name="template" id="template1" class="template" value="1" checked required>
                                            <label for="template1">
                                                <div class="template-bg temp1-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template2" class="template" value="2" required>
                                            <label for="template2">
                                                <div class="template-bg temp2-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template3" class="template" value="3" required>
                                            <label for="template3">
                                                <div class="template-bg temp3-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template4" class="template" value="4" required>
                                            <label for="template4">
                                                <div class="template-bg temp4-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template5" class="template" value="5" required>
                                            <label for="template5">
                                                <div class="template-bg temp5-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template6" class="template" value="6" required>
                                            <label for="template6">
                                                <div class="template-bg temp6-bg"></div>
                                            </label>
                                            <input type="radio" name="template" id="template7" class="template" value="7" required>
                                            <label for="template7">
                                                <div class="template-bg temp7-bg"></div>
                                            </label>

                                        </div>
                                    </div>
                                    <button class="send-btn">Send</button>
                                </div>

                                <!-- <div class="card-footer">
                                    
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../shared/nav/nav.js"></script>
    <script src="../shared/floating label/floatingLabel.js"></script>
    <script src="compose.js"></script>

    </html>
<?php
}
?>