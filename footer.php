

    <!--Footer-->
    <footer id="landing-footer" class="clearfix">
        <div class="row clearfix">

            <p id="copyright" class="col-2">&copy; 2017 Etekchno Services Private Limited. All Rights Reserved.</p>

            <!--Social Icons in Footer-->
            <ul class="col-2 social-icons">
                <li>
                    <a target="_blank" title="Facebook" href="http://facebook.com/etekchnoservices/">
                        <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Twitter" href="https://twitter.com/EtekchnoService">
                        <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Linkedin" href="https://in.linkedin.com//company/etekchno-services">
                        <i class="fa fa-linkedin fa-1x"></i><span>Linkedin</span>
                    </a>
                </li>
            </ul>
            <!--End of Social Icons in Footer-->
        </div>
    </footer>
    	<!--End of Footer-->

</div>
	<!-- Include JavaScript resources -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
<link rel="stylesheet"  href="css/lightslider.css"/>
<script src="js/lightslider.js"></script>
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
				icon : 'images/map-marker.png',
				map : map,
				title : 'eTechnoServices'
			});
		}


		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<!-- Gallery Scripts -->
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/jgallery.min.js?v=1.6.4"></script>