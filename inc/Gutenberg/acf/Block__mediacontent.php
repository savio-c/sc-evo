<?php

add_action('acf/init', 'acf_Block_mediacontent');
function acf_Block_mediacontent() {

	// check function exists
	if( function_exists('acf_register_block_type') ) {

		// register a testimonial block
		acf_register_block_type( array(
			'name'				    =>  'mediacontent',
			'title'				    =>  __('APX - Multibox'),
			'description'		  =>  __('A custom media content block.'),
			'render_callback'	=>  'mediacontent_callback',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.053" y="1.108" width="22.055" height="22.08" rx="1.874" fill="#ffdf09"/><path d="M22.909,0H1.091A1.09,1.09,0,0,0,0,1.091V22.909A1.09,1.09,0,0,0,1.091,24H22.909A1.09,1.09,0,0,0,24,22.909V1.091A1.09,1.09,0,0,0,22.909,0Zm-12,21.818H2.182V16.909h8.727v4.909Zm0-7.091H2.182V9.273h8.727v5.454Zm10.909,7.091H13.091V16.909h8.727Zm0-7.091H13.091V9.273h8.727Zm0-7.636H2.182V2.182H21.818Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}


function mediacontent_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);


	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		      include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


 ?>
