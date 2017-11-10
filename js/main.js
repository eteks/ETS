$(document).ready(function() {
    "use strict";
    $(".menu-trigger, .mobilenav").click(function() {
        $(".mobilenav").fadeToggle(500)
    }), $(".menu-trigger, .mobilenav").click(function() {
        $(".top-menu").toggleClass("top-animate"), $(".mid-menu").toggleClass("mid-animate"), $(".bottom-menu").toggleClass("bottom-animate")
    }), 
   
     $(".call-button a").on("click", function() {
        var e = $(this).data("rel"),
            t = $(e);
        $("html, body").stop().animate({
            scrollTop: t.offset().top
        }, 900, "swing")
    });
    var e = $(window).height();
    600 > e && (e = 600), $("header").css({
        minHeight: 0,
        maxHeight: "none",
        height: e
    }), $(".carousel").carousel({
        interval: 5e4
    });
    var t = new WOW({
        mobile: !1
    });
    t.init(), $(".panel-collapse").on("shown.bs.collapse", function() {
        $(this).parent().find(".state").html("<strong>-</strong>")
    }), $(".panel-collapse").on("hidden.bs.collapse", function() {
        $(this).parent().find(".state").html("<strong>+</strong>")
    }), $("#team").owlCarousel({
        navigation: !1,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoHeight: !0,
        itemsCustom: [
            [0, 1],
            [450, 2],
            [600, 2],
            [700, 2],
            [1e3, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
        ]
    }), $("#name").keypress(function(e) {
        return 8 != e.which && 0 != e.which && (e.which < 97 || e.which > 122) && (e.which < 65 || e.which > 90) ? !1 : void 0
    }), $("#phone").keypress(function(e) {
        return 8 != e.which && 0 != e.which && (e.which < 48 || e.which > 57) ? !1 : void 0
    }), $("#email").blur(function() {
        if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($("#email").val())) $(this).removeClass("form-name");
        else if ("" != $(this).val()) return $(this).addClass("form-name"), !1
    }), $("#name,#message,#phone,#email").bind("keyup blur", function() {
        $(this).val(function(e, t) {
            return t.replace(/([\uE000-\uF8FF]|\uD83C[\uDF00-\uDFFF]|\uD83D[\uDC00-\uDDFF])/g, "")
        })
    }), $(".contact_submit_btn").click(function() {
        for (var e = ["name", "email", "phone", "message"], t = 0; t < e.length; t++) {
            var a = jQuery("#" + e[t]);
            "" == a.val() ? a.addClass("form-name") : a.removeClass("form-name")
        }
        return jQuery(":input").hasClass("form-name") ? !1 : !0
    }), $("#email,#name,#message,#phone").bind("cut copy paste", function(e) {
        e.preventDefault()
    }), 
    
    
    $(".portfolio_content a").on("click", function() {
        var e = $(this).attr("id");
        localStorage.setItem("selectedolditem", e)
    });
    var a = localStorage.getItem("selectedolditem");
    null != a ? ($(".act_slider_active").removeClass("active"), $("#" + a).addClass("active")) : $(".act_slider_active a:first").addClass("active")	 
});


					$('#quote_name, #client_city, #client_business').keydown(function (e) {
					      if (e.ctrlKey || e.altKey) {
					          e.preventDefault();
					      } else {
					          var key = e.keyCode;
					          if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					              e.preventDefault();
					          }
					      }
					});     
					var required_register1 = ["quote_name","quote_email","quotephone","client_city","service","client_business"];
				
					var reg_email1=jQuery("#quote_email");
					var tele1=jQuery("#quotephone");
					var service=jQuery(".service");
					var test=jQuery("#test");
					var errornotice= jQuery("#error");
					       
					$("#quote_form").on('submit',function(e){
						
					    // e.preventDefault();
					    for (var i=0;i<required_register1.length;i++) {
					    var input = jQuery('#'+ required_register1[i]);
					    if ((input.val() == "")) 
					        {
					            input.addClass("error_input_field");					           
					           //alert(required_register1[i]);
					            
					        } else {
					            input.removeClass("error_input_field");
					           
					        }
					    }
					    if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email1.val())) 
					    {					    	
					    reg_email1.addClass("error_email_field");
					       
					       
					        }
					         else {
					            reg_email1.removeClass("error_email_field");
					           
					             				             
					    }
					     if(!/([0-9 -()+])+$/.test(tele1.val()))	
					     {					    	
					    	tele1.addClass("error_tele_field");
					     
					        
					        }
					         else {
					            tele1.removeClass("error_tele_field");
					          
					             				             
					    }	
					    if ($("#quote_form input:checkbox:checked").length > 0)
						{
							
    							service.removeClass("error_checkbox_field");
					         
								}
								else{
									service.addClass("error_checkbox_field");
					       		

								}	
									
					    //if any inputs on the page have the class 'error_input_field' the form will not submit
					    if (jQuery(":input").hasClass("error_input_field")  ) {
					         $('.error_test p').css('display','block'); 
					         $('.error_mail p').css('display','none'); 
					         $('.error_tele p').css('display','none');
					          $('.error_checkbox p').css('display','none');
					          
					         return false;
					    } 
					    else {
					        if(jQuery(":input").hasClass("error_email_field"))  {
					             $('.error_test p').css('display','none');
					             $('.error_mail p').css('display','block');
					             $('.error_tele p').css('display','none');
					              $('.error_checkbox p').css('display','none');
					             return false;
					        }
					        else if (jQuery(":input").hasClass("error_tele_field")){
					        	 $('.error_test p').css('display','none');
					             $('.error_mail p').css('display','none');
					             $('.error_tele p').css('display','block');	
					              $('.error_checkbox p').css('display','none');			             
					             return false;
					        }
					        else if (jQuery(":input").hasClass("error_checkbox_field")){
					        	 $('.error_test p').css('display','none');
					             $('.error_mail p').css('display','none');
					             $('.error_tele p').css('display','none');	
					              $('.error_checkbox p').css('display','block');			             
					             return false;
					        }
					        else {
					             errornotice.hide();
					             $('.error_test p').css('display','none'); 
					             $('.error_mail p').css('display','none');
					             $('.success p').css('display','block');
					             $('.error_tele p').css('display','none');
					             $('.error_checkbox p').css('display','none');		
					             $(this).unbind();
					             $(this).submit();
					        }
					    }
					
					
					});

				/*-------------------------------------
			     Contact Form initiating
			   -------------------------------------*/			
									
					$('#contact_name').keydown(function (e) {
					      if (e.ctrlKey || e.altKey) {
					          e.preventDefault();
					      } else {
					          var key = e.keyCode;
					          if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					              e.preventDefault();
					          }
					      }
					});     
					var required_register = ["contact_name","contact_email","contact_message","contact_phone"];				
					var reg_email=jQuery("#contact_email");
					var tele=jQuery("#contact_phone");
					var test=jQuery("#test");
					var errornotice = jQuery("#error");
					       
					$("#contact_Form").on('submit',function(e){
						
					    // e.preventDefault();
					    for (var i=0;i<required_register.length;i++) {
					    var input = jQuery('#'+ required_register[i]);
					    if ((input.val() == "")) 
					        {
					            input.addClass("error_input_field");					           
					            $('.contact_field').css('display','block'); 
					            
					        } else {
					            input.removeClass("error_input_field");
					            $('.contact_field').css('display','none'); 
					        }
					    }
					    if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) 
					    {					    	
					    reg_email.addClass("error_email_field");
					        $('.contact_mail').css('display','block');
					       
					        }
					         else {
					            reg_email.removeClass("error_email_field");
					             $('.contact_mail').css('display','none');
					             				             
					    }
					     if(!/([0-9 -()+])+$/.test(tele.val()))	
					     {					    	
					    	tele.addClass("error_tele_field");
					        $('.contact_no').css('display','block');
					        
					        }
					         else {
					            tele.removeClass("error_tele_field");
					             $('.contact_no').css('display','none');
					             				             
					    }	
					    				
					    //if any inputs on the page have the class 'error_input_field' the form will not submit
					    if (jQuery(":input").hasClass("error_input_field")  ) {
					         $('.contact_field').css('display','block'); 
					         $('.contact_mail').css('display','none'); 
					         $('.contact_no').css('display','none');
					         $('.contact_success').css('display','none');
					         return false;
					    } 
					    else {
					        if(jQuery(":input").hasClass("error_email_field"))  {
					             $('.contact_field').css('display','none');
					             $('.contact_mail').css('display','block');
					             $('.contact_no').css('display','none');
					             $('.contact_success').css('display','none');
					             return false;
					        }
					        else if (jQuery(":input").hasClass("error_tele_field")){
					        	 $('.contact_field').css('display','none');
					             $('.contact_mail').css('display','none');
					             $('.contact_no').css('display','block');
					             $('.contact_success').css('display','none');				             
					             return false;
					        }
					        else {
					             errornotice.hide();
					             $('.contact_field').css('display','none'); 
					             $('.contact_mail').css('display','none');
					             $('.contact_success').css('display','block');
					             $('.contact_no').css('display','none');	
					             $(this).unbind();
					             $(this).submit();
					        }
					    }
				
					});
					