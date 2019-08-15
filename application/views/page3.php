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
    <title>Layout1</title>
</head>
<body>
<header>
    <div class="a7">
        <img src="<?php echo $RBASE;?>img/logo.jpeg">
    </div>
</header>
<section>
    <nav style="">
        <div class="nav-wrapper">
            <div class="a1">
                <a href="#!" class="breadcrumb">Contact Info</a>
                <a href="#!" class="breadcrumb">Personal Info</a>
                <a href="#!" class="breadcrumb">Vehicle</a>
                <a href="#!" class="breadcrumb">Documents</a>
                <a href="#!" class="breadcrumb">Review</a>
            </div>
        </div>
    </nav>
</section>
<main class="center">

    <section class="a2">
        <div class="a8">
            <div class="a3">
                <div class="input-field ">
                    <select class="sell make">
                        <option value="" disabled selected>Select One</option>
                        <option value="make1">Option 1</option>
                        <option value="make2">Option 2</option>
                        <option value="make3">Option 3</option>
                    </select>
                    <label>Select Make</label>
                </div><div class="input-field ">
                    <select class="sell type">
                        <option value="" disabled selected>Select One</option>
                        <option value="Car/SUV/Minivan" data-icon="<?php echo $RBASE; ?>img/1.jpg" > Car/SUV/Minivan</option>
                        <option value="Small Pickup" data-icon="<?php echo $RBASE; ?>img/2.jpg" class="right">  Small Pickup</option>
                        <option value="Large Pickup" data-icon="<?php echo $RBASE; ?>img/3.jpg" class="right">Large Pickup</option>
                        <option value="Cargo Van" data-icon="<?php echo $RBASE; ?>img/4.jpg" class="right"> Cargo Van</option>
                        <option value="Box Truck" data-icon="<?php echo $RBASE; ?>img/5.jpg" class="right"> Box Truck</option>

                    </select>
                    <label>Select vehicle type</label>
                </div>
                <div class="input-field ">
                    <select class="sell color">
                        <option value="" disabled selected>Select One</option>
                        <option value="type1">Option 1</option>
                        <option value="type2">Option 2</option>
                        <option value="type3">Option 3</option>
                    </select>
                    <label>Color</label>
                </div>
            </div>
            <div class="a3">
                <div class="input-field ">
                    <select class="sell model">
                        <option value="" disabled selected>Select One</option>
                        <option value="color1">Option 1</option>
                        <option value="color2">Option 2</option>
                        <option value="color3">Option 3</option>
                    </select>
                    <label>Select a model</label>
                </div>
                <div class="input-field ">
                    <select class="sell year">
                        <option value="" disabled selected>Select One</option>
                        <option value="model1">Option 1</option>
                        <option value="model2">Option 2</option>
                        <option value="model3">Option 3</option>
                    </select>
                    <label>Year</label>
                </div>
            </div>
        </div>
    </section>

    <section>
        <hr>
        <div class="a5">
            <a class="waves-effect waves-light btn red" id="back">BACK</a>
            <a class="waves-effect waves-light btn" id="submit">NEXT</a>
        </div>
    </section>
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
        width: 90%;
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
    .breadcrumb:nth-child(3) {
        color: #77a9f1 !important;
    }
    hr {
        color: #f6f6f6;
    }
    body {overflow-x:hidden;}
    footer {
        margin-right: auto;
        padding-bottom: 1%;
        width: 90%;
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
</style>
<script>

    $(document).ready(function () {
        $('select').formSelect();
    });

</script>
<script src="<?php echo $RBASE; ?>js/core/layout3.js"></script>
</body>
</html>
