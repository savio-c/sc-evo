<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'sc_evo_require_plugins' );

function sc_evo_require_plugins() {

    $plugins = array(
				  array(
				        'name'               => 'Advanced Custom Fields PRO',
				        'slug'               => 'acf',
				        'source'             => 'https://connect.advancedcustomfields.com/index.php?a=download&p=pro&k=b3JkZXJfaWQ9MTUyMDg0fHR5cGU9ZGV2ZWxvcGVyfGRhdGU9MjAxOS0wMi0wNyAxMToxNDo1NA==',
				        'required'           => true, // this plugin is required
				        'external_url'       => 'https://www.advancedcustomfields.com/resources/', // page of my plugin
				        'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
					array(
								'name'               => 'Contact Form 7',
								'slug'               => 'cf7',
								'source'             => 'https://wordpress.org/plugins/contact-form-7/',
								'required'           => true, // this plugin is required
								'external_url'       => 'https://contactform7.com', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
					array(
								'name'               => 'Contact Form CFDB7',
								'slug'               => 'cfdb7',
								'source'             => 'https://wordpress.org/plugins/contact-form-cfdb7/',
								'required'           => true, // this plugin is required
								'external_url'       => 'https://ciphercoin.com/', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
					array(
								'name'               => 'Easy SVG Support',
								'slug'               => 'easy-svg-support',
								'source'             => 'https://wordpress.org/plugins/easy-svg/',
								'required'           => true, // this plugin is required
								'external_url'       => 'https://wordpress.org/plugins/easy-svg/', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
					array(
								'name'               => 'Polylang',
								'slug'               => 'polyl',
								'source'             => 'https://wordpress.org/plugins/polylang/',
								'required'           => false, // this plugin is required
								'external_url'       => 'https://wordpress.org/plugins/polylang/', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
					array(
								'name'               => 'Query Monitor',
								'slug'               => 'q-monitor',
								'source'             => 'https://wordpress.org/plugins/query-monitor/',
								'required'           => false, // this plugin is required
								'external_url'       => 'https://wordpress.org/plugins/query-monitor/', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
          array(
								'name'               => 'Yoast SEO',
								'slug'               => 'yoast',
								'source'             => 'https://downloads.wordpress.org/plugin/wordpress-seo.12.1.zip',
								'required'           => false, // this plugin is required
								'external_url'       => 'https://wordpress.org/plugins/wordpress-seo/', // page of my plugin
								'force_deactivation' => true, // deactivate this plugin when the user switches to another theme
					),
		 );

		$config = array(
		    'id'           => 'sc-evo-id', // your unique TGMPA ID
		    'default_path' => get_stylesheet_directory() . '/lib/plugins/', // default absolute path
		    'menu'         => 'sc-evo-install-required-plugins', // menu slug
		    'has_notices'  => true, // Show admin notices
		    'dismissable'  => true, // the notices are NOT dismissable
		    'dismiss_msg'  => __( 'sds asda sda sdasda sd' ), // this message will be output at top of nag
		    'is_automatic' => true, // automatically activate plugins after installation
		    'message'      => __( '<!--Hey there.-->' ), // message to output right before the plugins table
		    'strings'      => array(), // The array of message strings that TGM Plugin Activation uses
		);

    tgmpa( $plugins, $config );

}


 ?>
