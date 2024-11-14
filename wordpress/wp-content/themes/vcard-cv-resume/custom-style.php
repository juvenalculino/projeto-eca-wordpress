<?php

	$vcard_cv_resume_custom_css= "";

	/*-----------------First Highlight Color -------------------*/

	$vcard_cv_resume_first_color = get_theme_mod('vcard_cv_resume_first_color');

	if($vcard_cv_resume_first_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation ul.sub-menu>li>a:before, .view-all-btn a,.more-btn a,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li,.pro-button a, #preloader, #footer-2, .scrollup i, #sidebar h3, .pagination span, .pagination a, .widget_product_search button, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .wp-block-button__link, .post-categories li a,.bradcrumbs a{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_first_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	if($vcard_cv_resume_first_color != false){
		$vcard_cv_resume_custom_css .='.wc-block-components-order-summary-item__quantity,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,header.woocommerce-Address-title.title a{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_first_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	if($vcard_cv_resume_first_color != false){
		$vcard_cv_resume_custom_css .='a.wc-block-components-product-name, .wc-block-components-product-name, .wc-block-components-totals-coupon  a{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_first_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	if($vcard_cv_resume_first_color != false){
		$vcard_cv_resume_custom_css .='h1, h2, h3, h4, h5, h6, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce ul.products li.product .price{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_first_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	if($vcard_cv_resume_first_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation a:hover{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_first_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*-----------------Second Highlight Color -------------------*/

	$vcard_cv_resume_second_color = get_theme_mod('vcard_cv_resume_second_color');

	if($vcard_cv_resume_second_color != false){
		$vcard_cv_resume_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover, .topbar_btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, #slider .more-btn a, .woocommerce span.onsale, .toggle-nav button, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .bradcrumbs a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover, .post-categories li a:hover,.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,header.woocommerce-Address-title.title a:hover, #tag-cloud-sec .tag-cloud-link:hover, .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover:hover,.wp-block-woocommerce-cart .wc-block-components-product-badge,.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_second_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	if($vcard_cv_resume_second_color != false){
		$vcard_cv_resume_custom_css .='.box-content a, #footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .copyright a:hover{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_second_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	/*-----------------Third Highlight Color -------------------*/

	$vcard_cv_resume_third_color = get_theme_mod('vcard_cv_resume_third_color');

	if($vcard_cv_resume_third_color != false){
		$vcard_cv_resume_custom_css .='#sidebar .wp-block-search .wp-block-search__label, #sidebar .wp-block-heading, .wp-block-tag-cloud a:hover{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_third_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	/*-----------------Third and Fourth Highlight Color ---------------*/

	$vcard_cv_resume_third_color = get_theme_mod('vcard_cv_resume_third_color');

	$vcard_cv_resume_fourth_color = get_theme_mod('vcard_cv_resume_fourth_color');

	if($vcard_cv_resume_third_color != false || $vcard_cv_resume_fourth_color != false){
		$vcard_cv_resume_custom_css .='.home-page-header{
		background: linear-gradient(to right, '.esc_attr($vcard_cv_resume_third_color).', '.esc_attr($vcard_cv_resume_fourth_color).');
		}';
	}

	/*------------Media Third and Fourth Highlight Color ------------*/

	$vcard_cv_resume_custom_css .='@media screen and (max-width:720px) {';
		if($vcard_cv_resume_third_color != false || $vcard_cv_resume_fourth_color != false){
			$vcard_cv_resume_custom_css .='#slider .carousel-inner{
				background: linear-gradient(to right, '.esc_attr($vcard_cv_resume_third_color).', '.esc_attr($vcard_cv_resume_fourth_color).');
			}';
		}
	$vcard_cv_resume_custom_css .='}';

	$vcard_cv_resume_custom_css .='@media screen and (max-width:1000px) {';
		if($vcard_cv_resume_third_color != false || $vcard_cv_resume_fourth_color != false){
			$vcard_cv_resume_custom_css .='.page-template-custom-home-page .home-page-header{
				background: linear-gradient(to right, '.esc_attr($vcard_cv_resume_third_color).', '.esc_attr($vcard_cv_resume_fourth_color).');
			}';
		}
	$vcard_cv_resume_custom_css .='}';

	$vcard_cv_resume_custom_css .='@media screen and (min-width: 1024px) and (max-width: 1199px) {';
		if($vcard_cv_resume_third_color != false || $vcard_cv_resume_fourth_color != false){
			$vcard_cv_resume_custom_css .='.page-template-custom-home-page .home-page-header{
				background: linear-gradient(to right, '.esc_attr($vcard_cv_resume_third_color).', '.esc_attr($vcard_cv_resume_fourth_color).');
			}';
		}
	$vcard_cv_resume_custom_css .='}';


	/*--------------------------- Slider -------------------*/

	$vcard_cv_resume_slider = get_theme_mod('vcard_cv_resume_slider_arrows');
	if($vcard_cv_resume_slider == false){
		$vcard_cv_resume_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vcard_cv_resume_custom_css .='position: static; background-image: linear-gradient(to right, #6629c8 , #2b90e6);';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vcard_cv_resume_slider_height = get_theme_mod('vcard_cv_resume_slider_height');
	if($vcard_cv_resume_slider_height != false){
		$vcard_cv_resume_custom_css .='#slider img{';
			$vcard_cv_resume_custom_css .='height: '.esc_attr($vcard_cv_resume_slider_height).';';
		$vcard_cv_resume_custom_css .='}';
	}	

	/*---------------------------Width Layout -------------------*/

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_width_option','Full Width');
    if($vcard_cv_resume_theme_lay == 'Boxed'){
		$vcard_cv_resume_custom_css .='body{';
			$vcard_cv_resume_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#slider .carousel-caption,.slider-box,.page-template-custom-home-page .home-page-header{';
			$vcard_cv_resume_custom_css .='position: static !important; transform:none !important';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#slider .carousel-caption{';
			$vcard_cv_resume_custom_css .='padding-left: 50px !important;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.home-page-header{';
			$vcard_cv_resume_custom_css .='background-image: linear-gradient(to right, #6629c8 , #2b90e6) !important;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.slide-box{';
			$vcard_cv_resume_custom_css .='height: 486px !important;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='right: 100px;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.scrollup.left i{';
			$vcard_cv_resume_custom_css .='left: 100px;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_theme_lay == 'Wide Width'){
		$vcard_cv_resume_custom_css .='body{';
			$vcard_cv_resume_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='right: 30px;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.scrollup.left i{';
			$vcard_cv_resume_custom_css .='left: 30px;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_theme_lay == 'Full Width'){
		$vcard_cv_resume_custom_css .='body{';
			$vcard_cv_resume_custom_css .='max-width: 100%;';
		$vcard_cv_resume_custom_css .='}';
	}
	
	/*----------------Responsive Media -----------------------*/

	$vcard_cv_resume_resp_slider = get_theme_mod( 'vcard_cv_resume_resp_slider_hide_show',true);
	if($vcard_cv_resume_resp_slider == true && get_theme_mod( 'vcard_cv_resume_slider_arrows', false) == false){
    	$vcard_cv_resume_custom_css .='#slider{';
			$vcard_cv_resume_custom_css .='display:none;';
		$vcard_cv_resume_custom_css .='} ';
	}
    if($vcard_cv_resume_resp_slider == true){
    	$vcard_cv_resume_custom_css .='@media screen and (max-width:575px) {';
		$vcard_cv_resume_custom_css .='#slider{';
			$vcard_cv_resume_custom_css .='display:block;';
		$vcard_cv_resume_custom_css .='} }';
	}else if($vcard_cv_resume_resp_slider == false){
		$vcard_cv_resume_custom_css .='@media screen and (max-width:575px) {';
		$vcard_cv_resume_custom_css .='#slider{';
			$vcard_cv_resume_custom_css .='display:none;';
		$vcard_cv_resume_custom_css .='} }';
		$vcard_cv_resume_custom_css .='@media screen and (max-width:575px){';
		$vcard_cv_resume_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$vcard_cv_resume_custom_css .='margin-top: 45px;';
		$vcard_cv_resume_custom_css .='} }';
	}

	$vcard_cv_resume_resp_sidebar = get_theme_mod( 'vcard_cv_resume_sidebar_hide_show',true);
    if($vcard_cv_resume_resp_sidebar == true){
    	$vcard_cv_resume_custom_css .='@media screen and (max-width:575px) {';
		$vcard_cv_resume_custom_css .='#sidebar{';
			$vcard_cv_resume_custom_css .='display:block;';
		$vcard_cv_resume_custom_css .='} }';
	}else if($vcard_cv_resume_resp_sidebar == false){
		$vcard_cv_resume_custom_css .='@media screen and (max-width:575px) {';
		$vcard_cv_resume_custom_css .='#sidebar{';
			$vcard_cv_resume_custom_css .='display:none;';
		$vcard_cv_resume_custom_css .='} }';
	}

	$vcard_cv_resume_resp_scroll_top = get_theme_mod( 'vcard_cv_resume_resp_scroll_top_hide_show',true);
	if($vcard_cv_resume_resp_scroll_top == true && get_theme_mod( 'vcard_cv_resume_hide_show_scroll',true) == false){
    	$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='visibility:hidden !important;';
		$vcard_cv_resume_custom_css .='} ';
	}
    if($vcard_cv_resume_resp_scroll_top == true){
    	$vcard_cv_resume_custom_css .='@media screen and (max-width:575px) {';
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='visibility:visible !important;';
		$vcard_cv_resume_custom_css .='} }';
	}else if($vcard_cv_resume_resp_scroll_top == false){
		$vcard_cv_resume_custom_css .='@media screen and (max-width:575px){';
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='visibility:hidden !important;';
		$vcard_cv_resume_custom_css .='} }';
	}

	$vcard_cv_resume_resp_menu_toggle_btn_bg_color = get_theme_mod('vcard_cv_resume_resp_menu_toggle_btn_bg_color');
	if($vcard_cv_resume_resp_menu_toggle_btn_bg_color != false){
		$vcard_cv_resume_custom_css .='.toggle-nav button{';
			$vcard_cv_resume_custom_css .='background: '.esc_attr($vcard_cv_resume_resp_menu_toggle_btn_bg_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------- Menus Settings ------------------*/

	$vcard_cv_resume_navigation_menu_font_size = get_theme_mod('vcard_cv_resume_navigation_menu_font_size');
	if($vcard_cv_resume_navigation_menu_font_size != false){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_navigation_menu_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_navigation_menu_font_weight = get_theme_mod('vcard_cv_resume_navigation_menu_font_weight','');
	if($vcard_cv_resume_navigation_menu_font_weight != false){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='font-weight: '.esc_attr($vcard_cv_resume_navigation_menu_font_weight).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_menu_text_transform','Capitalize');
	if($vcard_cv_resume_theme_lay == 'Capitalize'){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='text-transform:Capitalize;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Lowercase'){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='text-transform:Lowercase;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Uppercase'){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='text-transform:Uppercase;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_menus_item = get_theme_mod( 'vcard_cv_resume_menus_item_style','None');
    if($vcard_cv_resume_menus_item == 'None'){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_menus_item == 'Zoom In'){
		$vcard_cv_resume_custom_css .='.main-navigation a:hover{';
			$vcard_cv_resume_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #e88c09;';
		$vcard_cv_resume_custom_css .='}';
	}
	
	/*---------------- Post Settings ------------------*/

	$vcard_cv_resume_featured_image_border_radius = get_theme_mod('vcard_cv_resume_featured_image_border_radius', 0);
	if($vcard_cv_resume_featured_image_border_radius != false){
		$vcard_cv_resume_custom_css .='.box-image img, .feature-box img{';
			$vcard_cv_resume_custom_css .='border-radius: '.esc_attr($vcard_cv_resume_featured_image_border_radius).'px;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------- Single Post Settings ------------------*/

	$vcard_cv_resume_single_blog_comment_title = get_theme_mod('vcard_cv_resume_single_blog_comment_title', 'Leave a Reply');
	if($vcard_cv_resume_single_blog_comment_title == ''){
		$vcard_cv_resume_custom_css .='#comments h2#reply-title {';
			$vcard_cv_resume_custom_css .='display: none;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_single_blog_comment_button_text = get_theme_mod('vcard_cv_resume_single_blog_comment_button_text', 'Post Comment');
	if($vcard_cv_resume_single_blog_comment_button_text == ''){
		$vcard_cv_resume_custom_css .='#comments p.form-submit {';
			$vcard_cv_resume_custom_css .='display: none;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_comment_width = get_theme_mod('vcard_cv_resume_single_blog_comment_width');
	if($vcard_cv_resume_comment_width != false){
		$vcard_cv_resume_custom_css .='#comments textarea{';
			$vcard_cv_resume_custom_css .='width: '.esc_attr($vcard_cv_resume_comment_width).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_single_blog_post_navigation_show_hide = get_theme_mod('vcard_cv_resume_single_blog_post_navigation_show_hide',true);
	if($vcard_cv_resume_single_blog_post_navigation_show_hide != true){
		$vcard_cv_resume_custom_css .='.post-navigation{';
			$vcard_cv_resume_custom_css .='display: none;';
		$vcard_cv_resume_custom_css .='}';
	}
	
	/*---------------- Button Settings ------------------*/

	$vcard_cv_resume_button_border_radius = get_theme_mod('vcard_cv_resume_button_border_radius');
	if($vcard_cv_resume_button_border_radius != false){
		$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
			$vcard_cv_resume_custom_css .='border-radius: '.esc_attr($vcard_cv_resume_button_border_radius).'px;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_button_padding_top_bottom = get_theme_mod('vcard_cv_resume_button_padding_top_bottom');
	$vcard_cv_resume_button_padding_left_right = get_theme_mod('vcard_cv_resume_button_padding_left_right');
	if($vcard_cv_resume_button_padding_top_bottom != false || $vcard_cv_resume_button_padding_left_right != false){
		$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
			$vcard_cv_resume_custom_css .='padding-top: '.esc_attr($vcard_cv_resume_button_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vcard_cv_resume_button_padding_top_bottom).'!important;padding-left: '.esc_attr($vcard_cv_resume_button_padding_left_right).'!important;padding-right: '.esc_attr($vcard_cv_resume_button_padding_left_right).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_button_font_size = get_theme_mod('vcard_cv_resume_button_font_size',14);
	$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
		$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_button_font_size).';';
	$vcard_cv_resume_custom_css .='}';

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_button_text_transform','Uppercase');
	if($vcard_cv_resume_theme_lay == 'Capitalize'){
		$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
			$vcard_cv_resume_custom_css .='text-transform:Capitalize;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Lowercase'){
		$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
			$vcard_cv_resume_custom_css .='text-transform:Lowercase;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Uppercase'){ 
		$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
			$vcard_cv_resume_custom_css .='text-transform:Uppercase;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_button_letter_spacing = get_theme_mod('vcard_cv_resume_button_letter_spacing',14);
	$vcard_cv_resume_custom_css .='.post-main-box .more-btn a{';
		$vcard_cv_resume_custom_css .='letter-spacing: '.esc_attr($vcard_cv_resume_button_letter_spacing).';';
	$vcard_cv_resume_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_blog_layout_option','Default');
    if($vcard_cv_resume_theme_lay == 'Default'){
		$vcard_cv_resume_custom_css .='.post-main-box{';
			$vcard_cv_resume_custom_css .='';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_theme_lay == 'Center'){
		$vcard_cv_resume_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vcard_cv_resume_custom_css .='text-align:center;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.post-info{';
			$vcard_cv_resume_custom_css .='margin-top:10px;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.post-info hr{';
			$vcard_cv_resume_custom_css .='margin:15px auto;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_theme_lay == 'Left'){
		$vcard_cv_resume_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vcard_cv_resume_custom_css .='text-align:Left;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.post-info hr{';
			$vcard_cv_resume_custom_css .='margin-bottom:10px;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='.post-main-box h2{';
			$vcard_cv_resume_custom_css .='margin-top:10px;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vcard_cv_resume_blog_page_posts_settings = get_theme_mod( 'vcard_cv_resume_blog_page_posts_settings','Into Blocks');
		if($vcard_cv_resume_blog_page_posts_settings == 'Without Blocks'){
		$vcard_cv_resume_custom_css .='.post-main-box{';
			$vcard_cv_resume_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$vcard_cv_resume_display_grid_posts_settings = get_theme_mod( 'vcard_cv_resume_display_grid_posts_settings','Into Blocks');
    if($vcard_cv_resume_display_grid_posts_settings == 'Without Blocks'){
		$vcard_cv_resume_custom_css .='.post-main-box{';
			$vcard_cv_resume_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vcard_cv_resume_custom_css .='}';
	}

	// featured image dimention
	$vcard_cv_resume_blog_post_featured_image_dimension = get_theme_mod('vcard_cv_resume_blog_post_featured_image_dimension', 'default');
	$vcard_cv_resume_blog_post_featured_image_custom_width = get_theme_mod('vcard_cv_resume_blog_post_featured_image_custom_width',250);
	$vcard_cv_resume_blog_post_featured_image_custom_height = get_theme_mod('vcard_cv_resume_blog_post_featured_image_custom_height',250);
	if($vcard_cv_resume_blog_post_featured_image_dimension == 'custom'){
		$vcard_cv_resume_custom_css .='.post-main-box img{';
			$vcard_cv_resume_custom_css .='width: '.esc_attr($vcard_cv_resume_blog_post_featured_image_custom_width).'; height: '.esc_attr($vcard_cv_resume_blog_post_featured_image_custom_height).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_featured_image_box_shadow = get_theme_mod('vcard_cv_resume_featured_image_box_shadow',0);
	if($vcard_cv_resume_featured_image_box_shadow != false){
		$vcard_cv_resume_custom_css .='.box-image img, #content-vw img{';
			$vcard_cv_resume_custom_css .='box-shadow: '.esc_attr($vcard_cv_resume_featured_image_box_shadow).'px '.esc_attr($vcard_cv_resume_featured_image_box_shadow).'px '.esc_attr($vcard_cv_resume_featured_image_box_shadow).'px #cccccc;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_singlepost_image_box_shadow = get_theme_mod('vcard_cv_resume_singlepost_image_box_shadow',0);
	if($vcard_cv_resume_singlepost_image_box_shadow != false){
		$vcard_cv_resume_custom_css .='.feature-box img{';
			$vcard_cv_resume_custom_css .='box-shadow: '.esc_attr($vcard_cv_resume_singlepost_image_box_shadow).'px '.esc_attr($vcard_cv_resume_singlepost_image_box_shadow).'px '.esc_attr($vcard_cv_resume_singlepost_image_box_shadow).'px #cccccc;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vcard_cv_resume_footer_widgets_heading = get_theme_mod( 'vcard_cv_resume_footer_widgets_heading','Left');
    if($vcard_cv_resume_footer_widgets_heading == 'Left'){
		$vcard_cv_resume_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vcard_cv_resume_custom_css .='text-align: left;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_footer_widgets_heading == 'Center'){
		$vcard_cv_resume_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vcard_cv_resume_custom_css .='text-align: center;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_footer_widgets_heading == 'Right'){
		$vcard_cv_resume_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vcard_cv_resume_custom_css .='text-align: right;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_widgets_content = get_theme_mod( 'vcard_cv_resume_footer_widgets_content','Left');
    if($vcard_cv_resume_footer_widgets_content == 'Left'){
		$vcard_cv_resume_custom_css .='#footer .widget{';
		$vcard_cv_resume_custom_css .='text-align: left;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_footer_widgets_content == 'Center'){
		$vcard_cv_resume_custom_css .='#footer .widget{';
			$vcard_cv_resume_custom_css .='text-align: center;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_footer_widgets_content == 'Right'){
		$vcard_cv_resume_custom_css .='#footer .widget{';
			$vcard_cv_resume_custom_css .='text-align: right;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_background_color = get_theme_mod('vcard_cv_resume_footer_background_color');
	if($vcard_cv_resume_footer_background_color != false){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_footer_background_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_copyright_font_size = get_theme_mod('vcard_cv_resume_copyright_font_size');
	if($vcard_cv_resume_copyright_font_size != false){
		$vcard_cv_resume_custom_css .='.copyright p{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_copyright_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_copyright_font_weight = get_theme_mod('vcard_cv_resume_copyright_font_weight');
	if($vcard_cv_resume_copyright_font_weight != false){
		$vcard_cv_resume_custom_css .='.copyright p, .copyright a{';
			$vcard_cv_resume_custom_css .='font-weight: '.esc_attr($vcard_cv_resume_copyright_font_weight).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_copyright_text_color = get_theme_mod('vcard_cv_resume_copyright_text_color');
	if($vcard_cv_resume_copyright_text_color != false){
		$vcard_cv_resume_custom_css .='.copyright p, .copyright a{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_copyright_text_color).';';
		$vcard_cv_resume_custom_css .='}';
	} 

	$vcard_cv_resume_copyright_alingment = get_theme_mod('vcard_cv_resume_copyright_alingment');
	if($vcard_cv_resume_copyright_alingment != false){
		$vcard_cv_resume_custom_css .='.copyright p,#footer-2 p{';
			$vcard_cv_resume_custom_css .='text-align: '.esc_attr($vcard_cv_resume_copyright_alingment).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_padding = get_theme_mod('vcard_cv_resume_footer_padding');
	if($vcard_cv_resume_footer_padding != false){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='padding: '.esc_attr($vcard_cv_resume_footer_padding).' 0;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_icon = get_theme_mod('vcard_cv_resume_footer_icon');
	if($vcard_cv_resume_footer_icon == false){
		$vcard_cv_resume_custom_css .='.copyright p{';
			$vcard_cv_resume_custom_css .='width:100%; text-align:center; float:none;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_background_image = get_theme_mod('vcard_cv_resume_footer_background_image');
	if($vcard_cv_resume_footer_background_image != false){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background: url('.esc_attr($vcard_cv_resume_footer_background_image).'); background-size: cover;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_img_footer','scroll');
	if($vcard_cv_resume_theme_lay == 'fixed'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$vcard_cv_resume_custom_css .='}';
	}elseif ($vcard_cv_resume_theme_lay == 'scroll'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_copyright_background_color = get_theme_mod('vcard_cv_resume_copyright_background_color');
	if($vcard_cv_resume_copyright_background_color != false){
		$vcard_cv_resume_custom_css .='#footer-2{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_copyright_background_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_img_position = get_theme_mod('vcard_cv_resume_footer_img_position','center center');
	if($vcard_cv_resume_footer_img_position != false){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background-position: '.esc_attr($vcard_cv_resume_footer_img_position).'!important;';
		$vcard_cv_resume_custom_css .='}';
	} 

	/*------------------ Logo  -------------------*/

	$vcard_cv_resume_logo_padding = get_theme_mod('vcard_cv_resume_logo_padding');
	if($vcard_cv_resume_logo_padding != false){
		$vcard_cv_resume_custom_css .='.main-header .logo{';
			$vcard_cv_resume_custom_css .='padding: '.esc_attr($vcard_cv_resume_logo_padding).' !important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_logo_margin = get_theme_mod('vcard_cv_resume_logo_margin');
	if($vcard_cv_resume_logo_margin != false){
		$vcard_cv_resume_custom_css .='.main-header .logo{';
			$vcard_cv_resume_custom_css .='margin: '.esc_attr($vcard_cv_resume_logo_margin).';';
		$vcard_cv_resume_custom_css .='}';
	}

	// Site title Font Size
	$vcard_cv_resume_site_title_font_size = get_theme_mod('vcard_cv_resume_site_title_font_size');
	if($vcard_cv_resume_site_title_font_size != false){
		$vcard_cv_resume_custom_css .='.logo h1, .logo p.site-title{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_site_title_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	// Site tagline Font Size
	$vcard_cv_resume_site_tagline_font_size = get_theme_mod('vcard_cv_resume_site_tagline_font_size');
	if($vcard_cv_resume_site_tagline_font_size != false){
		$vcard_cv_resume_custom_css .='.logo p.site-description{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_site_tagline_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_site_title_color = get_theme_mod('vcard_cv_resume_site_title_color');
	if($vcard_cv_resume_site_title_color != false){
		$vcard_cv_resume_custom_css .='p.site-title a{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_site_title_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_site_tagline_color = get_theme_mod('vcard_cv_resume_site_tagline_color');
	if($vcard_cv_resume_site_tagline_color != false){
		$vcard_cv_resume_custom_css .='.logo p.site-description{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_site_tagline_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_logo_width = get_theme_mod('vcard_cv_resume_logo_width');
	if($vcard_cv_resume_logo_width != false){
		$vcard_cv_resume_custom_css .='.logo img{';
			$vcard_cv_resume_custom_css .='width: '.esc_attr($vcard_cv_resume_logo_width).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_logo_height = get_theme_mod('vcard_cv_resume_logo_height');
	if($vcard_cv_resume_logo_height != false){
		$vcard_cv_resume_custom_css .='.logo img{';
			$vcard_cv_resume_custom_css .='height: '.esc_attr($vcard_cv_resume_logo_height).';';
		$vcard_cv_resume_custom_css .='}';
	}

	// Woocommerce img

	$vcard_cv_resume_shop_featured_image_border_radius = get_theme_mod('vcard_cv_resume_shop_featured_image_border_radius', 0);
	if($vcard_cv_resume_shop_featured_image_border_radius != false){
		$vcard_cv_resume_custom_css .='.woocommerce ul.products li.product a img{';
			$vcard_cv_resume_custom_css .='border-radius: '.esc_attr($vcard_cv_resume_shop_featured_image_border_radius).'px;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_shop_featured_image_box_shadow = get_theme_mod('vcard_cv_resume_shop_featured_image_box_shadow',0);
	if($vcard_cv_resume_shop_featured_image_box_shadow != false){
		$vcard_cv_resume_custom_css .='.woocommerce ul.products li.product a img{';
			$vcard_cv_resume_custom_css .='box-shadow: '.esc_attr($vcard_cv_resume_shop_featured_image_box_shadow).'px '.esc_attr($vcard_cv_resume_shop_featured_image_box_shadow).'px '.esc_attr($vcard_cv_resume_shop_featured_image_box_shadow).'px #ddd;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_header_menus_color = get_theme_mod('vcard_cv_resume_header_menus_color');
	if($vcard_cv_resume_header_menus_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation a{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_header_menus_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_header_menus_hover_color = get_theme_mod('vcard_cv_resume_header_menus_hover_color');
	if($vcard_cv_resume_header_menus_hover_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation a:hover{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_header_menus_hover_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_header_submenus_color = get_theme_mod('vcard_cv_resume_header_submenus_color');
	if($vcard_cv_resume_header_submenus_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation ul ul a{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_header_submenus_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_header_submenus_hover_color = get_theme_mod('vcard_cv_resume_header_submenus_hover_color');
	if($vcard_cv_resume_header_submenus_hover_color != false){
		$vcard_cv_resume_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vcard_cv_resume_custom_css .='color: '.esc_attr($vcard_cv_resume_header_submenus_hover_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------- Wocommerce Settings  -------------------*/

	$vcard_cv_resume_related_product_show_hide = get_theme_mod('vcard_cv_resume_related_product_show_hide',true);
	if($vcard_cv_resume_related_product_show_hide != true){
		$vcard_cv_resume_custom_css .='.related.products{';
			$vcard_cv_resume_custom_css .='display: none;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_products_btn_padding_top_bottom = get_theme_mod('vcard_cv_resume_products_btn_padding_top_bottom');
	if($vcard_cv_resume_products_btn_padding_top_bottom != false){
		$vcard_cv_resume_custom_css .='.woocommerce a.button{';
			$vcard_cv_resume_custom_css .='padding-top: '.esc_attr($vcard_cv_resume_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vcard_cv_resume_products_btn_padding_top_bottom).' !important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_products_btn_padding_left_right = get_theme_mod('vcard_cv_resume_products_btn_padding_left_right');
	if($vcard_cv_resume_products_btn_padding_left_right != false){
		$vcard_cv_resume_custom_css .='.woocommerce a.button{';
			$vcard_cv_resume_custom_css .='padding-left: '.esc_attr($vcard_cv_resume_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vcard_cv_resume_products_btn_padding_left_right).' !important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_woocommerce_sale_position = get_theme_mod( 'vcard_cv_resume_woocommerce_sale_position','left');
    if($vcard_cv_resume_woocommerce_sale_position == 'left'){
		$vcard_cv_resume_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vcard_cv_resume_custom_css .='left: -10px; right: auto;';
		$vcard_cv_resume_custom_css .='}';
	}else if($vcard_cv_resume_woocommerce_sale_position == 'right'){
		$vcard_cv_resume_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vcard_cv_resume_custom_css .='left: auto !important; right: 15px !important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_woocommerce_sale_font_size = get_theme_mod('vcard_cv_resume_woocommerce_sale_font_size');
	if($vcard_cv_resume_woocommerce_sale_font_size != false){
		$vcard_cv_resume_custom_css .='.woocommerce span.onsale{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_woocommerce_sale_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_woocommerce_sale_padding_top_bottom = get_theme_mod('vcard_cv_resume_woocommerce_sale_padding_top_bottom');
	if($vcard_cv_resume_woocommerce_sale_padding_top_bottom != false){
		$vcard_cv_resume_custom_css .='.woocommerce span.onsale{';
			$vcard_cv_resume_custom_css .='padding-top: '.esc_attr($vcard_cv_resume_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vcard_cv_resume_woocommerce_sale_padding_top_bottom).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_woocommerce_sale_padding_left_right = get_theme_mod('vcard_cv_resume_woocommerce_sale_padding_left_right');
	if($vcard_cv_resume_woocommerce_sale_padding_left_right != false){
		$vcard_cv_resume_custom_css .='.woocommerce span.onsale{';
			$vcard_cv_resume_custom_css .='padding-left: '.esc_attr($vcard_cv_resume_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vcard_cv_resume_woocommerce_sale_padding_left_right).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_woocommerce_sale_border_radius = get_theme_mod('vcard_cv_resume_woocommerce_sale_border_radius', 0);
	if($vcard_cv_resume_woocommerce_sale_border_radius != false){
		$vcard_cv_resume_custom_css .='.woocommerce span.onsale{';
			$vcard_cv_resume_custom_css .='border-radius: '.esc_attr($vcard_cv_resume_woocommerce_sale_border_radius).'px;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------- Preloader Background Color  -------------------*/

	$vcard_cv_resume_preloader_bg_color = get_theme_mod('vcard_cv_resume_preloader_bg_color');
	if($vcard_cv_resume_preloader_bg_color != false){
		$vcard_cv_resume_custom_css .='#preloader{';
			$vcard_cv_resume_custom_css .='background-color: '.esc_attr($vcard_cv_resume_preloader_bg_color).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_preloader_border_color = get_theme_mod('vcard_cv_resume_preloader_border_color');
	if($vcard_cv_resume_preloader_border_color != false){
		$vcard_cv_resume_custom_css .='.loader-line{';
			$vcard_cv_resume_custom_css .='border-color: '.esc_attr($vcard_cv_resume_preloader_border_color).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_preloader_bg_img = get_theme_mod('vcard_cv_resume_preloader_bg_img');
	if($vcard_cv_resume_preloader_bg_img != false){
		$vcard_cv_resume_custom_css .='#preloader{';
			$vcard_cv_resume_custom_css .='background: url('.esc_attr($vcard_cv_resume_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vcard_cv_resume_custom_css .='}';
	}

	// Header Background Color
	$vcard_cv_resume_header_first_color = get_theme_mod('vcard_cv_resume_header_first_color');

	$vcard_cv_resume_header_second_color = get_theme_mod('vcard_cv_resume_header_second_color');

	if($vcard_cv_resume_header_first_color != false || $vcard_cv_resume_header_second_color != false){
		$vcard_cv_resume_custom_css .='.home-page-header{
		background: linear-gradient(to right, '.esc_attr($vcard_cv_resume_header_first_color).', '.esc_attr($vcard_cv_resume_header_second_color).');
		}';
	}

	$vcard_cv_resume_header_img_position = get_theme_mod('vcard_cv_resume_header_img_position','center top');
	if($vcard_cv_resume_header_img_position != false){
		$vcard_cv_resume_custom_css .='.home-page-header{';
		$vcard_cv_resume_custom_css .='background-position: '.esc_attr($vcard_cv_resume_header_img_position).'!important;';
		$vcard_cv_resume_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vcard_cv_resume_scroll_to_top_font_size = get_theme_mod('vcard_cv_resume_scroll_to_top_font_size');
	if($vcard_cv_resume_scroll_to_top_font_size != false){
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_scroll_to_top_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_scroll_to_top_padding = get_theme_mod('vcard_cv_resume_scroll_to_top_padding');
	$vcard_cv_resume_scroll_to_top_padding = get_theme_mod('vcard_cv_resume_scroll_to_top_padding');
	if($vcard_cv_resume_scroll_to_top_padding != false){
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='padding-top: '.esc_attr($vcard_cv_resume_scroll_to_top_padding).';padding-bottom: '.esc_attr($vcard_cv_resume_scroll_to_top_padding).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_scroll_to_top_width = get_theme_mod('vcard_cv_resume_scroll_to_top_width');
	if($vcard_cv_resume_scroll_to_top_width != false){
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='width: '.esc_attr($vcard_cv_resume_scroll_to_top_width).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_scroll_to_top_height = get_theme_mod('vcard_cv_resume_scroll_to_top_height');
	if($vcard_cv_resume_scroll_to_top_height != false){
		$vcard_cv_resume_custom_css .='.scrollup i{';
			$vcard_cv_resume_custom_css .='height: '.esc_attr($vcard_cv_resume_scroll_to_top_height).';';
		$vcard_cv_resume_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vcard_cv_resume_social_icon_font_size = get_theme_mod('vcard_cv_resume_social_icon_font_size');
	if($vcard_cv_resume_social_icon_font_size != false){
		$vcard_cv_resume_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_social_icon_font_size).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_social_icon_padding = get_theme_mod('vcard_cv_resume_social_icon_padding');
	if($vcard_cv_resume_social_icon_padding != false){
		$vcard_cv_resume_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$vcard_cv_resume_custom_css .='padding: '.esc_attr($vcard_cv_resume_social_icon_padding).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_social_icon_width = get_theme_mod('vcard_cv_resume_social_icon_width');
	if($vcard_cv_resume_social_icon_width != false){
		$vcard_cv_resume_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$vcard_cv_resume_custom_css .='width: '.esc_attr($vcard_cv_resume_social_icon_width).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_social_icon_height = get_theme_mod('vcard_cv_resume_social_icon_height');
	if($vcard_cv_resume_social_icon_height != false){
		$vcard_cv_resume_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$vcard_cv_resume_custom_css .='height: '.esc_attr($vcard_cv_resume_social_icon_height).';';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_button_footer_heading_letter_spacing = get_theme_mod('vcard_cv_resume_button_footer_heading_letter_spacing',1);
	$vcard_cv_resume_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vcard_cv_resume_custom_css .='letter-spacing: '.esc_attr($vcard_cv_resume_button_footer_heading_letter_spacing).'px;';
	$vcard_cv_resume_custom_css .='}';

	$vcard_cv_resume_button_footer_font_size = get_theme_mod('vcard_cv_resume_button_footer_font_size','25');
	$vcard_cv_resume_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vcard_cv_resume_custom_css .='font-size: '.esc_attr($vcard_cv_resume_button_footer_font_size).'px;';
	$vcard_cv_resume_custom_css .='}';

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_button_footer_text_transform','Capitalize');
	if($vcard_cv_resume_theme_lay == 'Capitalize'){
		$vcard_cv_resume_custom_css .='#footer h3{';
			$vcard_cv_resume_custom_css .='text-transform:Capitalize;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Lowercase'){
		$vcard_cv_resume_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vcard_cv_resume_custom_css .='text-transform:Lowercase;';
		$vcard_cv_resume_custom_css .='}';
	}
	if($vcard_cv_resume_theme_lay == 'Uppercase'){
		$vcard_cv_resume_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vcard_cv_resume_custom_css .='text-transform:Uppercase;';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_footer_heading_weight = get_theme_mod('vcard_cv_resume_footer_heading_weight','500');
	if($vcard_cv_resume_footer_heading_weight != false){
		$vcard_cv_resume_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vcard_cv_resume_custom_css .='font-weight: '.esc_attr($vcard_cv_resume_footer_heading_weight).';';
		$vcard_cv_resume_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vcard_cv_resume_theme_lay = get_theme_mod( 'vcard_cv_resume_footer_template','vcard_cv_resume-footer-one');
    if($vcard_cv_resume_theme_lay == 'vcard_cv_resume-footer-one'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='';
		$vcard_cv_resume_custom_css .='}';

	}else if($vcard_cv_resume_theme_lay == 'vcard_cv_resume-footer-two'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vcard_cv_resume_custom_css .='color:#000;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer ul li::before{';
			$vcard_cv_resume_custom_css .='background:#000;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vcard_cv_resume_custom_css .='border: 1px solid #000;';
		$vcard_cv_resume_custom_css .='}';

	}else if($vcard_cv_resume_theme_lay == 'vcard_cv_resume-footer-three'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background: #232524;';
		$vcard_cv_resume_custom_css .='}';
	}
	else if($vcard_cv_resume_theme_lay == 'vcard_cv_resume-footer-four'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background: #f7f7f7;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vcard_cv_resume_custom_css .='color:#000;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer ul li::before{';
			$vcard_cv_resume_custom_css .='background:#000;';
		$vcard_cv_resume_custom_css .='}';
		$vcard_cv_resume_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vcard_cv_resume_custom_css .='border: 1px solid #000;';
		$vcard_cv_resume_custom_css .='}';
	}
	else if($vcard_cv_resume_theme_lay == 'vcard_cv_resume-footer-five'){
		$vcard_cv_resume_custom_css .='#footer{';
			$vcard_cv_resume_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vcard_cv_resume_custom_css .='}';
	}

	$vcard_cv_resume_responsive_preloader_hide = get_theme_mod('vcard_cv_resume_responsive_preloader_hide',false);
	if($vcard_cv_resume_responsive_preloader_hide == true && get_theme_mod('vcard_cv_resume_loader_enable',false) == false){
		$vcard_cv_resume_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$vcard_cv_resume_custom_css .='display:none !important;';
		$vcard_cv_resume_custom_css .='} }';
	}

	if($vcard_cv_resume_responsive_preloader_hide == false){
		$vcard_cv_resume_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$vcard_cv_resume_custom_css .='display:none !important;';
		$vcard_cv_resume_custom_css .='} }';
	}

	$vcard_cv_resume_bradcrumbs_alignment = get_theme_mod( 'vcard_cv_resume_bradcrumbs_alignment','Left');
    if($vcard_cv_resume_bradcrumbs_alignment == 'Left'){
    	$vcard_cv_resume_custom_css .='@media screen and (min-width:768px) {';
		$vcard_cv_resume_custom_css .='.bradcrumbs{';
			$vcard_cv_resume_custom_css .='text-align:start;';
		$vcard_cv_resume_custom_css .='}}';
	}else if($vcard_cv_resume_bradcrumbs_alignment == 'Center'){
		$vcard_cv_resume_custom_css .='@media screen and (min-width:768px) {';
		$vcard_cv_resume_custom_css .='.bradcrumbs{';
			$vcard_cv_resume_custom_css .='text-align:center;';
		$vcard_cv_resume_custom_css .='}}';
	}else if($vcard_cv_resume_bradcrumbs_alignment == 'Right'){
		$vcard_cv_resume_custom_css .='@media screen and (min-width:768px) {';
		$vcard_cv_resume_custom_css .='.bradcrumbs{';
			$vcard_cv_resume_custom_css .='text-align:end;';
		$vcard_cv_resume_custom_css .='}}';
	}