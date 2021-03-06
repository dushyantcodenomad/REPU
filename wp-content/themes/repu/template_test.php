<?php
/*
Template name:Test
*/
get_header();
?>



<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<div class="wrapper-outer">
<script>

$(function() {
$( "#accordion" ).accordion();
});
</script>
    <div class="wrapper-inner" style="background-color:#fff;>
		 <div class="inner">
			<div class="form_area">
            
                <h2 class="form_header">
                VOLUNTEER APPLICATION
                </h2>
                <?php // echo do_shortcode('[contact-form-7 id="294" title="volunteer"]');?>
 <form action="<?php bloginfo('url');?>/mail_attach.php" method="post" enctype="multipart/form-data">
               <section>
                <div id="accordion">
                
                    <h3 class="head">
                        Step 1 - Personal Information
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                       <div class="single_row">
                            <div class="left_area">
                                <span class="label">Full name</span>
                            </div>
                          <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="display_name" class="fld"/>
                                    <span>First name</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="lname" class="fld"/>
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                          
                        
                         <div class="single_row">
                            <div class="left_area">
                                <span class="label">Username</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="user_nicename" class="fld"/>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Password</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="password" name="user_pass" class="fld"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Birthday</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer_2">
                                       <select name="day" class="fld">
                                       <option value="">Day</option>
                                        <?php 
		  for($i=1;$i<=31;$i++)
		  { ?>
		  <option value="<?php echo $i?>"><?php echo $i ?></option>
		 <?php   } ?>
                    </select>
                    <select name="month" id="month">
		 <option value="">Month</option>
		 <?php
		 $x=array("jan","feb","march","appr","may","jun","july","august","sep","oct","nov","dec");
		  foreach($x as $month)
		     { ?>
			    <option value="<?php echo $month ?>"><?php echo $month ?></option>
			<?php  }  ?> 
			</select>
                         <select name="year" id="year">
			<option value="">Year</option>
			<?php
			for($i=1947;$i<=2020;$i++)
			 { ?>
			   <option value="<?php echo $i ?>"><?php echo $i ?></option>
			 <?php } ?>
			 </select>
                               
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Sex</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="radio" name="gender" value="Male" class="f_name"/> Male
                                </div>
                                <div class="fld_outer">
                                    <input type="radio" name="gender" value="Female" class="l_name"/> Female
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Home Address </span>
                            </div>
                            <div class="right_area" style="height:auto !important">
                                <div class="fld_outer">
                                    <input type="text" name="streetaddress" class="fld"/>
                                    <span>Street Address </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="streetaddressline2" class="fld"/>
                                    <span>Street Address Line 2 </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="city" class="fld"/>
                                    <span>City</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="state" class="fld"/>
                                    <span> 	State / Province </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="postal" class="fld"/>
                                    <span> Postal / Zip Code </span>
                                </div>
                                <div class="fld_outer">
                                   <select name="country" id="city" >
			 <option value="">---select---</option>
			 <?php
			 $x=array("India","Afghanistan","Australia","Bangladesh","Canada","China","Egypt");
			 foreach($x as $country)
			    { ?>
				<option value="<?php echo $country ?>"><?php echo $country ?></option>
			<?php	} ?>
			</select>
                                    <span>Country</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">E-mail address </span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer_f">
                                    <input type="email" name="user_email" class="fld"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="boxed">
                               <span class="label">Cell</span>
                               <div class="sm_fld="fld"/>
                               <input type="text" name="cell" class="fld"/>
                                </div>
                            </div>
                            <div class="boxed">
                               <span class="label">Home</span>
                               <div class="sm_fld">
                                    <input type="text" name="home" class="fld"/>
                                </div>
                            </div>
                            <div class="boxed">
                               <span class="label">Work</span>
                               <div class="sm_fld">
                                    <input type="text" name="work" class="fld"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="head">
                        <span> Additional Information</span>
                    </h3>
                    <div class="section_detail">
                    
                    	<div class="single_row">
                            <div class="left_area">
                                <span class="label">Resume</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="file" name="file" class="fld"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Shirt Size</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="shirtsize" class="fld"/>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                        	<div class="fw_ttl">
                        	<span>Skills/Interests </span>
                            </div>
                            <div class="fw_area">
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Photography" /><label>Photography</label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Self- Defense" /><label>Self- Defense </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Fashion" /><label>Fashion </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Yoga" /><label>Yoga </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Fitness" /><label>Fitness</label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Culinary" /><label>Culinary </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Swimming" /><label>Swimming </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Art" /><label>Art </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Web Development" /><label>Web Development </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Poetry" /><label>Poetry </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Tutoring" /><label>Tutoring </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Embroidery" /><label>Embroidery </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Knitting" /><label>Knitting </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Wood Work" /><label>Wood Work </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Law" /><label>Law </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Mentoring" /><label>Mentoring </label></div>
                            </div>
                        </div>
                        <div class="fw_ttl">
                        	<span>Courses Offered </span>
                            </div>

                            
                           <div class="fw_area">
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Math" /><label>Math</label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Physics" /><label>Physics</label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Chemistry" /><label>Chemistry </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Biology" /><label>Biology </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Computer" /><label>Computer</label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="English" /><label>English </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Music" /><label>Music </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="History" /><label>History </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Geography" /><label>Geography </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Political Science" /><label>Political Science</label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Psychology" /><label>Psychology </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Accountancy" /><label>Accountancy</label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Business studies" /><label>Business studies </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Economics" /><label>Economics </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Physical Education" /><label>Physical Education </label></div>
                            	<div class="selector_box"><input type="checkbox" name="sub[]" value="Business Organization" /><label>Business Organization </label></div>
                            </div>
                        
                    </div>


             
                    
                    
                    <h3 class="head">
                        Step 3 - References
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                    
                    	<div class="single_row">
                            <div class="left_area">
                                <span class="label">Reference #1</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref1_fname" class="fld"/>
                                    <span>First name</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="ref1_lname" class="fld"/>
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Phone Number</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref1_phoneno" class="fld"/>
                                    <span>Phone number</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Email</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="email" name="ref1_email" placeholder="Enter your email id" class="fld"/>
                                    <span>ex: myname@example.com</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Reference #2</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref2_fname" class="fld"/>
                                    <span>First name</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="ref2_lname" class="fld"/>
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Phone Number</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref2_phoneno" class="fld"/>
                                    <span>Phone number</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Email</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="email" name="ref2_email" placeholder="Enter your email id" class="fld"/>
                                    <span>ex: myname@example.com</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Reference #3</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref3_fname" class="fld"/>
                                    <span>First name</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="ref3_lname" class="fld"/>
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Phone Number</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="ref3_phoneno" class="fld"/>
                                    <span>Phone number</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Email</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="email" name="ref3_email" placeholder="Enter your email id" class="fld"/>
                                    <span>ex: myname@example.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <h3 class="head">
                        Step 4 - Terms of Service
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                        <div class="single_row">
                        <div class="content_box">
                        <p>
                        I hereby authorize R.E.P. U, Inc. and/ or its agents to make an investigation of my background, references, characters, past employment, education, and criminal history record information. This may include any state or local files, including those maintained by both public and private organizations, and all public records. I give my permission for R.EP. U to access these files for the purpose of confirming the information contained on my application and/ or obtaining other information, which may be essential to my qualifications for employment. I hereby consent to R.E.P. U, Inc. verifying all the information I have provided on my application form.
                        </p>
                        </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Signature</span>
                            </div>
                            <div class="right_area">
                                <div class="sign_box">
                                    <textarea name="sign"></textarea>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     <h3 class="head">
                        Step 5 - Payment
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                    	<div class="single_row">
                            <div class="left_area">
                                <span class="label">Application Processing Fee </span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer_f">
                                 	<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dushyant%40codenomad%2enet&lc=US&item_name=codenomad&item_number=12345&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest"><input type="radio" /></a>
                                    <span class="">Application fee: Adult (18 years of age and over) $ 70.00 USD</span>
                                    <select>
                                    	<option>1</option>
                                    </select>	 
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
								<input type="submit" name="submit" value="Submit" class="sub_fbt"/>	 
                        </div>
                    </div>
                </div>
				</section>  
        </div>
    </div>
</div>
<?php 
if(isset($_GET['sent']) && $_GET['sent'] == 1){
     echo "<script>alert('Your Application has been sent successfully,Please check your mail.')</script>";
}

 ?> 

<?php get_footer();?>
