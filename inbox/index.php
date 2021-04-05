<?php
session_start();
if (!isset($_SESSION["cardolates_user_id"])) {
    header("Location: ../login");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carodates - Inbox</title>
        <link rel="icon" type="image/png" href="../img/favicon.png">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../shared/nav/styles/nav.css">
        <link rel="stylesheet" href="styles/index.css">
    </head>

    <body>
    <div class="modal fade" id="cardFullscreen" tabindex="-1" role="dialog" aria-labelledby="forgotPassLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-letter">
                            <img src="../compose/img/logo.png" alt="Logo">
                            <p> <strong>Song:</strong> <span class="modal-song"></span></p>
                            <p><strong>Message:</strong> <span class="modal-message"></span></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <?php require("../shared/nav/nav.php") ?>
        <?php
        require("../connection.php"); ?>
        <div class="breadcrub d-md-none">
            <img src="../img/back.png" alt="Back Button" class="img-fluid">
            <span>&nbsp; Inbox</span>
        </div>
        <p class="text-center bg-dark text-white p-4 mt-3"> Click on the card to view in full screen</p>
        <?php
        $res = mysqli_query($con, "select * from cards where card_to =" . $_SESSION["cardolates_user_id"] . " and status='delivered' order by sent_date desc");
        if (mysqli_num_rows($res) > 0) {
        ?>
            <section class="inbox-old-section">
                <div class="container">
                    <div class="row  align-items-cneter">
                        <div class="col-12">
                            <h5>New:</h5>
                        </div>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                                <div data-card-id="<?php echo $row["card_id"]?>" class="letter" style="background-image: url('../compose/img/templates/<?php echo $row['template']?>.jpg')">
                                    <p><?php echo substr($row["message"],0,50)?> ....</p>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
            <hr>
        <?php
        } else {
            echo "<h4></h4>";
        }
        $res = mysqli_query($con, "select * from cards where card_to =" . $_SESSION["cardolates_user_id"] . " and status='seen' order by sent_date desc");
        if (mysqli_num_rows($res) > 0) {
        ?>
            <section class="inbox-old-section">
                <div class="container">
                    
                    <div class="row align-items-cneter mt-4">
                        <div class="col-12">
                            <h5>Old:</h5>
                        </div>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                                <div data-card-id="<?php echo $row["card_id"]?>" class="letter" style="background-image: url('../compose/img/templates/<?php echo $row['template']?>.jpg')">
                                    <p><?php echo substr($row["message"],0,50)?> ....</p>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        <?php
        } else {
            echo "<h4>Stay tuned. You will receive one soon. <h4>";
        }
        // mysqli_query($con, "update cards set status = 'seen' where card_to=" . $_SESSION["cardolates_user_id"] . " and status = 'delivered'");
        echo mysqli_error($con);

        ?>
        <!-- <div class="letter">
            <img src="img/logo.png" alt="Cardolates logo" class="preview-logo">
            <p>Song: <span id="previewSong"></span></p>
            <p>Message: <span id="previewMessage"></span></p>
        </div> -->
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../shared/nav/nav.js"></script>
        <script src="inbox.js"></script>
    </body>

    </html>
<?php
}

?>