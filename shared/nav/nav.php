<div class="sidebar-wrapper">
    <div class="sidebar">
        <div class="sidebar-items menu"> <span>Menu</span> <span class="close-menu"> x </span></div>
        <div class="home-link sidebar-items"><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>' class=""> Home </a></div>
        <div class="home-link sidebar-items"><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates/compose"; ?>' class=""> Compose </a></div>
        <div class="home-link sidebar-items"><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates#pricing"; ?>' class=""> Pricing </a></div>
        <div class="home-link sidebar-items"><a href="mailto:carolates@gmail.com" class=""> Contact Us </a></div>
        <div class="login-link sidebar-items">
            <?php
            if (isset($_SESSION["cardolates_user_id"])) {
                // $temp = $_SERVER[HTTP_HOST]."/cardolates";
                echo "<a href='http://$_SERVER[HTTP_HOST]/cardolates/logout.php' class='login-link'> Logout </a>";
            } else {
                echo "<a  href='http://$_SERVER[HTTP_HOST]/cardolates/login' class=''>  Login </a>";
            }

            ?>
        </div>
        <div class="sidebar-items"><button class="install-app">Install App</button></div>
    </div>
</div>

<nav>
    <div class="nav-wrapper">
        <div>
            <img src="http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>/img/hamburger.png" alt="Menu Icon" class="img-fluid d-inline d-md-none ham-burger">
            <img src="http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>/img/logo.png" alt="Cardolates Logo" class="img-fluid logo">
        </div>
        <ul class="d-none d-md-flex nav-item-wrapper">
            <li><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>' class="nav-item home-link">Home</a></li>
            <li><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates/compose"; ?>' class="nav-item home-link">Compose</a></li>
            <li><a href='http://<?php echo "$_SERVER[HTTP_HOST]/cardolates#pricing"; ?>' class="nav-item pricing-link">Pricing</a></li>
            <li><a href="mailto:carolates@gmail.com" class="nav-item contact-link">Contact us</a></li>
            <li>
                <?php
                if (isset($_SESSION["cardolates_user_id"])) {
                    // $temp = $_SERVER[HTTP_HOST]."/cardolates";
                    echo "<a href='http://$_SERVER[HTTP_HOST]/cardolates/logout.php' class='nav-item login-link'> Logout </a>";
                } else {
                    echo "<a href='http://$_SERVER[HTTP_HOST]/cardolates/login' class='nav-item login-link'>  Login </a>";
                }
                ?>
            </li>
        </ul>
        <div class="d-flex" style="justify-content: space-between;">
            <a href="<?php echo "https://$_SERVER[HTTP_HOST]/cardolates/inbox/"; ?>" style="text-decoration: none;">
                <img src="http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>/img/text.png" alt="Text" class="img-fluid">
                <?php
                $url =  $_SERVER['PHP_SELF'];
                $conURL = "";
                if (strpos($url, "cardolates/index.php") > 0) {
                    $conURL = "connection.php";
                } else
                    $conURL = "../connection.php";
                require($conURL);
                $count=0;
                if(isset($_SESSION["cardolates_user_id"])){
                    $res = mysqli_query($con, "select count(*) as count from cards where card_to=" . $_SESSION["cardolates_user_id"] . " and status='delivered'");
                    $count = mysqli_fetch_assoc($res)["count"];
                }
                echo "<span class='card-noti'>$count</span>";
                ?>
            </a>
            <!-- <div class="d-flex align-items-center credits-wrapper ml-3">
                <img src="http://<?php echo "$_SERVER[HTTP_HOST]/cardolates"; ?>/img/coin.png" alt="Coins" class="img-fluid">
                <p class="m-0 total-credits"> - </p>
            </div> -->
            <a class="profile-a" href="http://<?php echo "$_SERVER[HTTP_HOST]/cardolates" ?>/profile">
                <?php
                if (isset($_SESSION["cardolates_user_shortname"])) {
                    $temp = $_SESSION["cardolates_user_shortname"];
                    echo "<span  class='profile-nav'>$temp</span>";
                } else {
                    echo " <i class='fa fa-user mt-1 ml-3'></i>";
                }
                ?>
            </a>
        </div>
    </div>
</nav>