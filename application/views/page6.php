<?php
/**
 * Created by PhpStorm.
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $RBASE; ?>css/materialize.min.css">
    <script src="<?php echo $RBASE; ?>js/materialize.min.js"></script>
    <script src="<?php echo $RBASE; ?>js/jquery.dateentry.package-2.0.1/jquery.plugin.min.js"></script>
    <script src="<?php echo $RBASE; ?>js/jquery.dateentry.package-2.0.1/jquery.dateentry.min.js"></script>
    <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.0/dist/jquery-input-mask-phone-number.js"></script>
    <title>Layout6</title>
</head>
<body>
<header>
    <div class="a7">
        <img src="<?php echo $RBASE;?>img/logo.jpeg">
    </div>
</header>
<main class="center">
    <div>
        <section>
            <p class="heading">
                Thanks for completing your application to become  a Drop and Run  Delivery Professional!
            </p>
        </section>
        <section>
            <div>
                <p class="subhead">
                    Most  applications are approved within 24 hours.  We will email and notify you via your driver's app once we've approved your profile
                </p>
            </div>
            <div>
                <p class="subhead">
                    If you haven't heard back from us within 24-hours, please contact us.
                </p>
            </div>
        </section>
        <section>
            <a class="waves-effect waves-light btn-large main-buttons">FAQS</a>
            <a class="waves-effect waves-light btn-large main-buttons">PRO TIPS</a>
            <a class="waves-effect waves-light btn-large main-buttons">MY DRIVERS PROFILE</a>
        </section>
    </div>
</main>
<footer>
    <section>
        <div class="a6 center">
            <div>
                <a href="#"> Terms of Service</a>
            </div>
            <div>
                <a href="#"> Privacy Policy</a>
            </div>
            <div>
                <a href="#"> Reviews</a>
            </div>
            <div>
                <a href="#"> Trust</a>
            </div>
            <div>
                <a href="#"> Help</a>
            </div>
            <div>
                <a href="#"> Contact us</a>
            </div>
        </div>
    </section>
    <section class="center">
        <img class="center" src="<?php echo $RBASE;?>img/logo1.jpeg">
    </section>
</footer>
<style>
    .a6 > div {
        padding-top: 1%;
        float: left;
        width: 16.666%;
        font-weight: 100;
    }
    .a6:after {
        float: none;
        clear: both;
    }
    .a5 {
        text-align: end;
        padding-right: 2%;
    }
    .a3 > * {
        width:90%;
    }
    .a3 {
        width: 50%;
        float: left;
    }
    .a3:after {
        float: none;
        clear: both;
    }
    .a2 {
        display: flex;
    }
    .a1 {
        display: inline-block;
        text-align: left;
        width: 100%;
        margin-left: 5%;
    }
    body , .breadcrumb:last-child {
        background-color: #f2f2f2 !important;
    }
    .breadcrumb , .breadcrumb:before {
        color:#939494 !important;
    }
    main {
        margin-right: auto;
        padding-bottom: 1%;
        width: 70%;
        max-width: 100%;
        background-color: white;
        margin-left: auto;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);

    }
    nav {
        background-color: transparent;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }
    .breadcrumb:nth-child(4) {
        color: #77a9f1 !important;
    }
    hr {
        color: #f6f6f6;
    }
    body {overflow-x:hidden;}
    footer {
        margin-right: auto;
        padding-bottom: 1%;
        width: 70%;
        max-width: 100%;
        margin-left: auto;
    }
    header {
        background-color: black;
    }
    .a7 {
        padding-left: 5%;
    }
    .a8 {
        width: 100%;
        padding: 2%;
    }
    .a3 > .input-field {
        display: inline-block;
    }
    .a8 > p{
        text-align: start !important;
    }
    main {
        padding: 0.5%;
        margin-top: 1%;
    }
    .heading {
        font-size: xx-large;
    }
    .subhead {
        font-size: x-large;
        font-weight: 200;
    }
    .main-buttons {
        width: 32%;
    }
</style>
<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script>
</body>
</html>
