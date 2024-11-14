function vcard_cv_resume_menu_open_nav() {
	window.vcard_cv_resume_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vcard_cv_resume_menu_close_nav() {
	window.vcard_cv_resume_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

jQuery(document).ready(function () {
	window.vcard_cv_resume_currentfocus=null;
  	vcard_cv_resume_checkfocusdElement();
	var vcard_cv_resume_body = document.querySelector('body');
	vcard_cv_resume_body.addEventListener('keyup', vcard_cv_resume_check_tab_press);
	var vcard_cv_resume_gotoHome = false;
	var vcard_cv_resume_gotoClose = false;
	window.vcard_cv_resume_responsiveMenu=false;
 	function vcard_cv_resume_checkfocusdElement(){
	 	if(window.vcard_cv_resume_currentfocus=document.activeElement.className){
		 	window.vcard_cv_resume_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vcard_cv_resume_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vcard_cv_resume_responsiveMenu){
			if (!e.shiftKey) {
				if(vcard_cv_resume_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vcard_cv_resume_gotoHome = true;
			} else {
				vcard_cv_resume_gotoHome = false;
			}

		}else{

			if(window.vcard_cv_resume_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vcard_cv_resume_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vcard_cv_resume_responsiveMenu){
				if(vcard_cv_resume_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vcard_cv_resume_gotoClose = true;
				} else {
					vcard_cv_resume_gotoClose = false;
				}
			
			}else{

			if(window.vcard_cv_resume_responsiveMenu){
			}}}}
		}
	 	vcard_cv_resume_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});