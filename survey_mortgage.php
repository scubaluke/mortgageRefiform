<?php

/*

Template Name: Mortgage - Survey Page Template

*/

/*
session_start();

$zip_code = (!empty($_GET['zip_code'])) ? $_GET['zip_code'] : '';
$success_stat = (!empty($_GET['success_stat'])) ? $_GET['success_stat'] : '';

*/

$success_stat = (!empty($_GET['success_stat'])) ? $_GET['success_stat'] : '';
$zipcode = (!empty($_GET['zipcode'])) ? $_GET['zipcode'] : '';

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


?>
<?php get_header(); ?>
<section id="content" class="full-width">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo fusion_render_rich_snippets_for_pages(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			<?php avada_singular_featured_image(); ?>
			<div class="post-content">
            <div class="fusion-fullwidth fullwidth-box fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling lead-form-wrapper" style="background-color: #fff;background-position: center center;background-repeat: no-repeat;border-width: 0px 0px 0px 0px;border-color:#e2e2e2;border-style:solid;padding-top: 90px;padding-bottom: 80px;"><div class="fusion-builder-row fusion-row fusion-flex-align-items-center" style="max-width:1248px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1 1_1 fusion-flex-column">
           <div class="form-progress">
                        		<progress class="form-progress-bar" min="0" max="100" value="0" step="1" aria-labelledby="form-progress-completion"></progress>
                        		
                        		<div class="form-progress-indicator one active"></div>
                        		<div class="form-progress-indicator two"></div>
                        		<div class="form-progress-indicator three"></div>
                        		<div class="form-progress-indicator four"></div>
                        		<div class="form-progress-indicator five"></div>
                        		<div class="form-progress-indicator six"></div>
                        		<div class="form-progress-indicator seven"></div>
                        		<div class="form-progress-indicator eight"></div>
                        		<div class="form-progress-indicator nine"></div>
                        		<div class="form-progress-indicator ten"></div>
                        		<div class="form-progress-indicator eleven"></div>
                        		<div class="form-progress-indicator twelve"></div>
                        		<div class="form-progress-indicator thirteen"></div>
                        		<div class="form-progress-indicator fourteen"></div>
                        		
                        		<p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complete</p>
                        	</div>
            </div>
           <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1 1_1 fusion-flex-column">
           <?php if($success_stat === 'true'){ ?>
                                <div class="alert alert-success text-center mt-5 mb-5" role="alert">
                                    Thank you for filling out your information! 
                                </div>
                            <?php }else{ ?>
                            
                            
                                <form id="lp_form" name="lp_form" method="post"
                                 action="https://chlend.linktrustleadgen.com/Lead/432598/SimplePost"
                                 > 
                                
                                    <input type='hidden' id='ResponseFormat' name='ResponseFormat' value='json'  />
                                      <input type='hidden' id='successUrl' name='successUrl' value='https://championlender.com/'  />
                                      <input type='hidden' id='failureUrl' name='failureUrl' value='https://championlender.com/'  />
                                
                                
                                    <div class="form-box form-box-0">
                                        <h2 class="text-center">Which type of home loan are you interested in?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('PP_REFI','PRODUCT', 1, 'two', '7.69')">Refinance</button>
                                            <!-- <button class="btn green-btn" onclick="return setFieldValue('PP_NEWHOME','PRODUCT', 1, 'two', '7.69')">Home Purchase</button> -->
                                            <!-- <button class="btn green-btn" value="http://currentstagingarea.local/new-home-purchase" >New Home Purchase</button> -->
                                            <button class="btn green-btn"  ><a href="http://currentstagingarea.local/new-home-purchase">New Home Purchase</a></button>
                                        </div>
										
                                    </div>
							
								
                                    <div class="form-box form-box-1" style="display:none;">
                                        <h2 class="text-center">Desired interest rate</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('FIXED','LOAN_TYPE', 2, 'three', '15.38')">Fixed</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('ADJUSTABLE','LOAN_TYPE', 2, 'three', '15.38')">Adjustable</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack(0, 'two', '0')">Go Back</button>
                                        </div>
										
                                    </div>
                                    
                                    <div class="form-box form-box-2" style="display:none;">
                                        <h2 class="text-center">What type of property do you have or are looking for?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('SINGLE_FAM','PROP_DESC', 3, 'four', '22')">Single Family</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('MULTI_FAM','PROP_DESC', 3, 'four', '22')">Multi Family</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('CONDO','PROP_DESC', 3, 'four', '22')">Condo</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('TOWNHOME','PROP_DESC', 3, 'four', '22')">Townhome</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('MOBILEHOME','PROP_DESC', 3, 'four', '22')">Mobile Home</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack(1, 'three', '7.69')">Go Back</button>
                                        </div>
									
                                    </div>
                                    
                                    <div class="form-box form-box-3" style="display:none;">
                                        <h2 class="text-center">Are you Active Duty or Retired Military Service Member?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('YES','VA_STATUS', 4, 'five', '28.5')">Yes</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('NO','VA_STATUS', 4, 'five', '28.5')">No</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack( 2, 'four', '15.38')">Go Back</button>
                                        </div>
									
                                    </div>
                                    
                                    <div class="form-box form-box-4" style="display:none;">
                                        <h2 class="text-center">How would you rate your credit?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('EXCELLENT','CRED_GRADE', 5, 'six', '36')">Excellent</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('GOOD','CRED_GRADE', 5, 'six', '36')">Good</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('FAIR','CRED_GRADE', 5, 'six', '36')">Fair</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('POOR','CRED_GRADE', 5, 'six', '36')">Poor</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack(3, 'five', '22')">Go Back</button>
                                        </div>
										 
                                    </div>
                                    
                                    <div class="form-box form-box-5" style="display:none;">
                                        <h2 class="text-center">Have you ever had a foreclosure?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('yes','FHA_BANK_FORECLOSURE', 6, 'seven', '43')">Yes</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('no','FHA_BANK_FORECLOSURE', 6, 'seven', '43')">No</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack( 4, 'six', '28.5')">Go Back</button>
                                        </div>
										
                                    </div>
                                    
                                    <div class="form-box form-box-6" style="display:none;">
                                        <h2 class="text-center">Have you made any mortgage payments late?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('NONE','NUM_MORTGAGE_LATES', 7, 'eight', '50')">None</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('ONE','NUM_MORTGAGE_LATES', 7, 'eight', '50')">One</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('TWO_OR_MORE','NUM_MORTGAGE_LATES', 7, 'eight', '50')">Two Or More</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack( 5, 'seven', '36')">Go Back</button>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="form-box form-box-7" style="display:none;">
                                        <h2 class="text-center">Annual Verifiable Income?</h2>
                                        
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('YES','ANNUAL_VERIFIABLE_INCOME', 8, 'nine', '58')">Yes</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('NO','ANNUAL_VERIFIABLE_INCOME', 8, 'nine', '58')">No</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack( 6, 'eight', '43')">Go Back</button>
                                        </div>
                                        
                        <!-- end form-box-6 -->
                                        
                                        <!--
                                        <div class="form-group text-center">
                                            <label>
                                              	<input type="range" min="0" max="200000" value="100000" class="slider form-control" id="ANNUAL_VERIFIABLE_INCOME" name="ANNUAL_VERIFIABLE_INCOME">
                                            </label>
                                        </div>
                                        <div id="myRangeTextContainer" class="text-center">$<span id="ANNUAL_VERIFIABLE_INCOMEText"></span></div>
                                        <script>
                                            
                                            var slider1 = document.getElementById("ANNUAL_VERIFIABLE_INCOME");
                                            var output1 = document.getElementById("ANNUAL_VERIFIABLE_INCOMEText");
                                            output1.innerHTML = formatNumber(slider1.value); 
                                              
                                            slider1.oninput = function() {
                                              output1.innerHTML = formatNumber(this.value);
                                            }
                                        </script>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(8, 'nine', '61.52')">Continue</button>
                                        </div>
                                        -->
                                    </div>
                                    
                                    <div class="form-box form-box-8" style="display:none;">
                                        <h2 class="text-center">What is your timeframe?</h2>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('immediately','BUY_TIMEFRAME', 9, 'ten', '65')">Immediately</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('30_days','BUY_TIMEFRAME', 9, 'ten', '65')">30 days</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('60_days','BUY_TIMEFRAME', 9, 'ten', '65')">60 days</button>
                                            <button class="btn green-btn" onclick="return setFieldValue('90_days','BUY_TIMEFRAME', 9, 'ten', '65')">90 days</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setFieldValue('no_time_constraint','BUY_TIMEFRAME', 9, 'ten', '65')">No time constraint</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack( 7, 'nine', '50')">Go Back</button>
                                        </div>
										
                                    </div>
                                    
                                    <div class="form-box form-box-9" style="display:none;">
                                        
                                        <h2 class="text-center">State</h2>
                                        
                                        <div class="form-group text-center fw">
                                            <select id="PROP_ST" name="PROP_ST" class="form-control fld-center" >
                                              <option value="" selected="selected">Select State *</option>
                                              <option value="AL" >AL</option>
                                              <option value="AK" >AK</option>
                                              <option value="AZ" >AZ</option>
                                              <option value="AR" >AR</option>
                                              <option value="CA" >CA</option>
                                              <option value="CO" >CO</option>
                                              <option value="CT" >CT</option>
                                              <option value="DC" >DC</option>
                                              <option value="DE" >DE</option>
                                              <option value="FL" >FL</option>
                                              <option value="GA" >GA</option>
                                              <option value="HI" >HI</option>
                                              <option value="ID" >ID</option>
                                              <option value="IL" >IL</option>
                                              <option value="IN" >IN</option>
                                              <option value="IA" >IA</option>
                                              <option value="KS" >KS</option>
                                              <option value="KY" >KY</option>
                                              <option value="LA" >LA</option>
                                              <option value="ME" >ME</option>
                                              <option value="MD" >MD</option>
                                              <option value="MA" >MA</option>
                                              <option value="MI" >MI</option>
                                              <option value="MN" >MN</option>
                                              <option value="MS" >MS</option>
                                              <option value="MO" >MO</option>
                                              <option value="MT" >MT</option>
                                              <option value="NE" >NE</option>
                                              <option value="NV" >NV</option>
                                              <option value="NH" >NH</option>
                                              <option value="NJ" >NJ</option>
                                              <option value="NM" >NM</option>
                                              <option value="NY" >NY</option>
                                              <option value="NC" >NC</option>
                                              <option value="ND" >ND</option>
                                              <option value="OH" >OH</option>
                                              <option value="OK" >OK</option>
                                              <option value="OR" >OR</option>
                                              <option value="PA" >PA</option>
                                              <option value="RI" >RI</option>
                                              <option value="SC" >SC</option>
                                              <option value="SD" >SD</option>
                                              <option value="TN" >TN</option>
                                              <option value="TX" >TX</option>
                                              <option value="UT" >UT</option>
                                              <option value="VT" >VT</option>
                                              <option value="VA" >VA</option>
                                              <option value="WA" >WA</option>
                                              <option value="WV" >WV</option>
                                              <option value="WI" >WI</option>
                                              <option value="WY" >WY</option>
                                           </select>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(10, 'eleven', '72')">Continue</button>
                                            <br>
                                            <hr>
                                            <button class="gold-btn" onclick="return goBack(8, 'ten', '58')">Go Back</button>
                                        </div>
										
                                    </div>
                                    
                                    <div class="form-box form-box-10" style="display:none;">
                                        
                                        <h2 class="text-center" style="font-size: 20px;margin-bottom:0px;">Please estimate the value of the property</h2>
                                        <div class="form-group text-center">
                                            <label>
                                              	<input type="range" min="50000" max="2000000" value="500000" step="5000" class="slider form-control custom-space" id="EST_VAL" name="EST_VAL">
                                            </label>
                                        </div>
                                        <div id="myRangeTextContainer" class="text-center">$<span id="EST_VALText"></span></div>
                                        <script>
                                            
                                            var slider2 = document.getElementById("EST_VAL");
                                            var output2 = document.getElementById("EST_VALText");
                                            output2.innerHTML = formatNumber(slider2.value); 
                                              
                                            slider2.oninput = function() {
                                              output2.innerHTML = formatNumber(this.value);
                                            }
                                        </script>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <h1 class="text-center" style="font-size: 20px;margin-bottom:0px;">What is the remaining 1st mortgage balance?</h1>
                                        <div class="form-group text-center">
                                            <label>
                                              	<input type="range" min="0" max="100000" value="0" step="50000" class="slider form-control custom-space" id="BAL_ONE" name="BAL_ONE">
                                            </label>
                                        </div>
                                        <div id="myRangeTextContainer" class="text-center">$<span id="BAL_ONEText"></span></div>
                                        <script>
                                            
                                            var slider3 = document.getElementById("BAL_ONE");
                                            var output3 = document.getElementById("BAL_ONEText");
                                            output3.innerHTML = formatNumber(slider3.value); 
                                              
                                            slider3.oninput = function() {
                                              output3.innerHTML = formatNumber(this.value);
// 												console.log({output3})
                                            }
                                        </script>
                                        
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(11, 'twelve', '79')">Continue</button>
                                            <br><hr>
                                            <button class="gold-btn" onclick="return goBack(9, 'eleven', '65')">Go Back</button>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-box form-box-11" style="display:none;">
                                        
                                        <h2 class="text-center">Would you like to borrow additional cash?</h2>
                                        <div class="form-group text-center">
                                            <label>
                                              	<input type="range" min="0" max="200000" value="0" step="10000" class="slider form-control" id="ADD_CASH" name="ADD_CASH">
                                            </label>
                                        </div>
                                        <div id="myRangeTextContainer" class="text-center">$<span id="ADD_CASHText"></span></div>
                                        <script>
                                            
                                            var slider4 = document.getElementById("ADD_CASH");
                                            var output4 = document.getElementById("ADD_CASHText");
                                            output4.innerHTML = formatNumber(slider4.value); 
                                              
                                            slider4.oninput = function() {
                                              output4.innerHTML = formatNumber(this.value);
                                            }
                                        </script>
                                        
                                        
                                        
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(12, 'thirteen', '86')">Continue</button>
                                            <br><hr>
                                            <button class="gold-btn" onclick="return goBack(10, 'twelve', '72')">Go Back</button>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-box form-box-12" style="display:none;">
                                        <h2 class="text-center">What is Your Current Address?</h2>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="address" id="address" class="form-control fld-center" placeholder="Address *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="city" id="city" class="form-control fld-center" placeholder="City *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="zip_code" id="zip_code" class="form-control fld-center" placeholder="Zip Code *" value="<?php echo $zipcode; ?>">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <select id="country" name="country" class="form-control fld-center" >
                                              <option value="" selected="selected">Select Country *</option>
                                              <option value="AF" >AF</option>
                                              <option value="AL" >AL</option>
                                              <option value="DZ" >DZ</option>
                                              <option value="AS" >AS</option>
                                              <option value="AD" >AD</option>
                                              <option value="AO" >AO</option>
                                              <option value="AI" >AI</option>
                                              <option value="AQ" >AQ</option>
                                              <option value="AG" >AG</option>
                                              <option value="AR" >AR</option>
                                              <option value="AM" >AM</option>
                                              <option value="AW" >AW</option>
                                              <option value="AU" >AU</option>
                                              <option value="AT" >AT</option>
                                              <option value="AZ" >AZ</option>
                                              <option value="BS" >BS</option>
                                              <option value="BH" >BH</option>
                                              <option value="BD" >BD</option>
                                              <option value="BB" >BB</option>
                                              <option value="BY" >BY</option>
                                              <option value="BE" >BE</option>
                                              <option value="BZ" >BZ</option>
                                              <option value="BJ" >BJ</option>
                                              <option value="BM" >BM</option>
                                              <option value="BT" >BT</option>
                                              <option value="BO" >BO</option>
                                              <option value="BA" >BA</option>
                                              <option value="BW" >BW</option>
                                              <option value="BV" >BV</option>
                                              <option value="BR" >BR</option>
                                              <option value="IO" >IO</option>
                                              <option value="BN" >BN</option>
                                              <option value="BG" >BG</option>
                                              <option value="BF" >BF</option>
                                              <option value="BI" >BI</option>
                                              <option value="KH" >KH</option>
                                              <option value="CM" >CM</option>
                                              <option value="CA" >CA</option>
                                              <option value="CV" >CV</option>
                                              <option value="KY" >KY</option>
                                              <option value="CF" >CF</option>
                                              <option value="TD" >TD</option>
                                              <option value="CL" >CL</option>
                                              <option value="CN" >CN</option>
                                              <option value="CX" >CX</option>
                                              <option value="CC" >CC</option>
                                              <option value="CO" >CO</option>
                                              <option value="KM" >KM</option>
                                              <option value="CG" >CG</option>
                                              <option value="CD" >CD</option>
                                              <option value="CK" >CK</option>
                                              <option value="CR" >CR</option>
                                              <option value="CI" >CI</option>
                                              <option value="HR" >HR</option>
                                              <option value="CU" >CU</option>
                                              <option value="CY" >CY</option>
                                              <option value="CZ" >CZ</option>
                                              <option value="DK" >DK</option>
                                              <option value="DJ" >DJ</option>
                                              <option value="DM" >DM</option>
                                              <option value="DO" >DO</option>
                                              <option value="TP" >TP</option>
                                              <option value="EC" >EC</option>
                                              <option value="EG" >EG</option>
                                              <option value="SV" >SV</option>
                                              <option value="GQ" >GQ</option>
                                              <option value="ER" >ER</option>
                                              <option value="EE" >EE</option>
                                              <option value="ET" >ET</option>
                                              <option value="FK" >FK</option>
                                              <option value="FO" >FO</option>
                                              <option value="FJ" >FJ</option>
                                              <option value="FI" >FI</option>
                                              <option value="FR" >FR</option>
                                              <option value="FX" >FX</option>
                                              <option value="GF" >GF</option>
                                              <option value="PF" >PF</option>
                                              <option value="TF" >TF</option>
                                              <option value="GA" >GA</option>
                                              <option value="GM" >GM</option>
                                              <option value="GE" >GE</option>
                                              <option value="DE" >DE</option>
                                              <option value="GH" >GH</option>
                                              <option value="GI" >GI</option>
                                              <option value="GR" >GR</option>
                                              <option value="GL" >GL</option>
                                              <option value="GD" >GD</option>
                                              <option value="GP" >GP</option>
                                              <option value="GU" >GU</option>
                                              <option value="GT" >GT</option>
                                              <option value="GN" >GN</option>
                                              <option value="GW" >GW</option>
                                              <option value="GY" >GY</option>
                                              <option value="HT" >HT</option>
                                              <option value="HM" >HM</option>
                                              <option value="VA" >VA</option>
                                              <option value="HN" >HN</option>
                                              <option value="HK" >HK</option>
                                              <option value="HU" >HU</option>
                                              <option value="IS" >IS</option>
                                              <option value="IN" >IN</option>
                                              <option value="ID" >ID</option>
                                              <option value="IR" >IR</option>
                                              <option value="IQ" >IQ</option>
                                              <option value="IE" >IE</option>
                                              <option value="IL" >IL</option>
                                              <option value="IT" >IT</option>
                                              <option value="JM" >JM</option>
                                              <option value="JP" >JP</option>
                                              <option value="JO" >JO</option>
                                              <option value="KZ" >KZ</option>
                                              <option value="KE" >KE</option>
                                              <option value="KI" >KI</option>
                                              <option value="KP" >KP</option>
                                              <option value="KR" >KR</option>
                                              <option value="KW" >KW</option>
                                              <option value="KG" >KG</option>
                                              <option value="LA" >LA</option>
                                              <option value="LV" >LV</option>
                                              <option value="LB" >LB</option>
                                              <option value="LS" >LS</option>
                                              <option value="LR" >LR</option>
                                              <option value="LY" >LY</option>
                                              <option value="LI" >LI</option>
                                              <option value="LT" >LT</option>
                                              <option value="LU" >LU</option>
                                              <option value="MO" >MO</option>
                                              <option value="MK" >MK</option>
                                              <option value="MG" >MG</option>
                                              <option value="MW" >MW</option>
                                              <option value="MY" >MY</option>
                                              <option value="MV" >MV</option>
                                              <option value="ML" >ML</option>
                                              <option value="MT" >MT</option>
                                              <option value="MH" >MH</option>
                                              <option value="MQ" >MQ</option>
                                              <option value="MR" >MR</option>
                                              <option value="MU" >MU</option>
                                              <option value="YT" >YT</option>
                                              <option value="MX" >MX</option>
                                              <option value="FM" >FM</option>
                                              <option value="MD" >MD</option>
                                              <option value="MC" >MC</option>
                                              <option value="MN" >MN</option>
                                              <option value="ME" >ME</option>
                                              <option value="MS" >MS</option>
                                              <option value="MA" >MA</option>
                                              <option value="MZ" >MZ</option>
                                              <option value="MM" >MM</option>
                                              <option value="NA" >NA</option>
                                              <option value="NR" >NR</option>
                                              <option value="NP" >NP</option>
                                              <option value="NL" >NL</option>
                                              <option value="AN" >AN</option>
                                              <option value="NC" >NC</option>
                                              <option value="NZ" >NZ</option>
                                              <option value="NI" >NI</option>
                                              <option value="NE" >NE</option>
                                              <option value="NG" >NG</option>
                                              <option value="NU" >NU</option>
                                              <option value="NF" >NF</option>
                                              <option value="MP" >MP</option>
                                              <option value="NO" >NO</option>
                                              <option value="OM" >OM</option>
                                              <option value="PK" >PK</option>
                                              <option value="PW" >PW</option>
                                              <option value="PA" >PA</option>
                                              <option value="PG" >PG</option>
                                              <option value="PY" >PY</option>
                                              <option value="PE" >PE</option>
                                              <option value="PH" >PH</option>
                                              <option value="PN" >PN</option>
                                              <option value="PL" >PL</option>
                                              <option value="PT" >PT</option>
                                              <option value="PR" >PR</option>
                                              <option value="QA" >QA</option>
                                              <option value="RE" >RE</option>
                                              <option value="RO" >RO</option>
                                              <option value="RU" >RU</option>
                                              <option value="RW" >RW</option>
                                              <option value="KN" >KN</option>
                                              <option value="LC" >LC</option>
                                              <option value="VC" >VC</option>
                                              <option value="WS" >WS</option>
                                              <option value="SM" >SM</option>
                                              <option value="ST" >ST</option>
                                              <option value="SA" >SA</option>
                                              <option value="SN" >SN</option>
                                              <option value="RS" >RS</option>
                                              <option value="SC" >SC</option>
                                              <option value="SL" >SL</option>
                                              <option value="SG" >SG</option>
                                              <option value="SK" >SK</option>
                                              <option value="SI" >SI</option>
                                              <option value="SB" >SB</option>
                                              <option value="SO" >SO</option>
                                              <option value="ZA" >ZA</option>
                                              <option value="SS" >SS</option>
                                              <option value="GS" >GS</option>
                                              <option value="ES" >ES</option>
                                              <option value="LK" >LK</option>
                                              <option value="SH" >SH</option>
                                              <option value="PM" >PM</option>
                                              <option value="SD" >SD</option>
                                              <option value="SR" >SR</option>
                                              <option value="SJ" >SJ</option>
                                              <option value="SZ" >SZ</option>
                                              <option value="SE" >SE</option>
                                              <option value="CH" >CH</option>
                                              <option value="SY" >SY</option>
                                              <option value="TW" >TW</option>
                                              <option value="TJ" >TJ</option>
                                              <option value="TZ" >TZ</option>
                                              <option value="TH" >TH</option>
                                              <option value="TG" >TG</option>
                                              <option value="TK" >TK</option>
                                              <option value="TO" >TO</option>
                                              <option value="TT" >TT</option>
                                              <option value="TN" >TN</option>
                                              <option value="TR" >TR</option>
                                              <option value="TM" >TM</option>
                                              <option value="TC" >TC</option>
                                              <option value="TV" >TV</option>
                                              <option value="UG" >UG</option>
                                              <option value="UA" >UA</option>
                                              <option value="AE" >AE</option>
                                              <option value="GB" >GB</option>
                                              <option value="US" selected="selected">USA</option>
                                              <option value="UM" >UM</option>
                                              <option value="UY" >UY</option>
                                              <option value="UZ" >UZ</option>
                                              <option value="VU" >VU</option>
                                              <option value="VE" >VE</option>
                                              <option value="VN" >VN</option>
                                              <option value="VG" >VG</option>
                                              <option value="VI" >VI</option>
                                              <option value="WF" >WF</option>
                                              <option value="EH" >EH</option>
                                              <option value="YE" >YE</option>
                                              <option value="ZM" >ZM</option>
                                              <option value="ZW" >ZW</option>
                                           </select>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(13, 'fourteen', '93')">Continue</button>
                                            <br><hr>
                                            <button class="gold-btn" onclick="return goBack(11, 'thirteen', '79')">Go Back</button>
                                        </div>
										   
                                    </div>
                                    
                                    
                                    <div class="form-box form-box-13" style="display:none;">
                                        <h2 class="text-center">How can we contact you?</h2>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="first_name" id="first_name" class="form-control fld-center" placeholder="First Name *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="last_name" id="last_name" class="form-control fld-center" placeholder="Last Name *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="email_address" id="email_address" class="form-control fld-center" placeholder="Email Address *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="phone_home" id="phone_home" class="form-control fld-center" placeholder="Phone Home *">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="phone_work" id="phone_work" class="form-control fld-center" placeholder="Work Phone">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <input type="text" name="phone_cell" id="phone_cell" class="form-control fld-center" placeholder="Cell Phone">
                                        </div>
                                        <div class="form-group text-center fw">
                                            <select id="best_time" name="best_time" class="form-control fld-center" >
                                              <option value="" selected="selected">Select Best Time To Call</option>
                                              <option value="M" >Morning</option>
                                              <option value="A" >Afternoon</option>
                                              <option value="E" >Evening</option>
                                           </select>
                                        </div>
                                        
                                        <p style="font-size: 12px;margin-bottom: 10px;margin-top:10px;">By clicking the button below, you acknowledge, consent and agree to the following: a) Our Privacy
Policy and consent to receive notices and other communications electronically from Champion Lender
(a Champion Leads LLC Brand) SecureRights and our    
											<a href="https://championlender.com/premier-partners/">Premier Partners</a>
; b) We take your privacy
seriously. You are providing express written consent for Champion Lender (a Champion Leads LLC
Brand) SecureRights and our    
							Premier Partners
 to share your information with up to four (4) of its
