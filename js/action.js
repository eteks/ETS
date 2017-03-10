$(document).ready(function () {
	
	//full page plugin
	$('#fullpage').fullpage({
		sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#163ac0', '#4d0ad6'],
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
		
		menu: '#menu',
		navigation: true,
		scrollingSpeed: 700
	});
	//on clicking the down-arrow the content slide up	
	$('.down_icon').click(function(){
  		$('html, body').animate({ scrollTop: $(".all_products").offset().top }, 'slow');
  	});

	//popup for portfolio
	$('.product_img1').click(function(event){
		event.stopPropagation();
		$('.popup_box_thozha').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});
	$('.product_img2').click(function(event){
		event.stopPropagation();
		$('.popup_box_events').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});
	$('.product_img3').click(function(event){
		event.stopPropagation();
		$('.popup_box_happi').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});
	$('.product_img4').click(function(event){
		event.stopPropagation();
		$('.popup_box_zero').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});
	$('.product_img5').click(function(event){
		event.stopPropagation();
		$('.popup_box_synclio').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});
	$('.product_img6').click(function(event){
		event.stopPropagation();
		$('.popup_box_wct').css({'display':'block'});
		document.body.style.overflow = "hidden";
	});

	// popup close 
	$(document).click(function(){
		$('.popup_box_thozha,.popup_box_events,.popup_box_happi,.popup_box_zero,.popup_box_synclio,.popup_box_wct').css({'display':'none'});
		document.body.style.overflow = "visible";
	});
	
	//nav menu click function in portfolio page
	$('.brand_menu').click(function(){
		$('html, body').animate({ scrollTop: $(".all_products").offset().top }, 'slow');
		$('.product_img1,.product_img5,.product_img6').hide();
		$('.product_img2,.product_img3,.product_img4').show();
	});
	
	$('.website_menu').click(function(){
		$('html, body').animate({ scrollTop: $(".all_products").offset().top }, 'slow');
		$('.product_img2,.product_img3,.product_img4,.product_img5').hide();
		$('.product_img1,.product_img6').show();
	});
	
	$('.apps_menu').click(function(){
		$('html, body').animate({ scrollTop: $(".all_products").offset().top }, 'slow');
		$('.product_img1,.product_img2,.product_img3,.product_img4,.product_img6').hide();
		$('.product_img5').show();
	});
	
	//Map draggable in contact us part
	$('#map').draggable({
    	cursor: 'move',        // sets the cursor apperance
    	revert: true,
    	revertDuration: 900   
 	});
 	// Validation for contactus form
 	$('.send_btn').click(function() {
 		var email=$('#email').val();
 		var message1=$('#message').val().trim();
 		var message=message1.length;
 		// alert(message);
		var mail_format = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 		if(email < 1 && message1 < 1) {
 			$('#invalid_mail').css('display','none');
 			// $('#message_box').css('display','none');
 			$('#empty_mail').css('display','block');
 			$('#empty_message_box').css('display','block');
 			return false;
 		}
 		else if( email < 1 ) {
 			$('#empty_mail').css('display','block');
 			$('#invalid_mail').css('display','none'); 
 			$('#empty_message_box').css('display','none');
 			return false;
 		}
 		else if ( message1 < 1 ) {
 			$('#empty_mail').css('display','none');
 			$('#empty_message_box').css('display','block');
 			if(!email.match(mail_format) ) {
 			$('#invalid_mail').css('display','block'); 
 			return false;
 		} else {
 			$('#invalid_mail').css('display','none'); 
 		}
 			return false;
 		}
 		else {
 			$('#empty_message_box').css('display','none');
 			$('#empty_mail').css('display','none');
 		}
 		if(!email.match(mail_format) ) {
 			$('#empty_mail').css('display','none');
 			$('#invalid_mail').css('display','block'); 
 			return false;
 		}
 		
 	});
	// To scroll fullwindow and particular div jquery
	$.fn.fullpage.setAllowScrolling(false);
	$.fn.fullpage.setKeyboardScrolling(false);
	$('#fullpage').mouseenter(function() {
		$('body').bind('mousewheel DOMMouseScroll', function() {
		    return false;
	    });
	  	$(this).bind('mousewheel DOMMouseScroll', function() {
	        return true;
	    });
	  	$.fn.fullpage.setAllowScrolling(true);
		$.fn.fullpage.setKeyboardScrolling(true);
	});
	$('#fullpage').mouseleave(function() {
		$('body').unbind();
	  	$.fn.fullpage.setAllowScrolling(false);
		$.fn.fullpage.setKeyboardScrolling(false);
	});
	var ww=$(window).width();  //window width
	if(ww >= 600) {

		$('.bottom_image1').hover(function() {
			$('.services_content_hover').css('display','none');
			$('.web_content_hover').css('display','block');
			
		},function() {
			$('.web_content_hover').css('display','none');
			$('.services_content_hover').css('display','block');
		});
		$('.bottom_image2').hover(function() {
			$('.services_content_hover').css('display','none');
			$('.ecom_content_hover').css('display','block');
			
		},function() {
			$('.ecom_content_hover').css('display','none');
			$('.services_content_hover').css('display','block');
		});
		$('.bottom_image3').hover(function() {
			$('.services_content_hover').css('display','none');
			$('.responsive_content_hover').css('display','block');
			
		},function() {
			$('.responsive_content_hover').css('display','none');
			$('.services_content_hover').css('display','block');
		});
		$('.bottom_image4').hover(function() {
			$('.services_content_hover').css('display','none');
			$('.seo_content_hover').css('display','block');
			
		},function() {
			$('.seo_content_hover').css('display','none');
			$('.services_content_hover').css('display','block');
		});
		$('.bottom_image5').hover(function() {
			$('.services_content_hover').css('display','none');
			$('.app_content_hover').css('display','block');
			
		},function() {
			$('.app_content_hover').css('display','none');
			$('.services_content_hover').css('display','block');
		});
	}
});

