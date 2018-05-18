// Custom CSS
function minhhung_load_theme_style() {
    // Load CSS
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
    // Custom CSS
    if ( is_page() ) {
        wp_enqueue_style( 'paged', get_stylesheet_directory_uri() . '/style.page.css', 19 );
    }
    if ( wp_is_mobile() ) {
        wp_enqueue_style( 'mobile', get_stylesheet_directory_uri() . '/style.mobile.css', 20 );
    }
    // Add Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}
add_action('wp_enqueue_scripts', 'minhhung_load_theme_style', 909 );
