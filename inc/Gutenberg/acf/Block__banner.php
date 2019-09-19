<?php

add_action('acf/init', 'acf_init_Banner');
function acf_init_Banner() {

	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type( array(
			'name'				    =>  'Banner',
			'title'				    =>  __('APX - Banner'),
			'description'		  =>  __('Banner'),
			'render_callback'	=>  'Banner_callback',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.234" y="1.165" width="21.435" height="21.435" fill="#ffdf09"/><path d="M22.911,0H1.091A1.09,1.09,0,0,0,0,1.089v21.82A1.09,1.09,0,0,0,1.089,24h21.82A1.09,1.09,0,0,0,24,22.911V1.091A1.09,1.09,0,0,0,22.911,0ZM2.182,3.737,10.445,12,2.182,20.263ZM12,13.555l8.263,8.263H3.737ZM13.555,12l8.263-8.263V20.263Zm6.7-9.814L12,10.445,3.755,2.2C7.436,2.214,16.593,2.195,20.259,2.186Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}


function Banner_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		      include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


 ?>
