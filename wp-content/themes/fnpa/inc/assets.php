<?php 
/**
 * Enqueue scripts and styles.
 */
function fnpa_scripts() {
	// wp_enqueue_style( 'fnpa-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'fnpa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fnpa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// importing css files
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/vendors/bootstrap.min.css', array(), null, 'all');
	wp_enqueue_style('swiper-bundle-min', get_template_directory_uri() . '/assets/css/vendors/swiper-bundle.min.css', array(), null, 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/vendors/aos.css', array(), null, 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/vendors/magnific-popup.css', array(), null, 'all');
	wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array(), null, 'all');

// Enqueue font styles
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/fonts/bootstrap-icons/bootstrap-icons.min.css', array(), null, 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/fonts/boxicons/boxicons.min.css', array(), null, 'all');
	wp_enqueue_style('fontawesome-pro', 'https://pro.fontawesome.com/releases/v5.14.0/css/all.css', array(), null, 'all');

// Enqueue main stylesheet
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');
	

	// importing js files
// Enqueue vendor scripts
	wp_enqueue_script('jquery-3.7.1', get_template_directory_uri() . '/assets/js/vendors/jquery-3.7.1.min.js', array(), null, true);
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/vendors/bootstrap.bundle.min.js', array('jquery-3.7.1'), null, true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/vendors/swiper-bundle.min.js', array('jquery-3.7.1'), null, true);
	wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery-3.7.1'), null, true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/vendors/aos.js', array(), null, true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/vendors/wow.min.js', array(), null, true);
	wp_enqueue_script('headhesive', get_template_directory_uri() . '/assets/js/vendors/headhesive.min.js', array(), null, true);
	wp_enqueue_script('smart-stick-nav', get_template_directory_uri() . '/assets/js/vendors/smart-stick-nav.js', array('jquery-3.7.1'), null, true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/vendors/jquery.magnific-popup.min.js', array('jquery-3.7.1'), null, true);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/vendors/gsap.min.js', array(), null, true);
	wp_enqueue_script('scroll-to-plugin', get_template_directory_uri() . '/assets/js/vendors/ScrollToPlugin.min.js', array('gsap'), null, true);
	wp_enqueue_script('scroll-trigger', get_template_directory_uri() . '/assets/js/vendors/ScrollTrigger.min.js', array('gsap'), null, true);

// Enqueue theme-specific scripts
	wp_enqueue_script('gsap-custom', get_template_directory_uri() . '/assets/js/gsap-custom.js', array('gsap', 'scroll-trigger'), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-3.7.1'), null, true);


}
add_action( 'wp_enqueue_scripts', 'fnpa_scripts' );
