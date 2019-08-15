<?php
/**
 * Created by PhpStorm.
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $RBASE; ?>css/materialize.min.css">
    <script src="<?php echo $RBASE; ?>js/materialize.min.js"></script>
    <script src="<?php echo $RBASE; ?>js/jquery.dateentry.package-2.0.1/jquery.plugin.min.js"></script>
    <script src="<?php echo $RBASE; ?>js/jquery.dateentry.package-2.0.1/jquery.dateentry.min.js"></script>
    <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.0/dist/jquery-input-mask-phone-number.js"></script>
    <title>Layout 5</title>
</head>
<body>
<header>
    <div class="a7" id="demo">
        <img src="<?php echo $RBASE;?>img/logo.jpeg" >
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
<section class="titlee_con">
    <h5 class="titlee">
        Review your registration and submit your application below, when ready.
    </h5>
</section>
<main class="center">
    <section class="a2">

        <div class="a3">
            <div class="card horizontal c">
                <div class="card-image">
                    <img src="<?php echo $RBASE;?>img/6.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h5 class="titlee" style="color: black !important;">
                            <?php echo $SESSION["page1"]["fname"]." ".$SESSION["page1"]["lname"]; ?>
                        </h5>
                        <div class="al">
                            <p>  <i class="material-icons">email</i> <span><?php echo $SESSION["page1"]["email"];?></span></p>
                            <p>  <i class="material-icons">call</i>
                                <span><?php echo $SESSION["page1"]["mobile"]; ?></span>
                            </p>
                            <p>
                                <i class="material-icons">date_range</i>
                                <span><?php echo $SESSION["page1"]["dob"]; ?></span>
                            </p>
                            <p>  <i class="material-icons">location_city</i>
                                <span><?php echo $SESSION["page1"]["province"]; ?></span>
                            </p>
                            <p>  <i class="material-icons">language</i><span><?php echo $SESSION["page1"]["country"]; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="a3">
            <div class="card">
                <div class="card-stacked">
                    <div class="card-content">
                        <h5 class="titlee" style="color: black !important;">
                            Vehicle
                        </h5>
                        <div class="al">
                            <p>  <i class="material-icons">airport_shuttle
                                </i> <span><?php echo $SESSION["page3"]["model"]; ?></span></p>
                            <p>  <i class="material-icons">directions_car</i>
                                <span><?php echo $SESSION["page3"]["make"]; ?></span>
                            </p>
                            <p>
                                <i class="material-icons">local_shipping
                                </i>
                                <span><?php echo $SESSION["page3"]["type"]; ?></span>
                            </p>
                            <p>  <i class="material-icons">color_lens</i>
                                <span><?php echo $SESSION["page3"]["color"]; ?></span>
                            </p>
                            <p>  <i class="material-icons">event</i><span><?php echo $SESSION["page3"]["year"]; ?></span>
                            </p>
                            <p class="">
                                <?php
                                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                                ?>
                                <i class="material-icons gr">done</i>
                                <span class="green-text">You do have insurance</span>
                                <?php } else { ?>
                                    <i class="material-icons red-text">close</i>
                                    <span class="red-text">You do not have insurance</span>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="a2">

        <div class="a3">
            <ul class="collection co">
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                        ?>
                        <i class="material-icons">done</i>
                        <span> You do have a valid drivers license</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text"> You do have a valid drivers license</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                            ?>
                            <i class="material-icons">done</i>
                            <span> You are willing and able to lift and carry at least 50 lbs up a flight of stairs</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text">  You are not willing and  able to lift and carry at least 50 lbs up a flight of stairs</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                            ?>
                            <i class="material-icons">done</i>
                            <span> You do have  an iPhone or android phone</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text"> You do not have  an iPhone or android phone</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                            ?>

                            <i class="material-icons">close</i>
                            <span>  You have been convicted of a DUI or DWI in the past 7 years</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text">  You have been convicted of a DUI or DWI in the past 7 years</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if (filter_var($SESSION["page2"]["insurance_condition"],FILTER_VALIDATE_BOOLEAN)) {
                            ?>
                            <i class="material-icons">close</i>
                            <span>  You have  been convicted of a felony in the past 7 years</span>
                        <?php } else { ?>
                            <i class="material-icons green-text">done</i>
                            <span class="green-text">  You have not been convicted of a felony in the past 7 years</span>
                        <?php } ?>
                    </div>
                </li>

            </ul>
        </div>
        <div class="a3">
            <ul class="collection co1 with-header" style="background-color: white;">
                <li class="collection-header">
                    <h5 class="doc">Documents</h5>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if ($_SESSION["page4"]["file1"]) {
                        ?>
                        <i class="material-icons">done</i>
                        <span> You have added a vehicle registration file</span>
                        <?php } else { ?>
                        <i class="material-icons red-text">close</i>
                        <span class="red-text"> You have not added a vehicle registration file</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if ($_SESSION["page4"]["file3"]) {
                        ?>
                        <i class="material-icons">done</i>
                        <span>You have added a personal photo</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text">You have not added a personal photo</span>
                        <?php } ?>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="li">
                        <?php
                        if ($_SESSION["page4"]["file2"]) {
                        ?>
                        <i class="material-icons">done</i>
                        <span>You have added an insurance file</span>
                        <?php } else { ?>
                            <i class="material-icons red-text">close</i>
                            <span class="red-text">You have not added an insurance file</span>
                        <?php } ?>
                    </div>
                </li>

            </ul>
        </div>

    </section>
    <section>
        <div class="a5">
            <a class="waves-effect waves-light btn red" id="back">BACK</a>
            <a class="waves-effect waves-light btn" id="submit">SUBMIT APPLICATION</a>
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
    .li {
        display: flex;
    }
    .li > span {
        margin-left: 1%;
    }
    .co {
        display: inline-table;
        margin: 0px !important;
        padding: 0px !important;
    }
    .co > .collection-item:nth-child(n+4):nth-child(-n+5) {
        color: red;
    }
    .co > .collection-item:nth-child(n+1):nth-child(-n+3) , .co1 {
        color:darkseagreen;
    }

    .a3 {
        display: flex;
    }
    .gr {
        color:darkseagreen;
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
        width:97%;
    }
    .a3:first-child {
        width: 60%;
        float: left;
    }
    .a3:nth-child(2) {
        width: 40%;
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
    body  {
        background-color: #f2f2f2 !important;
    }
    .breadcrumb , .breadcrumb:before , .titlee {
        color:#939494 !important;
    }
    .doc {
        font-weight: 200;
    }
    main {
        margin-right: auto;
        padding-bottom: 1%;
        width: 90%;
        max-width: 100%;
        margin-left: auto;

    }
    nav {
        background-color: transparent;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }
    .breadcrumb:nth-child(5) {
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
    .a8 > p{
        text-align: start !important;
    }
    .titlee_con {
        margin-right: auto;
        padding-bottom: 1%;
        width: 90%;
        max-width: 100%;
        margin-left: auto;
    }
    .titlee   {
        FONT-FAMILY: inherit;
        font-weight: 100;
        color: black !important;
    }
    .c {
        background-color: #ced7dc;
    }
    .a3 * {
        text-align: start;
    }
    .al > p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .al > p > span {
        margin-left: 6%;
    }
</style>
<script>

    $(document).ready(function () {
        $('select').formSelect();
    });

</script>
<script src="<?php echo $RBASE;?>js/core/layout5.js" ></script>
</body>
</html>
