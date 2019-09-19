<?php

add_action('acf/init', 'acf_init_Big_alternate');
function acf_init_Big_alternate() {

	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type( array(
			'name'				    =>  'bigAlternate',
			'title'				    =>  __('APX - Box Alt Big'),
			'description'		  =>  __('Box alternato con immagine grande'),
			'render_callback'	=>  'bigalternate_callback',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.282" y="1.282" width="21.435" height="21.435" fill="#ffdf09"/><path d="M22.909,0H1.091A1.09,1.09,0,0,0,0,1.091V22.909A1.09,1.09,0,0,0,1.091,24H22.909A1.09,1.09,0,0,0,24,22.909V1.091A1.09,1.09,0,0,0,22.909,0Zm-12,21.818H2.182V2.182h8.727V21.818Zm10.909,0H13.091V2.182h8.727Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}


function bigalternate_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		      include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


 ?>
