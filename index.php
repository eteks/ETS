 <?php 
    include('header.php');
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
    echo $message;
   mail($to, $email_subject, $message, $headers);
}
?> 
 <!--Banner Content-->
        <div id="banner-content" class="clearfix">

            <div class="col-2 home_header text-center clearfix">
                        <h2>DISTINCTIVE IT SOLUTION PROVIDER</h2>
                        <h2>HI-TECH IT PRODUCT SALES AND SUPPORT</h2>
            </div>        
            <div style="clear:both"></div>
            <div class="col-2">
				<div id="carousel">
				  
				  <div class="" id="slides">
				    <ul>
				      <li class="slide">
				        <div class="quoteContainer">				        	
				          		<p class="quote-phrase slider_line">WE HELP GROW YOUR BUSINESS THROUGH EFFECTIVE </br><strong>DIGITAL MARKETING</strong></br> 
								<span>Social Media. Email Marketing. Website Analytics. Search Engine Optimization.</span>
								</p>
				        </div>
				      </li>
				      <li class="slide">
				        <div class="quoteContainer">
				          <p class="quote-phrase slider_line">WE DEVELOP GREAT <strong>HYBRID & NATIVE APPS</strong> TO MAKE YOUR BUSINESS EASY 
							<span></br>Visio. Balsamiq. Invision. Photoshop. Illustrator. HTML. CSS. XML. JavaScript. jQuery. Angular JS. Bootstrap. PHP. Python. Django. SQL. MySQL. PrestaShop. CS-Cart. OpenCart Android.</span></p>
				        </div>
				        <!-- <div class="authorContainer">
				          <p class="quote-author">Andy Fakename // CEO: Andy's Camping Supplies</p>
				        </div> -->
				      </li>
				      <li class="slide">
				        <div class="quoteContainer">
				          <p class="quote-phrase slider_line">WE DO IMPRESSIVE <strong>ANIMATION</strong> DESIGNS <span></br> webgl. 2D & 3D animation. Video Animations. gif.</span> </p>
				        </div>
				        <!-- <div class="authorContainer">
				          <p class="quote-author">Janice Falsename</p>
				        </div> -->
				      </li>
				      <li class="slide">
				        <div class="quoteContainer">
				          <p class="quote-phrase slider_line">WE BUILD REAL TIME </br><strong>EMBEDDED SYSTEM</strong> <span></br>Arduino IDE. node.js.  home assistant. Homebridge. MQTT. OpenHAB. Arduino. Raspberry PI.</span> </p>
				        </div>
				        <!-- <div class="authorContainer">
				          <p class="quote-author">Janice Falsename</p>
				        </div> -->
				      </li>
				    </ul>
				  </div>
				  
				  <div class="btn-bar">
				   <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a></div> 
				  </div>
				   <!--<a href="career.php" class="button mov_right">START CAREER TODAY</a>-->
				</div>
                <!-- <div class="section-heading">
                    <h1>A FREE AND SIMPLE LANDING PAGE</h1>
                    <h2>Namari is a free landing page template you can use for your projects. It is free to use for your
                        personal and commercial projects, enjoy!</h2>
                </div>  -->

                <!--Call to Action-->
                <!-- <a href="#" class="button">START CREATING TODAY</a> -->
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">



        <!--Testimonials-->
        <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

                <div class="section-heading">
                    <h2 class="section-title">Testimonials</h2>
                </div>

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic wow fadeInLeft">
                    <img src="images/testimonial.png" alt="User"/>
                    <q>We really pleased to work with your company. Whenever we request for our need, we got good response from you. I wish, continue to do more project with your company in future</q>
                    <footer>Arun</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic wow fadeInUp">
                    <img src="images/testimonial.png" alt="User"/>
                    <q>Its sound good to have a business relationship with your company for your dedication in work. Let us keep up the momentum in all our upcoming projects. Good Luck!</q>
                    <footer>Prithiv</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic wow fadeInRight">
                    <img src="images/testimonial.png" alt="User"/>
                    <q>I am incredibly satisfied with the work. It looks great, and I have already received great feedback. I always refer people to you when they ask who does the website.</q>
                    <footer>Raymond</footer>
                </blockquote>
                <!-- End of Testimonial-->

        </aside>
        <!--End of Testimonials-->
        
        <!--Clients-->
        <section id="clients" class="scrollto clearfix text-center">
				
				<div class="section-heading">
                    <h2 class="section-title">Our Clients</h2>
                </div>
                

                <div class="col-1 " id="">
                   
                
                <ul id="content-slider" class="content-slider">
                    <li>
                          <a href="http://etekchnoservices.com/gt/" target="_blank">
                            <img src="images/clients/globalen_logo.png" alt="Company"/>
                          </a>
                    </li>
                   
                   <li>
                        <a href="http://restaurantshalimar.fr/" target="_blank">
                             <img src="images/clients/shalimar_logo.png" alt="Company"/>                        
                        </a>
                    </li>

                    <li>                        
                        <a href="http://ksrrealvalue.com/" target="_blank">
                            <img src="images/clients/ksr_logo.png" alt="Company"/>
                        </a>
                    </li>

                    <li>                        
                        <a href="http://kamakshi-gifts.com/" target="_blank">
                            <img src="images/clients/kamakshi_logo.png" alt="Company"/>
                        </a>
                    </li>
                    
                    <li>
                        <a href="http://etekchnoservices.com/gettimelam/" target="_blank">
                        <img src="images/clients/gettimelam_logo.png" alt="Company"/>                        
                        </a>
                    </li>

                    <li>
                        <a href="http://www.oozaaoo.com/" target="_blank">
                            <img src="images/clients/oozaaoo_logo.png" alt="Company"/>
                        </a>
                    </li>
                    
                    <li>
                        
                        <a href="https://www.printstork.com/" target="_blank">
                            <img src="images/clients/printstork_logo.png" alt="Company"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.teachersrecruit.com/" target="_blank">
                        <img src="images/clients/teachers_recriut_logo.png" alt="Company"/>
                         </a>
                    </li>
                </ul>
                    
               </div>
        </section>
        <!--End of Clients-->

        <!--Clients-->
        <section id="quotes" class="scrollto clearfix text-center secondary-color">
                <div class="section-heading">
                    <h2 class="section-title">Get a Quote</h2>
                </div>
                
                <form class="quote_form text-left" method="post" id="quote_form" action="index.php">
                    <div class="col-2">
                        <div>
                            <label><span>Name *</span>:</label>
                            <input type="text" id="quote_name" name="contact_name" />
                        </div>
                        <div>
                            <label><span>Email *</span>:</label>
                            <input type="text" id="quote_email" name="contact_email" />
                        </div>
                        <div>
                            <label><span>Phone Number *</span>:</label>
                            <input type="tele" id="quotephone" name="contact_phone" />
                        </div>                        
                        <div>
                            <label><span>Service Required *</span>:</label>
                            <div class="check-service" id="check-service">
                                <input type="checkbox" class="service" name="service[]" value="Website Design & Development"/>Website Design & Development<br>
                                <input type="checkbox" class="service" name="service[]" value="Designing"/>Graphic Designs<br>
                                <input type="checkbox" class="service" name="service[]" value="Web Application"/>Web Application<br>
                                <input type="checkbox" class="service" name="service[]" value="Mobile Application"/>Mobile Application<br>
                                <input type="checkbox" class="service" name="service[]" value="Online Shopping/ eCommerce"/>Digital Marketing<br>
                                <input type="checkbox" class="service" name="service[]" value="SEO"/>SEO<br>
                            </div>  
                        </div>
                    </div>

                    <div class="col-2"> 
                        <div>
                            <label><span>Type of your Business *</span>:</label>
                            <input type="text" id="client_business" name="client_business" />
                        </div>
                        <div>
                            <label><span>Address</span>:</label>
                            <input type="text" id="address" name="client_address" />
                        </div>
                        <div>
                            <label><span>Area</span>:</label>
                            <input type="text" id="area" name="client_area" />
                        </div>
                        <div>
                            <label><span>City *</span>:</label>
                            <input type="text" id="client_city" name="client_city" />
                        </div> 
                        <div>
                            <label><span>Description any</span>:</label>
                            <textarea id="message" rows="5" cols="18" name="contact_message"> </textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="button" name="quote_submit">Submit</button>
                        <div class="error_test">
                            <p>*Please Enter all the mandatory fields</p>
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
                    </div>

                </form>
        </section>
        <!--End of quote-->
        <!--get a quote-->
    </main>
    <!--End Main Content Area-->
    
<?php 
    include('footer.php');
?> 