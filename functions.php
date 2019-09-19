<?php


if ( ! function_exists( 'sc_evo_setup' ) ) :

	function sc_evo_setup() {

		load_theme_textdomain( 'sc-evo', get_template_directory() . '/languages' ); //carica il file della traduzione - software mac poedit

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'sc-evo_presentation', 400, 300, true);
	  add_image_size( 'sc-evo_profile-card', 300, 330, true);

		register_nav_menus(
			array(
        'primary-menu'  =>  esc_html__( 'Primary', 'sc-evo' ),
				'footer-menu'   =>  esc_html__( 'Footer', 'sc-evo' ),
		  )
		);

   require_once get_template_directory() . '/inc/walker_menu/walker-menu.php';

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

    //require_once('functions/gutenberg.php');

		// rimuove i tag automatici che si creano in CF7 es. </br> ecc...
	  //	add_filter('wpcf7_autop_or_not', '__return_false');

		// rimuove il css di CF7
    add_filter( 'wpcf7_load_css', '__return_false' );

		add_theme_support( 'customize-selective-refresh-widgets' );

	  //require_once('functions/columns_admin.php');

// aggiunge la classe .body al tag body
		function my_plugin_body_class($classes) {
		    $classes[] = 'body';
		    return $classes;
		}

		add_filter('body_class', 'my_plugin_body_class');


	}
endif;

add_action( 'after_setup_theme', 'sc_evo_setup' );


function sc_evo_script() {
	  //wp_enqueue_script( 'jQuery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true );
		wp_enqueue_script('cookies-script', get_template_directory_uri() . '/assets/js/cookie-banner-min.js','','',true);
		wp_enqueue_script('sc-evo-scripts', get_template_directory_uri() . '/assets/js/app-min.js','','',true);
}

function sc_evo_style(){
	  //wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Heebo:400,700', false );
		wp_enqueue_style( 'sc-evo-style', get_template_directory_uri() . '/assets/css/app.css' );
}

add_action( 'wp_enqueue_scripts', 'sc_evo_script' );//js
add_action( 'wp_enqueue_scripts', 'sc_evo_style' );//css

// nasconde Admin Bar
// function hide_admin_bar(){ return false; }
// add_filter( 'show_admin_bar', 'hide_admin_bar' );
//
function custom_loginlogo() {
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/Logo.svg) !important;width: 220px!important;background-size: 100%!important; height: 40px!important; }
	</style>';
}
add_action('login_head', 'custom_loginlogo');

require_once('inc/install-plugin/install-plugin.php');//install plugin
require_once('inc/Gutenberg/functions/Function-init.php');
require_once('inc/Gutenberg/acf/Field__editor.php');
require_once('inc/Gutenberg/acf/Block-init.php');
require_once('inc/CMZ/CMZ-init.php');
require_once('admin/settingApi.php');

//require_once('inc/Gutenberg/block/block-media-content.php');

add_action( 'enqueue_block_editor_assets', 'gutenberg_assets' );
/**
 * Load Gutenberg stylesheet.
 */
function gutenberg_assets() {
	// Load the theme styles within Gutenberg.
  wp_enqueue_style( 'gutenberg-2', get_theme_file_uri( '/assets/css/editor.css' ), false );
  wp_enqueue_style( 'gutenberg', get_theme_file_uri( '/assets/css/app.css' ), false );
}


 ?>
