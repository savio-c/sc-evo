<?php

function CMZ__footer_register($wp_customize){

  $wp_customize->selective_refresh->add_partial( 'CMZ_Footer__logo_img_ID', array( 'selector' => '.logo' ));
  $wp_customize->selective_refresh->add_partial( 'CMZ_Footer__description_ID', array( 'selector' => '#footer_description' ));


  $wp_customize->add_section( 'SECTION__footer', array(
    'title'          =>  __('Footer' , 'sc-evo'),
    'description'    =>  __('Inserisci il logo del Footer','sc-evo')
  ));

  /****************************** LOGO IMG **********************************************/

  $wp_customize->add_setting( 'CMZ_Footer__logo_img_ID', array(
    'default'        =>  __('', 'sc-evo'),
    'transport'      =>  'postMessage',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'CMZ_Footer__logo_img_ID',  array(
      'label'      =>  __( '', 'sc-evo' ),
      'section'    =>  __('SECTION__footer', 'sc-evo')
  )));


  /****************************** DESCRIPTION **********************************************/

  $wp_customize->add_setting( 'CMZ_Footer__description_ID' , array(
    'default'        =>  __('', 'sc-evo'),
    'transport'      =>  'postMessage',
  ));
  $wp_customize->add_control( 'CMZ_Footer__description_ID' , array(
      'label'      =>  __( 'Descrizione' , 'sc-evo' ),
      'type'       =>  'textarea',
      'section'    =>  __('SECTION__footer' , 'sc-evo')
  ));


    /**************************** FACEBOOK ************************************************/

    $wp_customize->add_setting( 'CMZ_Footer__facebook_ID' , array(
      'default'        =>  __('', 'sc-evo'),
      'transport'      =>  'postMessage',
    ));
    $wp_customize->add_control( 'CMZ_Footer__facebook_ID' , array(
        'label'      =>  __( 'Facebook link' , 'sc-evo' ),
        'type'       =>  'text',
        'section'    =>  __('SECTION__footer' , 'sc-evo')
    ));


      /***************************** INSTAGRAM ***********************************************/

      $wp_customize->add_setting( 'CMZ_Footer__instagram_ID' , array(
        'default'        =>  __('', 'sc-evo'),
        'transport'      =>  'postMessage',
      ));
      $wp_customize->add_control( 'CMZ_Footer__instagram_ID' , array(
          'label'      =>  __( 'Instagram link' , 'sc-evo' ),
          'type'       =>  'text',
          'section'    =>  __('SECTION__footer' , 'sc-evo')
      ));

      /***************************** PINTEREST ***********************************************/

      $wp_customize->add_setting( 'CMZ_Footer__pinterest_ID' , array(
        'default'        =>  __('', 'sc-evo'),
        'transport'      =>  'postMessage',
      ));
      $wp_customize->add_control( 'CMZ_Footer__pinterest_ID' , array(
          'label'      =>  __( 'Pinterest link' , 'sc-evo' ),
          'type'       =>  'text',
          'section'    =>  __('SECTION__footer' , 'sc-evo')
      ));


 $wp_customize->get_setting( 'CMZ_Footer__description_ID' )->transport = 'postMessage';

}

add_action('customize_register', 'CMZ__footer_register');

 ?>
