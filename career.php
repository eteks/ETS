 <?php 
    include('header.php');
    if (isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$contact_email = $_POST['email'];	
	$contact_phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$position = $_POST['position'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	// $resume = $_POST['upload'];	
	$contact_message = $_POST['message'];
	$email_subject = "Career Form";
	
	$to = "info@etekchnoservices.com";
	$headers = "From: " . $contact_email . "\r\n";
	$headers .= "Reply-To: " . $contact_email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  	
	$message = "<html> 
	<body>
		 <h2 style='text-align:center;color:green;'> Career Form Details </h2>
		 <h3 style='text-align:center;color:green;'> Job Application from the site visitor <span style='color:red'><b>".$first_name."</b></span></h2>
		 </br>
		  <table style='background: #f9f9f9;margin: 0 auto;'> 
		  	<tr> 
		  		<th style='padding:10px 20px;'>  First Name </th>
		  		 <td style='padding:10px 20px;color: #00b3fe;'> " . $first_name . " </td>
		  	</tr>
		  	<tr> 
		  		<th style='padding:10px 20px;'>  Last Name </th>
		  		 <td style='padding:10px 20px;color: #00b3fe;'> " . $last_name . " </td>
		  	</tr>
		  	<tr> 
		  	 	<th style='padding:10px 20px;'>  Email </th> 
		  	 	<td style='padding:10px 20px;color: #00b3fe;'> " . $contact_email . " </td>
		  	</tr> 
		  	<tr>
		  	  	 <th style='padding:10px 20px;'>  Phone </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $contact_phone . " </td> 
		  	</tr>
		  	<tr>
		  	  	 <th style='padding:10px 20px;'>  Gender </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $gender . " </td> 
		  	</tr>
		  	<tr>
		  	  	 <th style='padding:10px 20px;'>  Position </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $position . " </td> 
		  	</tr>
		  	<tr>
		  	  	 <th style='padding:10px 20px;'>  City </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $city . " </td> 
		  	</tr>
		  	<tr>
		  	  	 <th style='padding:10px 20px;'>  Address </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $address . " </td> 
		  	</tr>		 		  	
		  	<tr> 
		  		<th style='padding:10px 20px;'>  Message </th> 
		  	  	<td style='padding:10px 20px;color: #00b3fe;'> " . $contact_message . " </td>
		  	</tr>
		  	 </table> 
		  </body>
 </html>";
 
 
	//echo $message;
	mail($to, $email_subject, $message, $headers);
}
?> 
 
    <!--Main Content Area-->
    <main id="content" class="secondary-color">

        <!--Services-->
        <!-- <aside id="testimonials" class="scrollto" data-enllax-ratio=".2"> -->
				
            	<div class="row clearfix text-center ">
            		<div class="section-heading">	                    
	                    <h2 class="section-title">CAREER</h2>
	                </div>
	                <!-- Form starts -->
					<div class="col-1">
						<form id="career_form" method="post" action="career.php" enctype='multipart/form-data'>						
						<div class="col-2">
							<input type="text" id="first_name" name="first_name" placeholder="First name *">							
							<input type="text" id="last_name" name="last_name" placeholder="Last name *">
							<select id="gender" name="gender">
								<option value="" selected="" class="position1">Gender*</option>
								<option value="male">Male</option>
								<option value="female"> Female</option>
							</select>
							<input type="text" id="city" placeholder="City*" name="city">
							<textarea type="text" name="address" id="address" placeholder="Address*"></textarea>
						</div>
						<div class="col-2">
							<input type="text" placeholder="Email*" id="email" name="email">	
							<input type="text" placeholder="Phone*" id="phone" name="phone">
							<select id="position" name="position">
								<option value="" selected="" class="position1">Choose position</option>
								<option value="student">Student</option>
								<option value="employee">Employee</option>
								<option value="business">Fresher</option>
							</select>
							<div class="text-left file_space clearfix">
								<label>Resume : </label><input type="file" name="filename" placeholder="Choose File*"/><label class="file_con">* Attach only doc, docx, pdf files</label>	
							</div>
							<textarea type="text" name="message" id="message" placeholder="Additional Info*"></textarea>
							
						</div>
						<div class="text-center" style="clear:both">
							<button type="submit" class="button" name="submit">Send</button>
							<button type="reset" class="button">Reset</button>
							<div class="error_test1">
								<p><b>*Please Enter all the mandatory fields</b></p>
							</div> 
							<div class="error_mail1">	
								<p>*Please Enter valid email address</p>
							</div>  										
							<div class="error_tele1">	
								<p>*Please Enter valid No</p>
							</div> 
							<div class="success1">	
								<p>* Your job application sent successfully</p>
							</div>
						</div>
						
						</form>
					</div>
					<!-- Form Ends -->
            	</div>
            	
        <!-- </aside> -->
        <!--End of Services-->

    </main>
    <!--End Main Content Area-->
    
<?php 
    include('footer.php');
?> 