Premier Partners and for SecureRights, parties calling on behalf of Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners or authorized third parties on their behalf to contact you (including through automated means; e.g. autodialing, text and pre-recorded messaging) about financial services or other credit related offers via telephone, mobile device (including SMS and MMS) and/or email, even if your telephone number is currently listed on any state, federal, local or corporate Do Not Call list; c) Consent to be contacted is not required in order to purchase goods or services from Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners that contact you. You may choose to speak with an individual service provider by dialing (888) 883-2062; d) That I have received and reviewed the Mortgage Broker Disclosures for my state; and e) You are providing written consent under the Fair Credit Reporting Act for Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners to obtain information from your personal credit profile. You authorize Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners to obtain such information solely to prequalify you for credit options and connect you with an appropriate lending partner. SecureRights NMLS 3175.</p>
                                        <div class="form-group fw checkbox">
                                            <label>
                                                <input type="checkbox" name="opt_in" value="1" /> I agree to terms & conditions *. 
                                            </label>
                                        </div> 
                                        
                                        
                                        <div class="form-group text-center">
                                            <button class="btn green-btn" onclick="return setNext(14, '', '')">Submit</button>
                                            <br><hr>
                                            <button class=" gold-btn" onclick="return goBack(12, 'fourteen', '87')">Go Back</button>
                                        </div>
                                    </div>
                                    
                                    
                                    <input type="hidden" autocomplete="off" name="PRODUCT" id="PRODUCT" />
                                    <input type="hidden" autocomplete="off" name="LOAN_TYPE" id="LOAN_TYPE" />
                                    <input type="hidden" autocomplete="off" name="PROP_DESC" id="PROP_DESC" />
                                    <input type="hidden" autocomplete="off" name="VA_STATUS" id="VA_STATUS" />
                                    <input type="hidden" autocomplete="off" name="CRED_GRADE" id="CRED_GRADE" />
                                    <input type="hidden" autocomplete="off" name="FHA_BANK_FORECLOSURE" id="FHA_BANK_FORECLOSURE" />
                                    <input type="hidden" autocomplete="off" name="NUM_MORTGAGE_LATES" id="NUM_MORTGAGE_LATES" />
                                    <input type="hidden" autocomplete="off" name="BUY_TIMEFRAME" id="BUY_TIMEFRAME" />
                                    
                                    <input type="hidden" name="ANNUAL_VERIFIABLE_INCOME" value="" />
                                    <input type="hidden" name="SPEC_HOME" value="YES" />
                                    <input type="hidden" id="leadid_token" name="SR_TOKEN" value="" />
                                    <input type="hidden" name="SR_URL" value="https://championlender.com/" />
                                    <input type="hidden" name="PROP_ZIP" value="<?php echo $zipcode; ?>" />
                                    <input type="hidden" name="DOWN_PMT" value="" />
                                    
                                    <input type="hidden" name="state" value="" />
                                    
                                    <textarea name="TCPA_LANGUAGE" style="display:none;">By clicking the button below, you acknowledge, consent and agree to the following: a) Our Privacy
