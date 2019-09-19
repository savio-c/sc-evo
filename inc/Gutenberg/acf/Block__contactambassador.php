<?php

add_action('acf/init', 'acf_init_Contact_Ambassador');
function acf_init_Contact_Ambassador() {

	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type( array(
			'name'				    =>  'contactAmbassador',
			'title'				    =>  __('APX - Contact Ambassador'),
			'description'		  =>  __('Box Contact Ambassador'),
			'render_callback'	=>  'contactambassador_callback',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.448" y="1.67" width="21.435" height="21.435" fill="#ffdf09"/><path d="M22.911,0H1.091A1.09,1.09,0,0,0,0,1.089v21.82A1.09,1.09,0,0,0,1.089,24h21.82A1.09,1.09,0,0,0,24,22.911V1.091A1.09,1.09,0,0,0,22.911,0ZM20.468,2.185,12,13.913,3.541,2.2C7.137,2.215,16.882,2.194,20.468,2.185ZM2.182,21.818V4.074l8.926,12.361a1.1,1.1,0,0,0,1.783,0L21.818,4.072V21.818Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}


function contactambassador_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		      include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


 ?>
