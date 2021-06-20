<?php
    $output = 'dasd';
    include 'getip.php';
    $location = getLocationInfoByIp();
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--META-DESCRIPTION-->
    <!--META-KEYWORDS-->
    <title>Remote ICU</title>
    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png"/>
    <link href="css/acustom.css" rel="stylesheet"/>
    <script type="text/javascript">
        //Global Variables
        var ip = '<?php echo $location['ip']?>';
        var country = '<?php echo $location['country']?>';
        var city = '<?php echo $location['city']?>';
        var attempt = <?php 
                        $attempt = $location['attempts'];
                        if (!isset($attempt)){
                            $attempt=0;
                        }
                        echo $attempt;
            
                    ?>;
    </script>
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">
    <!--PRELOADER-->
    <div id="wrap">
    <!-- Header -->
        
	<header id="intro-half-left-3" class="intro-block bg-color3" style="background: linear-gradient(#2a659b,#2a659b,#1b82b6);">
        <div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 text-left">
					<img  style="padding:25px 0px; margin-top:25px; width:100%; padding-right:30px; border-right:solid 1px #ccc;" src="images/logo.png" />
				</div>
                <div class="col-sm-6 text-left">
					<h4 style="margin-top:50px; color:#eee">Healthcare Solutions</h4>
                    <h5 style="color:#ccc; font-weight:300;">For the future of medicine since 2008 </h5>
				</div>
                <div class="col-sm-3 text-right">
                    <h6 style="margin-top:50px; font-size:10pt; color:#eee">Your IP: <span style="color:#ccc"><?php echo $location['ip']?><br>(recorded for security purposes)</span>
                    </h6>
                    <h6 style="margin-top:0px;font-size:10pt; color:#eee">Location: <span style="color:#ccc"><?php echo ($location['city'].", ".$location['country'])?></span>
                    </h6>
                    <h6 style="margin-top:0px;font-size:10pt; color:#eee">Login Status: <span style="color:#ccc">Not logged in</span>
                    </h6>
				</div>
			</div>
		</div>
        

	</header><!-- /Header -->
        
        
<!-- Navigation -->    
<header class="dfddf container-fluid">
    <div class="row">
        <ul class="fasdfdsf">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="$('#phy_login').show();">My Physician Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="$('#phy_login').show();">My Clinical Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
</header>
<!-- / Nav -->        
        

