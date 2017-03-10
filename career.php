<?php
date_default_timezone_set('Asia/Kolkata');
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

<!doctype html>
<html class="no-js" lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-TextLayoutMetrics" content="gdi" />
		<title>Etekchno Services</title>
		<meta name="description" content="Etekchno Services - Startup Agency">
		<meta name="keywords" content="Etekchno Services">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">
		<link rel="stylesheet" href="css/flat-icon/flaticon.css">
		<link rel="stylesheet" href="css/skin/cool-gray.css">
		<link rel="stylesheet" href="css/j-forms.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/responsive.css">
	</head>
	<body>
		<!--Top Header: Begin-->
		<section id="top-header" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-sm-5 col-xs-6">
						<div class="portfolio_logo">
							<a href="index.php"> <img src="img/logo.png" class="logo" alt="Etekchno Services"> </a>
						</div> 	
					</div>
					<div class="col-lg-5 col-md-6 col-sm-7 col-xs-6">
						<div title="Home" class="font_home">
							<a href="index.php"><i class="fa fa-home" aria-hidden="true"> </i></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</section> <!--Top Header: End-->
		</br>
		<div>
		<div class="content">
				<!-- <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
					<h2><b>Career Form</b></h2>
					<div class="devider"> </div>
				</div> -->
		<div class="main w3l">
				<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
					<p>Career Form</p>
					
				</div>
			
			<form class="contact-forms wthree" id="career_form" method="post" action="career.php" enctype='multipart/form-data'>
				<!-- end /.header-->
				<div class="error_test1">
					<p><b>*Please Enter all the mandantry fields</b></p>
				</div> 
				<div class="error_mail1">	
					<p>*Please Enter valid email address</p>
				</div>  										
				<div class="error_tele1">	
					<p>*Please Enter valid No</p>
				</div> 
				
			</br>
					<!-- start name -->
					<div class="first-line agileits">
						<div class="span6 main-row input">														
								<input type="text" id="first_name" name="first_name" placeholder="First name *">						
						</div>
						<div class="span6 main-row input">														
								<input type="text" id="last_name" name="last_name" placeholder="Last name *">														
						</div>
					</div>
					<!-- end name -->

					<!-- start email phone -->
					<div class="first-line agileits">
						<div class="span6 main-row input">															
								<input type="text" placeholder="Email*" id="email" name="email">							
						</div>
						<div class="span6 main-row input">															
								<input type="text" placeholder="Phone*" id="phone" name="phone">							
						</div>
					</div>
					<div class="main-row">
						<label class="input select">
							<select id="gender" name="gender">
								<option value="" selected="" class="position1">Gender*</option>
								<option value="male">Male</option>
								<option value="female"> Female</option>
							</select>
							<i></i>
						</label>
					</div>

					
					<!-- start position -->
					<div class="main-row">
						<label class="input select">
							<select id="position" name="position">
								<option value="" selected="" class="position1">Choose position</option>
								<option value="student">Student</option>
								<option value="employee">Employee</option>
								<option value="business">Fresher</option>
							</select>
							<i></i>
						</label>
					</div>
					<!-- end position -->
					<!-- start city post code -->
					<div class="first-line agileits">
						<div class="span8 main-row input">															
							<input type="text" id="city" placeholder="City*" name="city">							
						</div>						
					</div>
					<!-- end city post code -->

					<!-- start address -->
					<div class="main-row">
						<div class="input">							
							<input type="text" id="address" placeholder="Address" name="address">
						</div>
					</div>
					<!-- end address -->
					
					<div class="main-row">
						<div class="input">
							<label class="file">Upload Resume</label>
							<input type="file" id="upload" class="upload" placeholder="Upload Resume" name="filename">
							<label class="file">* Attach only doc, docx, pdf files</label>							
						</div>
					</div>
					
					<!-- start message -->
					<div class="main-row">
						<div class="input">
							<textarea placeholder="Additional info" spellcheck="false" name="message" id="message"></textarea>
								<span class="tooltip tooltip-right-top">Key Skills</span>
						</div>
					</div>
					<!-- end message -->					
				<div class="footer1">
					<div class="success1 col-lg-6 col-md-6 col-sm-6 col-xs-6 ">	
					<p>* Your job application sent successfully</p>
					</div>
					<button type="submit" class="primary-btn" name="submit">Send</button>
					<button type="reset" class="secondary-btn">Reset</button>
				</div>
				<!-- end /.footer -->
			</form>
		</div>
	</div>	
</div>
	<div class="extra-space-l"> </div>	   
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							&copy; <?php echo date("Y"); ?> Etekchno Services Private Limited. All Rights Reserved.
						</p>
					</div>
				</div>
			</div>
			<a href="#" class="back-to-top">Top</a>
		</div> 
		<script src="js/vendor/jquery-1.11.1.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/vendor/bootstrap.js"></script>
		<script src="js/main.js"></script>
		<script src="js/custom.js"></script>
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<!-- <script src="js/theme.js"></script> -->
		<script src="js/script.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
	</body>
</html>
