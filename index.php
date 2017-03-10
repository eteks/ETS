<?php
date_default_timezone_set('Asia/Kolkata');
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
	//echo $message;
	mail($to, $email_subject, $message, $headers);
}
if(isset($_POST['quote_submit'])){
	$services = '';
	foreach ($_POST['service'] as $value) {
		$services .= $value.',';
	}
	$req_service = rtrim($services, ",");
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_phone = $_POST['contact_phone'];
	$contact_address = $_POST['client_address'];
	$city = $_POST['client_city'];
	$area = $_POST['client_area'];
	$business_types = $_POST['client_business'];
	$description = $_POST['contact_message'];
	$email_subject = "Request Quote";
	$to = "info@etekchnoservices.com";
	$headers = "From: " . $contact_email . "\r\n";
	$headers .= "Reply-To: " . $contact_email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = "<html><body><h2 style='text-align:center;color:green;'> Quote Form Details </h2><table style='background: #f9f9f9;margin: 0 auto;'><tr><th style='padding:10px 20px;'> Name </th><td style='padding:10px 20px;color: #00b3fe;'> " . $contact_name . " </td></tr><tr><th style='padding:10px 20px;'> Email </th><td style='padding:10px 20px;color: #00b3fe;'> " . $contact_email . " </td></tr><tr><th style='padding:10px 20px;'> Address </th><td style='padding:10px 20px;color: #00b3fe;'> " . $contact_address . " </td></tr><tr><th style='padding:10px 20px;'> Phone number </th><td style='padding:10px 20px;color: #00b3fe;'> " . $contact_phone . " </td></tr><tr><th style='padding:10px 20px;'> City </th><td style='padding:10px 20px;color: #00b3fe;'> " . $city . " </td></tr><tr><th style='padding:10px 20px;'> Area </th><td style='padding:10px 20px;color: #00b3fe;'> " . $area . " </td></tr><tr><th style='padding:10px 20px;'> Required services </th><td style='padding:10px 20px;color: #00b3fe;'> " . $req_service . " </td></tr><tr><th style='padding:10px 20px;'> Type of business </th><td style='padding:10px 20px;color: #00b3fe;'> " . $business_types . " </td></tr><tr><th style='padding:10px 20px;'> Description </th><td style='padding:10px 20px;color: #00b3fe;'> " . $description . " </td></tr></table></body></html>";
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
		<title>Etekchno Services Pvt Ltd - Web Solutions &amp; Digital Marketing Agency &amp; Mobile App</title>
		<META NAME="Keywords" CONTENT="Website Design & Development, Web solutions, Web Application, Mobile Apps, Digital Marketing">
		<meta name="description" content="Etekchno Services - We‘re a talented bunch of expertise in the field of Design and Development in upcoming new 			technologies. We believe that team work ends in dream work! We work in the same way which results in utmost satisfaction of our clients.">
		<META NAME="Subject" CONTENT="Web solutions, Web Application, Mobile Apps, Digital Marketing">
		<META NAME="Language" CONTENT="English">
		<META NAME="Robots" CONTENT="INDEX,FOLLOW">
		<meta name="keywords" content="Etekchno Services">
		<meta name="google-site-verification" content="UqQD7Cvljjhs00HxUgygKcKQm5pfQKYEgYE2WCbXFCM" />
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
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/responsive.css">
	</head>
	<body>
		<div class="mobilenav">
			<ul>
				<li>
					<span class="nav-label"><a href="#header">Home</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="#about-us">About Us</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="#our-works">Our Works</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="#our-skills">Our Skills</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="#testimonials">Testimonials</a></span>
				</li>
				<!--<li>
					<span class="nav-label"><a data-rel="#our-team">Our Team</a></span>
				</li>-->
				<li>
					<span class="nav-label"><a href="#social-feeds">Social Feeds</a></span>
				</li>
				<li>
					<span class="nav-label"><a data-toggle="modal" data-target=".demo-popup" type="button">Get Quotes</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="courses.php">Our Course</a></span>
				</li>
				<li>
					<span class="nav-label"><a href="#contact1">Contact Us</a></span>
				</li>
			</ul>
		</div>
		<a href="javascript:void(0)" class="menu-trigger">
		<div class="hamburger">
			<div class="menui top-menu"></div>
			<div class="menui mid-menu"></div>
			<div class="menui bottom-menu"></div>
		</div> </a>
		<header id="header">
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="logo-container"> 
						<a href="index.php"> <img src="img/logo.png" alt="Etekchno Services" class="logo"> </a>
					</div>
					<div class="item active">
						<div class="fill_four"></div>
						<div class="carousel-caption">
							<h1 class="light mab-none super">HASTEN..! HERE IS AN OPPORTUNITY TO BECOME AN ADROIT WEB DEVELOPER
							<br />
							<strong class="bold-text"></strong>
							<br />
							</h1>
							<p class="light margin-bottom-medium">
								Learn and perform web development through an integrated curriculum covering HTML 5, jQuery, CSS 3, Bootstrap, Wordpress, Inauguration PHP, Python, MySQL
							</p> 
							<div class="call-button">
								<div class="row">
									<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
										<!-- <button type="button" class="btn-default button pull-right internal-link bold-text light hvr-grow" data-rel="#our-works">Get Quotes</button> -->
										<button type="button" class="btn btn-primary slide_btn" data-toggle="modal" data-target=".demo-popup">Get Quotes</button>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<a href="courses.php" class="button pull-right internal-link bold-text main-bg1 hvr-grow" data-rel="">Course</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="item">
						<div class="fill_one"></div>
						<div class="carousel-caption">
							<h1 class="light mab-none">We make awesome
							<br/>
							<strong class="bold-text">responsive websites</strong>
							<br/>
							look good on all devices</h1>
							<p class="light margin-bottom-medium">
								Technologies we specialize in Visio. Balsamiq. Invision. Photoshop.  Illustrator. HTML. CSS. JavaScript. jQuery. Angular JS. WordPress. Bootstrap.
							</p>
							<div class="call-button">
								<div class="row">
									<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
										<!-- <button type="button" class="btn-default button pull-right internal-link bold-text light hvr-grow" data-rel="#our-works">Get Quotes</button> -->
										<button type="button" class="btn btn-primary slide_btn" data-toggle="modal" data-target=".demo-popup">Get Quotes</button>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<a href="courses.php" class="button pull-left internal-link bold-text main-bg1 hvr-grow" data-rel="">Course</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="fill_two"></div>
						<div class="carousel-caption">
							<h1 class="light mab-none">We build great
							<br />
							<strong class="bold-text">Hybrid & Native Apps</strong>
							<br />
							to make your business easy</h1>
							<p class="light margin-bottom-medium">
								Technologies we specialize in Visio. Balsamiq. Invision. Photoshop. Illustrator. HTML. CSS. XML. JavaScript. jQuery. Angular JS. Bootstrap. PHP. Python. Django. SQL. MySQL. PrestaShop. CS-Cart. OpenCart. Android.
							</p>
							<div class="call-button">
								<div class="row">
									<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
										<!-- <button type="button" class="btn-default button pull-right internal-link bold-text light hvr-grow" data-rel="#our-works">Get Quotes</button> -->
										<button type="button" class="btn btn-primary slide_btn " data-toggle="modal" data-target=".demo-popup">Get Quotes</button>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<a href="courses.php" class="button pull-left internal-link bold-text main-bg1 hvr-grow" data-rel="">Course</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="fill_three"></div>
						<div class="carousel-caption">
							<h1 class="light mab-none">We help grow your
							<br />
							business through effective <strong class="bold-text">digital marketing</strong></h1>
							<p class="light margin-bottom-medium">
								Technologies we specialize in Social Media. Email Marketing. Website Analytics.
								<br />
								Search Engine Optimization.
							</p>
							<div class="call-button">
								<div class="row">
									<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
										<!-- <button type="button" class="btn-default button pull-right internal-link bold-text light hvr-grow" data-rel="#our-works">Get Quotes</button> -->
										<button type="button" class="btn btn-primary slide_btn" data-toggle="modal" data-target=".demo-popup">Get Quotes</button>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<a href="courses.php" class="button pull-left internal-link bold-text main-bg1 hvr-grow" data-rel="">Course</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					

					<div class="left carousel-control hidden-xs"  >
						<a href="#myCarousel" data-slide="prev" class="icon-prev icon-arrow-left"></a>
					</div>
					<div class="right carousel-control hidden-xs">
						<a  href="#myCarousel"  data-slide="next" class="icon-next icon-arrow-right"></a>
					</div>
				</div>
				<!-- =========================
			       Call to action
			    ============================== -->
			    <section id="call-to-action" class="call-to-action main-bg">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
			                    <p class="light-text">Join With Us &nbsp;Drop Your CV</p>
			                </div>
			                <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated career">
			                    
			                    <!-- <a href="#portfolio" class="button light internal-link pull-left hvr-grow" data-rel="#portfolio">View Portfolio</a> -->
			                	<a href="career.php" class="button pull-left internal-link bold-text main-bg1" data-rel="">Career</a>
			                </div>
			                <div class="clearfix"></div>
			            </div>
			        </div>
    </section> <!-- *** end call-to-action *** -->
		</header>
	
		<section id="about-us" class="about-us">
			<div class="overlay">
				<div class="container padding-top-large">
					<h2><strong class="bold-text">About</strong><span class="light-text main-color"> US</span></h2>
					<div class="line main-bg"></div>
					<div class="row margin-bottom-medium1">
						<div class="col-md-7">
							<div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
								“To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity” <strong class="bold-text">- Don Adan Adams</strong>

							</div>
						</div>
						<div class="col-md-5">
							<img src="img/about-side-side.jpg" alt="About Us Big Image" class="center-block img-responsive">
						</div>
						<div class="clearfix"></div>
					</div>
					<p class="margin-bottom-medium1 wow slideInUp">
						Our Mission is to satisfy our clients with the support of new technologies. These milestones are our step stones that guarantee our quality service.
						<br />
						We‘re a talented bunch of expertise in the field of Design and Development in upcoming new technologies. We believe that team work ends in dream work! We work in the same way which results in utmost satisfaction of our clients.
						<br />
						<br />
						We work for customer satisfaction by fulfilling them in all ways.We are here to satisfy U! Makes more customers for us! We stay focused on building a strong relationship with each and every client. This brings us more new customers like YOU!
					</p>
				</div>
			</div>
		</section>
	<div class="extra-space-l"></div>
		<section id="our-works" class="page bg-style1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="portfolio">
							<div class="page-header-wrapper">
								<div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
									<h2>Our Works</h2>
									<div class="devider"></div>
								</div>
							</div>
							<div class="portfoloi_content_area" >
								<div class="portfolio_menu" id="filters">
									<ul>
										<li class="active_prot_menu">
											<a href="#porfolio_menu" data-filter="*">all</a>
										</li>
										<li>
											<a href="#porfolio_menu" data-filter=".websites">websites</a>
										</li>
										<li>
											<a href="#porfolio_menu" data-filter=".webDesign" >web apps</a>
										</li>
										<li>
											<a href="#porfolio_menu" data-filter=".GraphicDesign">graphic design</a>
										</li>
									</ul>
								</div>
								<div class="portfolio_content">
									<div class="row"  id="portfolio">
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p1.jpg" alt="title">
												<div>
													<a id="prj_oozaaoo" href="portfolio.html" target="_blank">Oozaaoo</a>
													<span>Tourism</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p2.jpg" alt="title">
												<div>
													<a id="prj_happy" href="portfolio.html" target="_blank">Happi Journey</a>
													<span>Tourism</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 webDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p3.jpg" alt="title">
												<div>
													<a id="prj_resell" href="portfolio.html" target="_blank">Resell</a>
													<span>Classifieds</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 webDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p4.jpg" alt="title">
												<div>
													<a id="prj_wellocity" href="portfolio.html" target="_blank">Wellocity</a>
													<span>Sports</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img//portfolio/p5.jpg" alt="title">
												<div>
													<a id="prj_gt" href="portfolio.html" target="_blank">Globalen Technologies</a>
													<span>E-Publishing</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p6.jpg" alt="title">
												<div>
													<a id="prj_ranklaw" href="portfolio.html" target="_blank">Rank Law</a>
													<span>Advocates & Notary</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p7.jpg" alt="title">
												<div>
													<a id="prj_ksr" href="portfolio.html" target="_blank">KSR Developer</a>
													<span>Real Estate
														<br />
														(On Going)</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p8.jpg" alt="title">
												<div>
													<a id="prj_gettimelam" href="portfolio.html" target="_blank">GettiMelam</a>
													<span>Wedding Planner
														<br />
														(On Going)</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 webDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p9.jpg" alt="title">
												<div>
													<a id="prj_printstork" href="portfolio.html" target="_blank">Print Stork</a>
													<span>E-commerce</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 webDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p10.jpg" alt="title">
												<div>
													<a id="prj_ponlait" href="portfolio.html" target="_blank">Ponlait</a>
													<span>E-commerce</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p11.jpg" alt="title">
												<div>
													<a id="prj_spartan" href="portfolio.html" target="_blank">Spartan MBBS</a>
													<span>Educational Sector
														<br />
														(On Going)</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p12.jpg" alt="title">
												<div>
													<a id="prj_kamakshi" href="portfolio.html" target="_blank">Kamakshi Gifts</a>
													<span>E-commerce <br />(On Going)</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 websites">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p13.jpg" alt="title">
												<div>
													<a id="prj_bamboo" href="portfolio.html" target="_blank">Bamboo Life</a>
													<span>E-commerce <br />(On Going)</span>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 GraphicDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p14.jpg" alt="title">

												<div>
													<a href="broucher/ETS.pdf" download="ETS.pdf">Broucher</a>
												</div>

												<!-- <span>Print</span> -->
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 GraphicDesign">
											<div class="portfolio_single_content">
												<img src="img/portfolio/p15.jpg" alt="title">
												<div>
													<a>ID Card</a>
													<!-- <span>Print</span> -->
												</div>
											</div>
										</div>
									</div>
									<!--portfolio-->
								</div>
								<!--portfolio-content-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="extra-space-l"></div>
		<section id="our-skills">
			<div class="page-header-wrapper">
				<div class="container">
					<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
						<h2>Our Skills</h2>
						<div class="devider"></div>
					</div>
				</div>
			</div>
			<div class="our-skills">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>Visio, Balsamiq, InVision, Axure</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-high" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>Photoshop, Illustrator</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-medium" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
								<div class="progress-lebel">
									<h5>HTML, CSS, Bootstrap, XML</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-medium" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
								<div class="progress-lebel">
									<h5>JavaScript, jQuery, Angular JS</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-medium" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>PHP, Python, Django</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-seventy" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>WordPress, PrestaShop, CS-Cart, OpenCart</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-seventy" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>Android</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-fifty" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
								<div class="progress-lebel">
									<h5>SQL, MySQL</h5>
								</div>
								<div class="progress">
									<div class="progress-bar progress-range-eighty" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<div class="extra-space-l"></div>
		<section id="testimonials" class="wow zoomIn testimmonial section-padding">
			<div class="container">
				<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
					<h2>Testimonials</h2>
					<div class="devider"></div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="testimonial-feed">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="item active text-center">
										<p>
											“We really pleased to work with your company. Whenever we request for our need, we got good response from you. I wish, continue to do more project with your company in future”
										</p>
										<span class="pull-right"> Arun</span>
									</div>
									<div class="item text-center">
										<p>
											“Its sound good to have business relationship with your company for your dedication in work”
										</p>
										<span class="pull-right"> Prithiv</span>
									</div>
								</div>
							</div>
						</div>
						<div class="control-arrow">
							<a class="right1 carousel-control1" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a>
							<a class="left1 carousel-control1" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="extra-space-l"></div>
		<!--<section id="our-team">
			<div id="tf-team" class="text-center">
				<div class="overlay">
					<div class="container">
						<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
							<h2>Our team</h2>
							<div class="devider"></div>
						</div>
						<div id="team" class="owl-carousel owl-theme row">
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/01.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Devi .G</h3>
										<p>
											Managing Director
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/02.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Deepak .K</h3>
										<p>
											Chief Executive Officer
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/03.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Sastha .M</h3>
										<p>
											Technical Lead and POC
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/04.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Kumaran .E</h3>
										<p>
											Junior HR and Admin
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/05.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Madhivanan .V</h3>
										<p>
											Project Coordinator
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/06.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Sundararaj .S</h3>
										<p>
											UX Team Lead
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/07.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Muthukaruppan .P</h3>
										<p>
											Python Developer
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/08.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Kalaiarasi .R</h3>
										<p>
											Software Engineer
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/09.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Sivaramakannan .S</h3>
										<p>
											Web Developer Trainee
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/10.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Akila Devi .P</h3>
										<p>
											Programmer UX
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/11.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>Vel Pandi .P</h3>
										<p>
											UI Developer Trainee
										</p>
										<!-- <p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
							<div class="item">
								<div class="thumbnail">
									<img src="img/team/12.jpg" alt="..." class="img-circle team-img">
									<div class="caption">
										<h3>ThangaMariappan .P</h3>
										<p>
											Web Developer Trainee
										</p>
										<!-<p>Do not seek to change what has come before. Seek to create that which has not.</p> ->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>-->
		<div class="extra-space-l"></div>
		<div class="extra-space-l"></div>
		<section id="social-feeds">
			<div class="page-header-wrapper">
				<div class="container">
					<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
						<h2>Social Feeds</h2>
						<div class="devider"></div>
					</div>
				</div>
			</div>
			<div class="social-feeds">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="social-feeds-bar wow slideInLeft img-responsive" data-wow-delay="0.2s">
								<div class="feeds-bar">
									<div class="fb-page" data-href="https://www.facebook.com/etekchnoservices/" data-tabs="timeline" data-width="550" data-height="330" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
										<blockquote cite="https://www.facebook.com/etekchnoservices/" class="fb-xfbml-parse-ignore">
											<a href="https://www.facebook.com/etekchnoservices/">Etekchnoservices</a>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="social-feeds-bar wow slideInRight" data-wow-delay="0.4s">
								<div class="feeds-bar">
									<a class="twitter-timeline" data-width="550" data-height="330" data-theme="light" href="https://twitter.com/EtekchnoService">Tweets by EtekchnoService</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact1" class="pad-bot-30">
			<div class="container">
				<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
					<h2>Contact Us</h2>
					<div class="devider"></div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<form name="sentMessage" id="contact_Form"  method="post">
							<div class="row">
								<div class="contact_field col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
														<p>Please Enter all the fields</p>
								</div> 
								<div class="contact_mail col-lg-12 col-md-12 col-sm-12 col-xs-12">	
													 	<p>Please Enter a valid email address</p>
								</div>  
								 <div class="contact_no col-lg-12 col-md-12 col-sm-12 col-xs-12">	
													 	<p>Please Enter valid no</p>
								</div> 
								<div class="contact_success col-lg-12 col-md-12 col-sm-12 col-xs-12">	
													 	<p>Email Successfully Send</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control " placeholder="Your Name *" id="contact_name" name="contact_name" >
										<!-- <p class="help-block text-danger"></p> -->
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Email *" id="contact_email" name="contact_email">
										<!-- <p class="help-block text-danger"></p> -->
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" id="contact_phone" name="contact_phone" >
										<!-- <p class="help-block text-danger"></p> -->
									</div>
								</div>
								<div class="col-md-6 ">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="contact_message" name="contact_message"></textarea>
										<!-- <p class="help-block text-danger"></p> -->
									</div>
									<div id="success"></div>
									<button type="submit" class="contact contact_submit_btn" name="contact_submit">
										Send Message
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4" id="adrs">
						<h3>our <span>address</span></h3>
						<address>
							No: 29, Subramaniar Koil Street,
							<br/>
							Kathirkamam, Puducherry - 605 009,
							India.
						</address>
						<div class="contact-number">
							<p>
								<span class="fa fa-phone"></span> (91) - (413) - 2275 575
							</p>
						</div>
						<div class="contact-mobile">
							<p>
								<span class="fa fa-mobile"></span> (91) 97862 43201 90470 70789
							</p>
						</div>
						<div class="contact-email">
							<p>
								<a href="mailto:info@etekchnoservices.com"><span class="fa fa-envelope-o"></span>info@etekchnoservices.com</a>
							</p>

						</div>
					</div>
				</div>
			</div>
		</section><!--Contact-->

		<div id="social">
			<div class="social-bg-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 ">
							<div class="contact-social">
								<ul>
									<li>
										<a class="fa fa-facebook" href="http://facebook.com/etekchnoservices/" target="_blank"></a>
									</li>
									<li>
										<a class="fa fa-twitter" href="https://twitter.com/EtekchnoService" target="_blank"></a>
									</li>
									
									<li>
										<a class="fa fa-linkedin" href="https://in.linkedin.com//company/etekchno-services" target="_blank"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map_area"></div>
	<!--footer-->	
		<div class="footer">
			<div class="container">
				<div class="row">
					<!---Translator-->
					<div class="translator col-md-6 col-xs-6">
				      <div id="google_translate_element"></div>
						<script type="text/javascript">
							function googleTranslateElementInit() {
								new google.translate.TranslateElement({
									pageLanguage : 'en',
									includedLanguages : 'en,fr'
								}, 'google_translate_element');
							}
						</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			         </div>
			         <div class="col-md-6 col-xs-6">
			         	<div class="row">
			         		<div class="col-md-6 col-xs-0">
			         			
			         		</div>
			         		<div class="career_form col-md-3 col-xs-12">
			         			<a href="career.php" data-rel="">Career Form</a>
			         		</div>
			         	
			         		  <!--Get Quote Popup-->
							<div id="quote_popup" class="quote col-md-3 col-xs-12">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".demo-popup">Get Quotes</button>
							<div class="modal fade demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
								<div class="modal-dialog modal-md"> 
									 <div class="modal-content"> 
									 	 <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"> </i></button> <h3 class="modal-title">Get Quote by filling the below fields: </h3> </div> 
									     <form class="quote_form" method="post" id="quote_form" action="index.php">
									     	<div class="modal-body"> 
												<div class="error_test">
													<p>*Please Enter all the mandantary fields</p>
												</div> 
												<div class="error_mail">	
													<p>*Please Enter valid email address</p>
												</div>  										
												<div class="error_tele">	
													<p>*Please Enter valid No</p>
												</div> 
												<div class="error_checkbox">	
													<p>*Please select the service required</p>
												</div> 
											    <div class="pull-left">
									     		      <p>Name *:</p>
			        							      <input type="text" id="quote_name" name="contact_name" /><br>
			        							      
			        							</div>
			        							<div class="pull-left">      
			        							      <p>Email *:</p>
			        							      <input type="text" id="quote_email" name="contact_email" /><br>
			        							 </div>     
			        							 <div class="pull-left"> 
			        							      <p>Address:</p>
			        							      <input type="text" id="address" name="client_address" /><br>
			        							  </div>
			        							  <div class="pull-left">     
			        							      <p>Phone Number *:</p>
			        							      <input type="tele" id="quotephone" name="contact_phone" /><br>
			        							  </div>
			        							  <div class="pull-left">     
				        							   <p>City *:</p>
				        							   <input type="text" id="client_city" name="client_city" /><br> 
				        						  </div>
			        							  <div class="pull-left"> 
			        							      <p>Area:</p>
			        							      <input type="text" id="area" name="client_area" /><br> 
			        							  </div>  
				    							  <div class="pull-left"> 
				    							     <p>Service Required *:  </p><br>
				    							     <div class="check-service" id="check-service">
				        							   <input type="checkbox" class="service" name="service[]" value="Website Design & Development"/>Website Design & Development<br>
				        							   <input type="checkbox" class="service" name="service[]" value="Designing"/>Graphic Designs<br>
				        							   <input type="checkbox" class="service" name="service[]" value="Web Application"/>Web Application<br>
				        							   <input type="checkbox" class="service" name="service[]" value="Mobile Application"/>Mobile Application<br>
				        							   <input type="checkbox" class="service" name="service[]" value="Online Shopping/ eCommerce"/>Digital Marketing<br>
				        							   <input type="checkbox" class="service" name="service[]" value="SEO"/>SEO<br>
				        							  </div>   
				        						   </div>  
				        						   <div class="pull-left"> 
			        							      <p for="name">Type of your Business *:</p>
			        							      <input type="text" id="client_business" name="client_business" /><br>
			        							   </div>   
			        							   <div class="pull-left"> 
			        							      <p for="name">Description any:</p>
			        							      <textarea id="message" rows="5" cols="18" name="contact_message"> </textarea>
			        							   </div>   
			        							  <div class="clearfix"></div>      
				                             </div>
				                             <div class="success col-lg-6 col-md-6 col-sm-6 col-xs-6 ">	
												<p>*Email sent successfully</p>
											</div> 
										     <div class="modal-footer"> <a> <button type="submit" name="quote_submit" class="btn btn-primary" data-toggle="modal">Submit</button></a> </div>
									     </form> 
									 </div>
							      </div><!---modal fade-->
							   </div><!--modal-->    		     
						      </div><!---#qoute-popup-->
			         	</div>
			         </div>					
			      <div class="clearfix"> </div>
			   </div><!--row-->
			   <div row >
			   	<!--Copy-rights-->
					<div class="copy_rights col-md-12 col-xs-12">
						<p>
							 

							&copy; <?php echo date("Y"); ?> Etekchno Services Private Limited. All Rights Reserved.
						</p>
					</div>
					
			   </div>
			</div><!--container-->
			<a href="#" class="back-to-top">Top</a>
		</div> <!--footer-->
		
	

		
		<script src="js/vendor/jquery-1.11.1.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/vendor/bootstrap.js"></script>
		<script src="js/main.js"></script>
		<script src="js/custom.js"></script>
		<!-- <script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script> -->
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="js/theme.js"></script>
		<script src="js/script.js"></script>
		<script src="js/contact_process.js"></script>
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbuVxM8vd876DdJ3vDZMakcC98TUwOGYs&callback=initMap" type="text/javascript"></script>
		<script type="application/javascript">
			function initialize() {
				var mapOptions = {
					zoom : 17,
					scrollwheel : false,
					center : new google.maps.LatLng(11.942160, 79.795164)
				};
				var map = new google.maps.Map(document.getElementById('map_area'), mapOptions);
				var contentString = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<div id="bodyContent">' + '<p><b>eTechnoservices</b></p>' + '<p>No:29, 2nd floor, Subramanian Kovil street,kathirkamam, Puducherry - 9</p>' + '<p>info@etekchnoServices.com</p>' + '<p>+919786243201</p>' + '</div>' + '</div>';
				var infowindow = new google.maps.InfoWindow({
					content : contentString
				});
				var marker = new google.maps.Marker({
					position : map.getCenter(),
					animation : google.maps.Animation.BOUNCE,
					icon : 'img/map-marker.png',
					map : map,
					title : 'eTechnoServices'
				});
			}


			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-75374968-2', 'auto');
			ga('send', 'pageview');

		</script>		
		<script type="application/ld+json">
		{ 
			"@context" : "http://schema.org",
			"@type" : "Organization",
			"name" : "Etekchnoservices Pvt Ltd",
			"logo" : "http://etekchnoservices.com/img/logo.png",
			"url" : "http://etekchnoservices.com",
			"sameAs" : [
			"https://twitter.com/EtekchnoService",
			"https://www.facebook.com/etekchnoservices",
			"https://www.linkedin.com/company/etekchno-services"
			]
		}
		</script>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "http://etekchnoservices.com/",
			"potentialAction": {
			"@type": "SearchAction",
			"target": "http://etekchnoservices.com/search?q={search_term_string}",
			"query-input": "required name=search_term_string"
		}
		}
		</script>
	</body>
</html>
