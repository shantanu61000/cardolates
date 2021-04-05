<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardolates - Send Cards Anonymously via Mail and Text</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="shared/nav/styles/nav.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php 
session_start();
include ("shared/nav/nav.php");?>
    <div class="container-fluid">
        <section class="hero-section">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <h1>
                        Send Carodates <br>
                        Anonymously !
                    </h1>
                    <p>
                        Sometimes a simple Thankyou can make someone's day. Share your love, joy and happiness with help of our platform in just 3 Steps
                    </p>
                    <button class="get-started">
                        Get Started
                    </button>
                </div>
                <div class="col-10 col-md-6 col-lg-5 offset-2 offset-md-0">
                    <img src="img/man with envolope.png" alt="Man with envolope" class="img-fluid">
                </div>
            </div>
        </section>
        <section class="get-started-section">
            <div class="row justify-content-center">
                <div class="p-5 col-11 col-sm-9 col-md-8 box-shadow mb-5">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="subtitle">Get Started in just 3 Steps</h3>
                        </div>
                    </div>
                    <div class="row" style="justify-content: space-around;">
                        <div class="col-md-4 col-lg-4 mt-3">
                            <p>Step 1. Register yourself</p>
                        </div>
                        <div class="col-md-4 col-lg-4 mt-3">
                            <p>Step 2. Search Recipient</p>
                        </div>
                        <div class="col-md-4 col-lg-4 mt-3">
                            <p>Step 3. Type your message
                                and hit send button</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="feature-section pt-4 pb-5 mt-4">
        <div class="container-fluid">
            <div class="row justify-content-center pb-2">
                <div class="col-auto">
                    <h3 class="subtitle">Features</h3>
                </div>
            </div>
            <div class="row align-items-center pb-5">
                <div class="col-5 col-md-4 col-lg-3">
                    <img src="img/features.png" alt="Features" class="img-fluid">
                </div>
                <div class="col">
                    <ol class="d-block d-md-none feature-ol">
                        <li>Send Anonymously</li>
                        <li>No limit on word count</li>
                        <li>Dedicate a song</li>
                        <li>Choose card template</li>
                    </ol>
                    <div class="row d-none d-md-flex justify-content-center">
                        <div class="col-md-5 col-lg-4 feature">
                            <h2>1. Send Anonymously</h2>
                            <p>Your identity will be hidden when you send
                                Cardolates. We will not be saving any data
                                of yours</p>
                        </div>
                        <div class="col-md-5 col-lg-4 offset-md-1 feature">
                            <h2>2. No limit on word count</h2>
                            <p>Write as much as you want, from essays to
                                short poems. We got you covered with
                                unlimited word count.</p>
                        </div>
                    </div>

                    <div class="row mt-5 d-none d-md-flex justify-content-center">
                        <div class="col-md-5 col-lg-4 feature">
                            <h2>3. Dedicate a song</h2>
                            <p>Falling short of words ?.. Don't worry,
                                You can dedicate a song too. This mid-
                                blowing feature is all you need</p>
                        </div>
                        <div class="col-md-5 col-lg-4 offset-md-1 feature">
                            <h2>4. Choose card template</h2>
                            <p>Wo woooooo. You are not restricted to use
                                the default card template. You can choose
                                from a bunch of other matching your feelings
                                and words</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-section mb-5">
        <div class="container-fluid">
            <div class="row justify-content-center mt-5 mb-4">
                <div class="col-auto">
                    <h3 class="subtitle">Pricing</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-6 col-md-5 col-lg-3 mt-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="2">Starter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20 Credits</td>
                                <td>10 Rs</td>
                            </tr>
                            <tr>
                                <td>Word Limit</td>
                                <td>Unlimited</td>
                            </tr>
                            <tr>
                                <td>Dedicate Song</td>
                                <td><i class="fa fa-times"></i></td>
                            </tr>
                            <tr>
                                <td>Choose Template</td>
                                <td><i class="fa fa-times"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-11 col-sm-6 col-md-5 col-lg-3 mt-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="2">Basic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100 Credits</td>
                                <td>29 Rs</td>
                            </tr>
                            <tr>
                                <td>Word Limit</td>
                                <td>Unlimited</td>
                            </tr>
                            <tr>
                                <td>Dedicate Song</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Choose Template</td>
                                <td><i class="fa fa-times"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-11 col-sm-6 col-md-5 col-lg-3 mt-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="2">Premium </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unlimited Credits</td>
                                <td>49 Rs</td>
                            </tr>
                            <tr>
                                <td>Word Limit</td>
                                <td>Unlimited</td>
                            </tr>
                            <tr>
                                <td>Dedicate Song</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Choose Template</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-sm-3 col-lg-2">
                    <img src="img/logo.png" alt="Cardolates Logo" class="img-fluid">
                </div>
            </div>
            <div class="row mt-4" style="justify-content: space-between;">
                <div class="col-6 col-sm-3 col-lg-2">
                    <h6>Address :</h6>
                    <p>A/106, Durgamata Apt.
                        Laxmi Nagar, Virar Road,
                        Nallasopara East,
                        Palghar - 401209
                        Maharashtra, India</p>
                </div>                
                <div class="col-4 col-sm-3 col-lg-2">
                    <h6>Explore :</h6>
                    <ul>
                        <li>Home</li>
                        <li>Account</li>
                        <li>Contact us</li>
                        <li>Events</li>
                    </ul>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <h6>Contact :</h6>
                    <ul>
                        <li> <a href="mailto:cardolates@gmail.com"> webadmin@cardolates.ml</a></li>
                        <li> <a href="tel: +918459751677"></a> +91-8459751677</li>
                    </ul>
                </div>
                <div class="col-4 col-sm-3 col-lg-2">
                    <h6>Legal :</h6>
                    <ul>
                        <li>Privacy Policy</li>
                        <li>Terms of Use</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="shared/nav/nav.js"></script>

</html>