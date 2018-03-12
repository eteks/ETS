 <?php 
    include('header.php');
    if (isset($_POST['contact_submit'])) {
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_phone = $_POST['contact_phone'];
	$contact_message = $_POST['contact_message'];
	$email_subject = "CONTACT US DETAILS";
	$to = "info@etekchnoservices.com";
	$headers = "From: " . $contact_email . "\r\n";
	$headers .= "Reply-To: " . $contact_email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = "<html> <body> <h2 style='text-align:center;color:green;'> Contact Details </h2> <table style='background: #f9f9f9;margin: 0 auto;'> <tr> <th style='padding:10px 20px;'>  Name </th> <td style='padding:10px 20px;color: #00b3fe;'> " . $contact_name . " </td> </tr> <tr> <th style='padding:10px 20px;'>  Email </th> <td style='padding:10px 20px;color: #00b3fe;'> " . $contact_email . " </td> </tr> <tr> <th style='padding:10px 20px;'>  Subject </th> <td style='padding:10px 20px;color: #00b3fe;'> " . $contact_phone . " </td> </tr> <tr> <th style='padding:10px 20px;'> Message </th> <td style='padding:10px 20px;color: #00b3fe;'> " . $contact_message . " </td> </tr> </table> </body> </html>";
	mail($to, $email_subject, $message, $headers);
}

?> 
 <style>
 	.address
 	{
 		display:inline-block;
 		width:48%;
 		min-width:300px;
 		vertical-align: top;
 	}
 	.address h4
 	{
 		text-decoration: underline;
 	}
 	.address p
 	{

 	}

 </style>
    <!--Main Content Area-->
    <main id="content">
        <!--Services-->
        <!-- <aside id="testimonials" class="scrollto" data-enllax-ratio=".2"> -->
				<!-- Heading -->
            	<div class="row clearfix text-center">
            		<div class="section-heading">	                    
	                    <h2 class="section-title">CONTACT</h2>
	                </div>					
	                <!-- Form starts -->
					<div class="">						
						<form name="sentMessage" id="contact_Form"  method="post">
						<div class="col-2">
							<input type="text" class="form-control " placeholder="Your Name *" id="contact_name" name="contact_name" >
							<input type="text" class="form-control" placeholder="Your Email *" id="contact_email" name="contact_email">
							<input type="tel" class="form-control" placeholder="Your Phone *" id="contact_phone" name="contact_phone" >
						</div>
						<div class="col-2">
							<textarea class="form-control" placeholder="Your Message *" id="contact_message" name="contact_message"></textarea>
						</div>
						<div style="clear:both" class="text-center">
							<button type="submit" class="button" name="contact_submit">Send Message</button>
						</div>
						</form>
						<div class="contact_field ">
						<p>Please Enter all the fields</p>
						</div> 
						<div class="contact_mail">	
						<p>Please Enter a valid email address</p>
						</div>  
						<div class="contact_no">	
						<p>Please Enter valid no</p>
						</div> 
						<div class="contact_success">	
						<p>Email Successfully Send</p>
						</div>
					</div>
					<!-- Form Ends -->
					
					<!-- Address details -->
					<h3 class="text-center" style="border-top:1px solid #ccc;padding-top: 5px;margin-top: 10px;">Our Address</h3>
	                <div class="text-center">
	                	<div class="classic address">
	                		<h4>Puducherry:</h4>	                		
	                		<p>No: 29, Subramaniar Koil Street,
							Kathirkamam,<br/> Puducherry - 605 009, India.</p>
							<p><span class="fa fa-phone"></span> (91) - (413) - 2275 575</p>
							<p><span class="fa fa-mobile"></span> (91) 8807129650 </p>
							<span class="fa fa-envelope-o"></span> <a href="#">info@etekchnoservices.com</a>
	                	</div>
	                	<div class="classic address">
	                		<h4>Chennai:</h4>	                		
	                		<p>No: 10 gandhi nagar extention 2 Pallavaram Chrompet,<br/> Nagalkeni,<br/> Chennai - 600044, India.</p>
							<p><span class="fa fa-mobile"></span> (91) 9789761928 </p>
							<span class="fa fa-envelope-o"></span> <a href="#">info@etekchnoservices.com</a>
	                	</div>
	                </div> 
	                <!-- Address Ends  -->
            	</div>
            	<!-- Map Area -->
            	<div class="row clearfix" style="padding-top:0">
            		<div id="map_area">
            			
            		</div>
            	</div>
            	<!-- Map Area Ends -->

        <!-- </aside> -->
        <!--End of Services-->

    </main>
    <!--End Main Content Area-->
    
<?php 
    include('footer.php');
?> 