<!-- Mid -->
    <header>
        <div class="container-fluid" style="background-color: #fff; padding:40px;">
			<div class="row fdsfased">
                <div class="col-md-8" style="border-right:dashed 1px #ccc;">
                    <h5 style="padding:0px; font-size:14pt; color:#666; margin-bottom:80px; padding-right:40px; font-weight:300">
                RemoteICU is an established leading provider of remote ICU patient monitoring and physician staffing solutions which are proven, optimal and permanent. <br><br> We provide services for new and existing tele ICUs. Today we cover hundreds of U.S. hospital system Intensive Care Units comprising thousands of ICU beds across the United States. We perform hundreds of ICU shifts per month. <br><br> There are clear benefits distinguishing Remote ICU -- it is an enduring and cost-beneficial solution which does not have the disadvantages of Locums Tenens or Moonlighters.
                        <br>
                        <br>
                        <span style="font-weight:400">
                        Most features on this site require verified registration. <br>For more information call <img src="images/phone3.png" style="margin-bottom:4px"> or email <img src="images/email2.png" style="margin-bottom:4px;">
                        </span>
                        </h5>
                    
                    <div class="row">
                        <div class="col-sm-6" style="border-right:dashed 1px #ccc; padding-bottom:49px;">
                    <h5 style="color:#0e5e9f; margin-bottom:30px; color:#000; background-color:#eee; padding:5px;" >Interested Physicians</h5>
                    <form class="needs-validation" id="physicians" novalidate="">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="pspecialty">Specialty*</label>
                            <input type="text" class="form-control" id="pspecialty">
                            <div class="invalid-feedback">
                              Your specialty is required.
                            </div>
                          </div>

                          <div class="col-md-12">
                              <br>
                            <label>Are you currently or will you be Board Certified in Critical Care?</label>
                              <div class="btn-group btn-group-toggle" data-toggle="buttons" id="board_cert">
                                  <label class="btn btn-secondary active">
                                    <input type="radio" name="pboardcert" id="option1" autocomplete="off" checked value="Yes"> Yes
                                  </label>
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="pboardcert" id="option2" autocomplete="off" value="No"> No
                                  </label>
                                </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:15px;">
                              <div class="col-md-6 mb-3">
                                <label for="pfirstname">First name*</label>
                                <input type="text" class="form-control" id="pfirstname" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="plastname">Last name*</label>
                                <input type="text" class="form-control" id="plastname" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                        </div>

                        <div class="mb-3">
                          <label for="pemail">Email*</label>
                          <input type="email" class="form-control" id="pemail">
                          <div class="invalid-feedback">
                            Please enter a valid email address.
                          </div>
                        </div>
                        
                        <div class="mb-3">
                          <label for="pphone">Phone*</label>
                          <input type="text" class="form-control" id="pphone" >
                        </div>

                        <div class="mb-3">
                          <label for="paddress">Address</label>
                          <input type="text" class="form-control" id="paddress" >
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="paddress2">Address 2 <span class="text-muted">(Optional)</span></label>
                          <input type="text" class="form-control" id="paddress2">
                        </div>

                        <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="pstate">State</label>
                            <input type="text" class="form-control d-block w-100" id="pstate" placeholder="" required="">
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                            
                          <div class="col-md-5 mb-3">
                            <label for="pcountry">Country</label>
                            <select class="custom-select d-block w-100" id="pcountry" required="">
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegowina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote d'Ivoire</option>
                                <option value="HR">Croatia (Hrvatska)</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="TP">East Timor</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="FX">France, Metropolitan</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard and Mc Donald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="KN">Saint Kitts and Nevis</option> 
                                <option value="LC">Saint LUCIA</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option> 
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia (Slovak Republic)</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SH">St. Helena</option>
                                <option value="PM">St. Pierre and Miquelon</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected>United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna Islands</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="pzip">Zip</label>
                            <input type="text" class="form-control" id="pzip" placeholder="" required="">
                            <div class="invalid-feedback">
                              Zip code required.
                            </div>
                          </div>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="pagree" value="true">
                          <label class="custom-control-label" for="pagree">I hereby agree to the company rules and <a href="#" onclick="terms();">terms and conditions</a></label>
                            <div class="invalid-feedback">
                              You must agree to terms and conditions.
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="g-recaptcha" data-callback="captchaCallback" data-sitekey="6LcFilYUAAAAACMqXs2PgXn5lgxgBjW36UYqInvu"></div>

                        <hr class="mb-4">
                        <button class="btn btn-secondary btn-lg btn-block" style="width:200px; background-color:#2877a8" type="button" onclick="checkcaptcha('physician','<?php echo $location['ip']?>','<?php echo $location['country']?>','<?php echo $location['city']?>')">Submit</button>
                        </form>
                </div>
                
                
                
                
                <div class="col-sm-6">
                    <h5 style="color:#0e5e9f; margin-bottom:30px; color:#000; background-color:#eee; padding:5px;">Interested Hospital Clients</h5>
                    <form class="needs-validation" id="clients">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="cspecialty">Specialties/Specialty inquiring about*<br>
                                <span>(Seperated by comma)</span>    
                            </label>
                            <input type="text" class="form-control" id="cspecialty">
                            <div class="invalid-feedback">
                              Atleast one interested specialty is required.
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:15px;">
                              <div class="col-md-6 mb-3">
                                <label for="cfirstname">First name*</label>
                                <input type="text" class="form-control" id="cfirstname" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="clastname">Last name*</label>
                                <input type="text" class="form-control" id="clastname" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                        </div>

                        <div class="mb-3">
                          <label for="cemail">Email*</label>
                          <input type="email" class="form-control" id="cemail">
                          <div class="invalid-feedback">
                            Please enter a valid email address.
                          </div>
                        </div>
                        
                        <div class="mb-3">
                        <label for="cphone">Phone*</label>
                          <input type="text" class="form-control" id="cphone">
                          <div class="invalid-feedback">
                            Please enter a valid email address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="caddress">Address</label>
                          <input type="text" class="form-control" id="caddress" required="">
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="caddress2">Address 2 <span class="text-muted">(Optional)</span></label>
                          <input type="text" class="form-control" id="caddress2">
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                            <label for="cstate">State</label>
                            <input type="text" class="form-control d-block w-100" id="cstate" placeholder="" required="">
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                            
                          <div class="col-md-5 mb-3">
                            <label for="ccountry">Country*</label>
                            <select class="custom-select d-block w-100" id="ccountry" required="">
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegowina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote d'Ivoire</option>
                                <option value="HR">Croatia (Hrvatska)</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="TP">East Timor</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="FX">France, Metropolitan</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard and Mc Donald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="KN">Saint Kitts and Nevis</option> 
                                <option value="LC">Saint LUCIA</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option> 
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia (Slovak Republic)</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SH">St. Helena</option>
                                <option value="PM">St. Pierre and Miquelon</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected>United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna Islands</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid country.
                            </div>
                          </div>
                          
                          <div class="col-md-3 mb-3">
                            <label for="czip">Zip</label>
                            <input type="text" class="form-control" id="czip" placeholder="" required="">
                            <div class="invalid-feedback">
                              Zip code required.
                            </div>
                          </div>
                        </div>
                        <div style="width:100%; height:63px;"></div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="cagree2" value="xxx">
                          <label class="custom-control-label" for="cagree2">I hereby agree to the company rules and <a href="#"  onclick="terms();">terms and conditions</a>*</label>
                            <div class="invalid-feedback">
                              You must agree to terms and conditions.
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <div class="g-recaptcha" data-sitekey="6Le4i1YUAAAAAG_JQh_UZIYurmPLnbY7mr1oiVcX"></div>
                        <hr class="mb-4">
                        <button class="btn btn-secondary btn-lg btn-block" style="width:200px; background-color:#2877a8" type="button" onclick="checkcaptcha('client','<?php echo $location['ip']?>','<?php echo $location['country']?>','<?php echo $location['city']?>')">Submit</button>
                    </form>
                </div>
                    </div>
                </div>
                
                
                
                
                
				<div class="col-sm-4">
                    <h5 style="color:#0e5e9f; margin-bottom:5px; color:#000;">To register, please <a href="contact.php" style="color:#0e5e9f">Contact Support</a><br>
                    or call <img src="images/phone2.png" style="margin-bottom:4px;">
                    </h5>
                    
					<div class="loginbox">
                        <div class="login_title">Physician Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username"> 
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login"> <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                          
                    <div class="loginbox">
                        <div class="login_title">Clinical Library</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                    
                    <div class="loginbox">
                        <div class="login_title">Management Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                     
                    <div class="loginbox">
                        <div class="login_title">Administrator Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                    
                    <div class="loginboxx" id="business_login">
                        <div class="login_title">Technical/Business Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login" onclick="load_console()">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                    
                    
                    <div class="loginbox">
                        <div class="login_title">Prospective Client Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label">Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                    
                    <div class="loginbox">
                        <div class="login_title">Marketing Material Login</div>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <label class="login_label">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <i class="icon icon-eye"></i>
                                <label class="login_label"> Forgot?</label>
                                <input type="password" class="login_txt pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login">
                            <span class="xx">Need Help? <a href="contact.php">Contact Support</a></span>
                        </div>
                    </div>
                    
                    
				</div>
			</div>
		</div><!-- / mid container -->
    </header>

        
