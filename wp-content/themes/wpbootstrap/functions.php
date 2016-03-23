<?php 

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap-3.3.6-dist/js/bootstrap.min.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
    // Register the script like this for a theme:
}

 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

        /**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Bootstrap Carousel RTS',
		'id'            => 'carousel_rts',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>