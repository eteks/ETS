jQuery(function($) {'use strict',

	// #main-slider
	// $(function(){
		// $('#main-slider.carousel').carousel({
			// interval: 8000
		// });
	// });


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

				
			
					$('#first_name, #last_name, #city').keydown(function (e) {
					      if (e.ctrlKey || e.altKey) {
					          e.preventDefault();
					      } else {
					          var key = e.keyCode;
					          if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
					              e.preventDefault();
					          }
					      }
					});     
					var required_register = ["first_name","last_name","email","phone","city","address","upload","gender","position"];
				
					var reg_email=jQuery("#email");
					var tele=jQuery("#phone");
					var test=jQuery("#test");
					var errornotice = jQuery("#error");
					       
					$("#career_form").on('submit',function(e){
						
					    // e.preventDefault();
					    for (var i=0;i<required_register.length;i++) {
					    var input = jQuery('#'+ required_register[i]);
					    if ((input.val() == "")) 
					        {
					            input.addClass("error_input_field");					           
					            $('.error_test1').css('display','block'); 
					            
					        } else {
					            input.removeClass("error_input_field");
					            $('.error_test1').css('display','none'); 
					        }
					    }
					    if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) 
					    {					    	
					    reg_email.addClass("error_email_field");
					        $('.error_mail1').css('display','block');
					       
					        }
					         else {
					            reg_email.removeClass("error_email_field");
					             $('.error_mail1').css('display','none');
					             				             
					    }
					     if(!/([0-9 -()+])+$/.test(tele.val()))	
					     {					    	
					    	tele.addClass("error_tele_field");
					        $('.error_tele1').css('display','block');
					        
					        }
					         else {
					            tele.removeClass("error_tele_field");
					             $('.error_tele1').css('display','none');
					             				             
					    }	
					    				
					    //if any inputs on the page have the class 'error_input_field' the form will not submit
					    if (jQuery(":input").hasClass("error_input_field")  ) {
					         $('.error_test1').css('display','block'); 
					         $('.error_mail1').css('display','none'); 
					         $('.error_tele1').css('display','none');
					         return false;
					    } 
					    else {
					        if(jQuery(":input").hasClass("error_email_field"))  {
					             $('.error_test1').css('display','none');
					             $('.error_mail1').css('display','block');
					             $('.error_tele1').css('display','none');
					             return false;
					        }
					        else if (jQuery(":input").hasClass("error_tele_field")){
					        	 $('.error_test1').css('display','none');
					             $('.error_mail1').css('display','none');
					             $('.error_tele1').css('display','block');				             
					             return false;
					        }
					        else {
					             errornotice.hide();
					             $('.error_test1').css('display','none'); 
					             $('.error_mail1').css('display','none');
					             $('.success1').css('display','block');
					             $('.error_tele1').css('display','none');	
					             $(this).unbind();
					             $(this).submit();
					        }
					    }
				
					});
		$(document).on('change','.upload',function()  {
        var file = $(this).val();
       
        var ext = file.substr((file.lastIndexOf('.') + 1));
        if (ext == "doc" || ext == "docx" || ext == "pdf") {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {           
                   // img_view.attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        }
        else {
            alert("Invalid file only files with extension. Doc,. Docx or. Pdf are accepted.");
            return false;
        }
    });		
    	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').fadeIn();
		} else {
			$('.back-to-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.back-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},700);
		return false;
	});												
});

// $(document).ready(function() {
    // $('div').click(function () {
       // id = $(this).attr('id').substring(1);
       // window.location = 'index.php?contact=' + id;
    // });
// 
    // var getVar = location.search.replace('?', '').split('=');
    // $('div[id$=' + getVar[1] + ']')[0].scrollIntoView();
// });