<?php

	$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option');
	$automobile_hub_tp_color_option_link = get_theme_mod('automobile_hub_tp_color_option_link');

	$automobile_hub_tp_theme_css = '';

	if($automobile_hub_tp_color_option != false){
		$automobile_hub_tp_theme_css .='.headerbox,span.cart-value.simplep,#theme-sidebar button[type="submit"], #footer button[type="submit"], .prev.page-numbers, .next.page-numbers, .page-numbers, #theme-sidebar .tagcloud a:hover, span.meta-nav, #comments input[type="submit"], #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, button[type="submit"], .headerbox, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.more-btn a,.center1 .ring::before,a.added_to_cart.wc-forward:hover{';
			$automobile_hub_tp_theme_css .='background-color: '.esc_attr($automobile_hub_tp_color_option).';';
		$automobile_hub_tp_theme_css .='}';
	}
	if($automobile_hub_tp_color_option != false){
		$automobile_hub_tp_theme_css .='a, .search-box i, .main-navigation a:hover, .box-content a, #theme-sidebar .textwidget a, #footer .textwidget a, .comment-body a, .entry-content a, .entry-summary a, a.page-numbers:hover, #theme-sidebar h3, #theme-sidebar a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .headerbox i:hover, .headerbox i:hover:after, #about h3, #about p i,p.infotext,a,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a,.main-navigation a:hover,#theme-sidebar h3,.search-box i,.headerbox i:hover,.social-media i:hover,#about h3,#theme-sidebar button[type="submit"]:hover, #comments input[type="submit"]:hover, span.meta-nav:hover{';
			$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_tp_color_option).';';
		$automobile_hub_tp_theme_css .='}';
	}
	if($automobile_hub_tp_color_option != false){
		$automobile_hub_tp_theme_css .='.wp-block-pullquote,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,#footer .tagcloud a:hover,.serach_inner form.search-form,.wp-block-pullquote blockquote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,a.added_to_cart.wc-forward:hover,#footer .tagcloud a:hover, .search_inner form.search-form{';
			$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_color_option).';';
		$automobile_hub_tp_theme_css .='}';
	}

	if($automobile_hub_tp_color_option_link != false){
		$automobile_hub_tp_theme_css .='a:hover,#theme-sidebar a:hover{';
			$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_tp_color_option_link).';';
		$automobile_hub_tp_theme_css .='}';
	}
	