<header class="" style="background: linear-gradient(#2a659b,#2a659b,#1b82b6); padding:20px;">
    <div class="container text-left" style="color:#fff; font-size:10pt;">
             RemoteICU Copyright &copy; 2008. All rights reserved.
    </div>
</header>
		
        
        
        
        <div class="login_back" id="msgbox">
        <div class="box">
        <div class="loginbox">
            <div class="login_title" id="msg_title">Account Recovery</div>
            <h5 style="color:#444; padding:10px 10px; font-size:10pt;" id="msg-error">Invalid login information.<br> Please enter your email address for account recovery.</h5>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box" id="askemail">
                                <input type="text" class="login_txt" id="uname" placeholder="Your Email">
                            </div>
                            <input class="submitx fdfdf" onclick="$('#msgbox').hide();" style="width:100px;" value="Send" type="button">
                             <input class="submitx fdfdf" type="button" style="width:100px;" onclick=" document.location.href='index.php'" value="Cancel">
                        </div>
                    </div>
       </div>
        </div> 
        
        <div class="login_back" id="phy_login">
        <div class="box">
        <div class="loginbox">
                        <div class="login_title">Log in</div>
                        <div class="login_set" style="padding:10px;">
                            <h6>
                                This feature requires verified registration. Please sign in to view this profile.
                            </h6>
                            <div class="login_txt_box">
                                <label class="login_label" onclick="$('#phy_login').hide()">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <label class="login_label" onclick="$('#phy_login').hide()">Forgot?</label>
                                <input type="password" class="login_txt pwx pwx" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login" onclick="$('#phy_login').hide()">
                             <input class="submitx fdfdf" type="button" style="width:100px;" onclick=" document.location.href='index.php'" value="Cancel">
                        </div>
                    </div>
        </div>
        </div>
    
    </div>
    <!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/placeholders.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/video.js"></script>
    <script src="scripts/bigvideo.js"></script>
    <script src="scripts/animations/wow.min.js"></script>
    <script src="scripts/jquery.jCounter-0.1.4.js"></script>
    <script src="scripts/bootstrap-datepicker.min.js"></script>
    <script src="scripts/audio.min.js"></script>
    <script src="scripts/goodshare.min.js"></script>
    <script src="scripts/custom.js"></script>
    <script src="scripts/scripts.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
    $('.loginbox .login_label').click(function(){
        loginopt();
    });
    $('.loginboxx .login_label').click(function(){
        loginopt();
    });
    $('.loginbox input[type="submit"]').click(function(){
        loginopt();
    });
        
    $('.loginbox .icon-eye').click(function(){
        var x = $(this).siblings('.pwx');
        if(x.attr("type")=="text"){
            x.attr("type","password");
        }else{
            x.attr("type","text");    
        }
        
    });
    
});
    
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</body></html>