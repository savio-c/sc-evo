<?php

function CMZ_preview( $value='' ){
  wp_enqueue_script( 'CMZ_preview', get_template_directory_uri().'/inc/CMZ/js/preview.js', array(
      'jquery' ,
      'customize-preview'),
      '', true);
}
add_action( 'customize_preview_init' , 'CMZ_preview');

 ?>
