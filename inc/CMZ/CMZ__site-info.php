<?php

function CMZ__siteinfo_register($wp_customize){

  $wp_customize->selective_refresh->add_partial( 'logo_img_ID', array( 'selector' => '.logo' ));


  $wp_customize->add_section( 'SECTION__site-info', array(
    'title'          =>  __('Site Info','sc-evo'),
    'description'    =>  __('Personalizza il logo','sc-evo')
  ));

  /****************************************************************************/

  $wp_customize->add_setting( 'logo_img_ID', array(
    'default'        =>  __('', 'sc-evo'),
    'transport'      =>  'postMessage',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'logo_img_ID',  array(
      'label'      =>  __( 'Logo', 'sc-evo' ),
      'section'    =>  __('SECTION__site-info', 'sc-evo')
  )));

  /***************************************************************************/

  $wp_customize->add_setting( 'logo_alt_ID', array(
    'default'        =>  __('', 'sc-evo'),
    'transport'      =>  'postMessage',
  ));
  $wp_customize->add_control('logo_alt_ID',  array(
      'label'      =>  __( 'testo alt del logo', 'sc-evo' ),
      'type'       =>  'text',
      'section'    =>  __('SECTION__site-info', 'sc-evo')

  ));

  /***************************************************************************/

$wp_customize->add_setting( 'favicon_img_192_ID', array(
    'default'    => __('', 'savius'),
));
$wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize, 'favicon_img_192_ID',  array(
    'label'      => __( 'Favicon 192x192', 'savius' ),
    'section'    => __('SECTION__site-info', 'savius'),
)));

/***************************************************************************/

$wp_customize->add_setting( 'favicon_img_76_ID', array(
    'default'    => __('', 'savius'),
));
$wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize, 'favicon_img_76_ID',  array(
    'label'      => __( 'Favicon 76x76', 'savius' ),
    'section'    => __('SECTION__site-info', 'savius'),
)));

/***************************************************************************/

$wp_customize->add_setting( 'favicon_img_120_ID', array(
    'default'    => __('', 'savius'),
));
$wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize, 'favicon_img_120_ID',  array(
    'label'      => __( 'Favicon 120x120', 'savius' ),
    'section'    => __('SECTION__site-info', 'savius'),
)));

/***************************************************************************/

$wp_customize->add_setting( 'favicon_img_152_ID', array(
    'default'    => __('', 'savius'),
));
$wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize, 'favicon_img_152_ID',  array(
    'label'      => __( 'Favicon 152x152', 'savius' ),
    'section'    => __('SECTION__site-info', 'savius'),
)));

/***************************************************************************/

$wp_customize->add_setting( 'favicon_img_180_ID', array(
    'default'    => __('', 'savius'),
));
$wp_customize->add_control(
  new WP_Customize_Image_Control( $wp_customize, 'favicon_img_180_ID',  array(
    'label'      => __( 'Favicon 180x180', 'savius' ),
    'section'    => __('SECTION__site-info', 'savius'),
)));

}

add_action('customize_register', 'CMZ__siteinfo_register');

 ?>
