/**
 * Custom CSS
 */
function mh_load_theme_style() {
    /* Load CSS */
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
    /* Custom CSS */
	if ( is_page() ) {
		wp_register_style( 'style-page', get_stylesheet_directory_uri() . '/assets/css/style.page.css', false, false );
		wp_enqueue_style( 'style-page' );
	}
	  
	if ( wp_is_mobile() ) {
		wp_register_style( 'style-mobile', get_stylesheet_directory_uri() . '/assets/css/style.mobile.css', false, false );
		wp_enqueue_style( 'style-mobile' );
	}
    /* Add Font Awesome */
    wp_register_style( 'all-font-awesome', get_stylesheet_directory_uri() . '/assets/fontsawesome/css/all.min.css', false, false );
    wp_enqueue_style( 'all-font-awesome' );
}
add_action('wp_enqueue_scripts', 'mh_load_theme_style', 998 );
