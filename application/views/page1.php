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
        <img src="<?php echo $RBASE; ?>img/logo.jpeg">
    </div>
</header>
<section>
    <form
        name="form" action="#" id="form"    ></form>
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
        <div class="">
            <div class="a3">
                <div class="input-field inline">
                    <input form="form" required id="fname"  type="text" class="validate">
                    <label for="fname">First Name</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="mobile" type="tel" class="validate" placeholder="___-___-____">
                    <label for="mobile">Mobile Phone Number</label>
                </div>
                <div class="input-field inline">
                    <select id="coun">
                        <option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antarctica">Antarctica</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia">Bolivia</option><option value="Caribbean Netherlands">Caribbean Netherlands</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei">Brunei</option><option value="Bhutan">Bhutan</option><option value="Bouvet Island">Bouvet Island</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Ivory Coast">Ivory Coast</option><option value="Cameroon">Cameroon</option><option value="DR Congo">DR Congo</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Christmas Island">Christmas Island</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czechia">Czechia</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Western Sahara">Western Sahara</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="Falkland Islands">Falkland Islands</option><option value="France">France</option><option value="Faroe Islands">Faroe Islands</option><option value="Micronesia">Micronesia</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Guernsey">Guernsey</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guinea">Guinea</option><option value="Guadeloupe">Guadeloupe</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Greenland">Greenland</option><option value="Guatemala">Guatemala</option><option value="French Guiana">French Guiana</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="Isle of Man">Isle of Man</option><option value="India">India</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Ireland">Ireland</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="South Korea">South Korea</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Laos">Laos</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Macau">Macau</option><option value="Saint Martin">Saint Martin</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova">Moldova</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia">Macedonia</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Montserrat">Montserrat</option><option value="Martinique">Martinique</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Mayotte">Mayotte</option><option value="Namibia">Namibia</option><option value="New Caledonia">New Caledonia</option><option value="Niger">Niger</option><option value="Norfolk Island">Norfolk Island</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Niue">Niue</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="North Korea">North Korea</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine">Palestine</option><option value="French Polynesia">French Polynesia</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="South Georgia">South Georgia</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Serbia">Serbia</option><option value="South Sudan">South Sudan</option><option value="São Tomé and Príncipe">São Tomé and Príncipe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Sint Maarten">Sint Maarten</option><option value="Seychelles">Seychelles</option><option value="Syria">Syria</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Tokelau">Tokelau</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan">Taiwan</option><option value="Tanzania">Tanzania</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Vatican City">Vatican City</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela">Venezuela</option><option value="British Virgin Islands">British Virgin Islands</option><option value="United States Virgin Islands">United States Virgin Islands</option><option value="Vietnam">Vietnam</option><option value="Vanuatu">Vanuatu</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <label for="coun">Country</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="city" type="text" class="validate">
                    <label for="city">City</label>
                </div>
            </div>
            <div class="a3">
                <div class="input-field inline">
                    <input form="form" required id="lname"  type="text" class="validate">
                    <label for="lname">Last Name</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="pass" type="password" class="validate">
                    <label for="pass">Choose a password</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="dob" type="date" class="validate">
                    <label for="dob">Date of Birth</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="post" type="number" class="validate">
                    <label for="post">Postal Code</label>
                </div>
                <div class="input-field inline">
                    <input form="form" required id="pro" type="text" class="validate">
                    <label for="pro">Province</label>
                </div>
            </div>
        </div>
    </section>

    <section>
        <hr>
        <div class="a5">
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
        <img class="center" src="<?php echo $RBASE; ?>img/logo1.jpeg">
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
    .breadcrumb:first-child {
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
        /*$('#mobile').usPhoneFormat({
            format: '(xxx) xxx-xxxx',
        });*/
        $('#coun').formSelect();
    });

</script>
<script src="<?php echo $RBASE; ?>js/core/layout1.js"></script>
</body>
</html>
