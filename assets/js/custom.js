/*--------------------- Copyright (c) 2022 -----------------------
[Master Javascript]
Project: Affiliate Marketing html
-------------------------------------------------------------------*/
(function ($) {
	"use strict";
	var AffiliateMarketing = {
		initialised: false,
		version: 1.0,
		mobile: false,
		init: function () {
			if(!this.initialised) {
				this.initialised = true;
			} 
			else {
				return;
			}
		/*-------------- Affiliate Marketing Functions Calling ---------------------------------------------------
		------------------------------------------------------------------------------------------------*/
			this.am_testimonial_slider();			
			this.am_partner_slider();
			this.bottom_top();
			this.loader();
			this.toggle_menu();
			this.sticky_header();
			this.counter();
			this.wow_animation();
		},
		
		/*-------------- Affiliate Marketing Functions Calling ---------------------------------------------------
		--------------------------------------------------------------------------------------------------*/
		// testimonial slider			
		am_testimonial_slider: function () {
			var swiper = new Swiper('.am-client-wrapper .swiper-container', {
				slidesPerView: 2,
				spaceBetween: 30,
				loop: true,
				speed: 1000,
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.am-client-wrapper .swiper-pagination',
					clickable: true,
				},
			
				breakpoints: {
					1199: {
					  slidesPerView: 2,
					  spaceBetween: 30,
					},
					992: {
					  slidesPerView: 2,
					  spaceBetween: 30,
					},
					768: {
					  slidesPerView: 1,
					  spaceBetween: 30,
					},
					575: {
					  slidesPerView: 1,
					  spaceBetween: 15,
					},
					320: {
					  slidesPerView: 1,
					  spaceBetween: 15,
					}
					,
					0: {
					  slidesPerView: 1,
					  spaceBetween: 15,
					}
				}
			});
		},
		// testimonial slider
		// partner slider			
		am_partner_slider: function () {
			var swiper = new Swiper('.am-partner-wrapper .swiper-container', {
				slidesPerView: 5,
				spaceBetween: 20,
				loop: true,
				speed: 1000,
				autoplay: {
					delay: 2500,
					disableOnInteraction: false,
				},				
				breakpoints: {
					1199: {
					  slidesPerView: 5,
					  spaceBetween: 10,
					},
					992: {
					  slidesPerView: 5,
					  spaceBetween: 30,
					},
					768: {
					  slidesPerView: 4,
					  spaceBetween: 30,
					},
					575: {
					  slidesPerView: 3,
					  spaceBetween: 15,
					},
					425: {
					  slidesPerView: 2,
					  spaceBetween: 15,
					},
					320: {
					  slidesPerView: 2,
					  spaceBetween: 15,
					},
					280: {
					  slidesPerView: 1,
					  spaceBetween: 15,
					}
				}
			});
		},
		// partner slider		
						
		// Bottom To Top
		bottom_top: function(){  
			if($('#button').length > 0){
				
				var btn = $('#button');

				$(window).scroll(function() {
				if ($(window).scrollTop() > 300) {
					btn.addClass('show');
				} else {
					btn.removeClass('show');
				}
				});

				btn.on('click', function(e) {
				e.preventDefault();
				$('html, body').animate({scrollTop:0}, '300');
				});
			}
		},
	// Bottom To Top
	// loader			
			loader: function () {
			jQuery(window).on('load', function() {
				$(".loader").fadeOut();
				$(".spinner").delay(500).fadeOut("slow");
			});
		}, 
	// loader
	// toggle menu
		toggle_menu: function(){
			$('.am-toggle-btn').on('click',function(){
				$('body').toggleClass('menu-open');
			})			
		},
	// toggle menu
	// sticky header
	sticky_header: function(){
		$(window).scroll(function() {
			var wh = window.innerWidth;
			if (wh > 767) {
				var h = window.innerHeight;
				var window_top = $(window).scrollTop() + 1;
				if (window_top > 100) {
					$('.am-header-wrapper').addClass('am-header-fixed');
				} else {
					$('.am-header-wrapper').removeClass('am-header-fixed');
				}
			}
		});
	},
	// sticky header
	// counter
	counter: function(){
		$(".counting").each(function () {
			var $this = $(this),
				countTo = $this.attr("data-count");
		
			$({ countNum: $this.text() }).animate(
				{
					countNum: countTo,
				},
		
				{
					duration: 3000,
					easing: "linear",
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
						//alert('finished');
					},
				}
			);
		});
	},
	// counter
	// wow animation
	wow_animation: function(){
		new WOW().init();
	},
	// wow animation
	
	};
	AffiliateMarketing.init();	

}(jQuery));	

// contact-form
function checkRequire(formId , targetResp){
    targetResp.html('');
    var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
    var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
    var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
    var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
    var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
    var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
    var check = 0;
    $('#er_msg').remove();
    var target = (typeof formId == 'object')? $(formId):$('#'+formId);
    target.find('input , textarea , select').each(function(){
        if($(this).hasClass('require')){
            if($(this).val().trim() == ''){
                check = 1;
                $(this).focus();
                $(this).parent('div').addClass('form_error');
                targetResp.html('You missed out some fields.');
                $(this).addClass('error');
                return false;
            }else{
                $(this).removeClass('error');
                $(this).parent('div').removeClass('form_error');
            }
        }
        if($(this).val().trim() != ''){
            var valid = $(this).attr('data-valid');
            if(typeof valid != 'undefined'){
                if(!eval(valid).test($(this).val().trim())){
                    $(this).addClass('error');
                    $(this).focus();
                    check = 1;
                    targetResp.html($(this).attr('data-error'));
                    return false;
                }else{
                    $(this).removeClass('error');
                }
            }
        }
    });
    return check;
}
$(".submitForm").on('click', function() {
    var _this = $(this);
    var targetForm = _this.closest('form');
    var errroTarget = targetForm.find('.response');
    var check = checkRequire(targetForm , errroTarget);
    
    if(check == 0){
       var formDetail = new FormData(targetForm[0]);
        formDetail.append('form_type' , _this.attr('form-type'));
        $.ajax({
            method : 'post',
            url : 'ajaxmail.php',
            data:formDetail,
            cache:false,
            contentType: false,
            processData: false
        }).done(function(resp){
            console.log(resp);
            if(resp == 1){
                targetForm.find('input').val('');
                targetForm.find('textarea').val('');
                errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
            }else{
                errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
            }
        });
    }
});