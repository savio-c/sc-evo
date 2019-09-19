<?php

add_action('acf/init', 'acf_Block_smallalternate');
function acf_Block_smallalternate() {

	// check function exists
	if( function_exists('acf_register_block_type') ) {

		// register a testimonial block
		acf_register_block_type( array(
			'name'				    =>  'smallalternate',
			'title'				    =>  __('APX - Small alt'),
			'description'		  =>  __('Box alternato con immagine piccola'),
			'render_callback'	=>  'smallalternate_callback',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.053" y="1.108" width="22.055" height="22.08" rx="1.874" fill="#ffdf09"/><path d="M22.805,0H1.086A1.086,1.086,0,0,0,0,1.086V22.805a1.086,1.086,0,0,0,1.086,1.086H22.805a1.086,1.086,0,0,0,1.086-1.086V1.086A1.086,1.086,0,0,0,22.805,0ZM14.66,21.719H2.172V2.172H14.66Zm7.059,0H16.832V2.172h4.887Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}


function smallalternate_callback( $block ) {


	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		      include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


 ?>