Policy and consent to receive notices and other communications electronically from Champion Lender
(a Champion Leads LLC Brand) SecureRights and our Premier Partners;
  b) We take your privacy
seriously. You are providing express written consent for Champion Lender (a Champion Leads LLC
Brand) SecureRights and our Premier Partners to share your information with up to four (4) of its
Premier Partners and for SecureRights, parties calling on behalf of Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners or authorized third parties on their behalf to contact you (including through automated means; e.g. autodialing, text and pre-recorded messaging) about financial services or other credit related offers via telephone, mobile device (including SMS and MMS) and/or email, even if your telephone number is currently listed on any state, federal, local or corporate Do Not Call list; c) Consent to be contacted is not required in order to purchase goods or services from Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners that contact you. You may choose to speak with an individual service provider by dialing (888) 883-2062; d) That I have received and reviewed the Mortgage Broker Disclosures for my state; and e) You are providing written consent under the Fair Credit Reporting Act for Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners to obtain information from your personal credit profile. You authorize Champion Lender (a Champion Leads LLC Brand) SecureRights and our Premier Partners to obtain such information solely to prequalify you for credit options and connect you with an appropriate lending partner. SecureRights NMLS 3175.</textarea>
                                    
                                    
                                      <input type='hidden' id='AFID' name='AFID' />
                                      <input type='hidden' id='SID' name='SID' value=''  />
                                      <input type='hidden' id='ADID' name='ADID' value=''  />
                                      <input type='hidden' id='ClickID' name='ClickID' value=''  />
                                      <input type='hidden' id='AffiliateReferenceID' name='AffiliateReferenceID' value=''  />
                                      <input type='hidden' id='IPAddress' name='IPAddress' value='<?php echo getUserIpAddr(); ?>'  />
	<script>
		document.querySelector('#AFID').value = document.referrer.split('?AFID=')[1] || '465368'
	</script>
                                      
                                      <!--<input id="leadid_token" name="universal_leadid" type="hidden" value=""/>-->
                                    
                                </form>
                            
                            

                            <?php } ?>
           </div>
            </div>
            </div>
				<?php the_content(); ?>
				<?php fusion_link_pages(); ?>
			</div>
			<?php if ( ! post_password_required( $post->ID ) ) : ?>
				<?php if ( Avada()->settings->get( 'comments_pages' ) ) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
</section>

<script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/cd215e19-865f-3649-c858-0b6646c7cfa9.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=5a78319c-dbbd-54af-cb0a-a61a01c27aa9&lck=cd215e19-865f-3649-c858-0b6646c7cfa9&snippet_version=2' /></noscript>
<?php get_footer(); ?>