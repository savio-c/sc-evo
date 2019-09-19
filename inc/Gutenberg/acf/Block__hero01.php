<?php

add_action('acf/init', 'acf_init_hero01');
function acf_init_hero01() {

	// check function exists
	if( function_exists('acf_register_block_type') ) {

		// register a testimonial block
		acf_register_block_type( array(
			'name'				    =>  'hero01',
			'title'				    =>  __('APX - Hero 01'),
			'description'		  =>  __('Hero 01 con frame'),
			'render_template'	=>  'template-parts/block/content-hero01.php',
			'category'			  =>  'layout',
			'icon'				    =>  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="1.053" y="1.108" width="22.055" height="22.08" rx="1.874" fill="#ffdf09"/><path d="M22.909,0H1.091A1.09,1.09,0,0,0,0,1.091V22.909A1.09,1.09,0,0,0,1.091,24H22.909A1.09,1.09,0,0,0,24,22.909V1.091A1.09,1.09,0,0,0,22.909,0ZM21.818,21.818H2.182V9.273H21.818Zm0-14.727H2.182V2.182H21.818Z"/></svg>',
      'mode'            =>  'preview',
			'keywords'			  =>  array( 'box', 'quote' ),
		));
	}
}

if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'acf_init_hero01');
}



 ?>
