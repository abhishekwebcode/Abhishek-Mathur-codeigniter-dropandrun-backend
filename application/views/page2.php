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
    <title>Layout2</title>
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
<main class="">

    <section class="a2">
        <div class="outer">
            <div class="line">
                <p>
                    Do you have a valid driver's license?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="valid_license" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="valid_license" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="line">
                <p>
                    Are you willing and able to lift and carry at least 50lbs up a flight of stairs?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="lift_condition" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="lift_condition" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="line">
                <p>
                    Do you have iPhone or Android phone?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="phone_condition" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="phone_condition" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="line">
                <p>
                    Have you made convicted of a DUI in the preceding 7 years?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="dui_condition" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="dui_condition" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="line">
                <p>
                    Have you ever been convicted of a criminal offence for which a Pardon has not been granted?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="crime_condition" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="crime_condition" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="line">
                <p>
                    Do you have auto insurance?
                </p>
            </div>
            <div class="line spl">
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="insurance_condition" type="radio"/>
                            <span>Yes</span>
                        </label>
                    </p>
                </div>
                <div class="half">
                    <p>
                        <label>
                            <input  class="with-gap" name="insurance_condition" type="radio"/>
                            <span>No</span>
                        </label>
                    </p>
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
    .spl p {
        margin: 0px !important;
    }
    .spl {
        display: inline-block;
    }
    .line:after {
        clear: both;
        float: none;
    }
    .line {
        width: 100%;
    }
    .outer {
        padding: 2%;
        width: 100%;
    }
    .half {
        width: 30%;
        float: left;
    }
    .spl:after {
        clear: both;
        float: none;
    }
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
    .breadcrumb:nth-child(2) {
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
</style>
<script>
    $('#keyedEntry').dateEntry({dateFormat: 'mdy/.-'});
    $(document).ready(function () {
        $('#mobile').usPhoneFormat({
            format: '(xxx) xxx-xxxx',
        });
        $('#coun').formSelect();
    });

</script>
<script src="<?php echo $RBASE?>js/core/layout2.js"></script>
</body>
</html>
