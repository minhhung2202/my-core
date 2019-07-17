/**
 * Custom CSS Theme & Plugins
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
	/* Custom JS */
	wp_register_script( 'js-demo', get_stylesheet_directory_uri() . '/assets/js/demo.js', false, false, true );
	wp_enqueue_script( 'js-demo' );
	/* Add Font Awesome */
	wp_register_style( 'all-font-awesome', get_stylesheet_directory_uri() . '/assets/fontsawesome/css/all.min.css', false, false );
	wp_enqueue_style( 'all-font-awesome' );
}
add_action( 'wp_enqueue_scripts', 'mh_load_theme_style', 998 );

function mh_load_plugin_style() {
	wp_register_style( 'style-plugin', plugins_url( '/assets/css/style.css', __FILE__ ) );
	wp_enqueue_style( 'style-plugin' );
}
add_action( 'admin_init', 'mh_load_plugin_style' );
