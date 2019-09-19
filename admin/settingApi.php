<?php

add_action('admin_menu', 'menu_pages');

function menu_pages()
{
  //add_menu_page( //$page_title, //$menu_title, //$capability, //$menu_slug, //$function = '', //$icon_url = '', //$position = null );
  add_menu_page( 'esempio admin page page',  'Footer',  'manage_options',  'menu_footer_admin_page',  'add_menu_page_function',  'dashicons-admin-network' );
    //add_submenu_page( //$parent_slug,  //$page_title,  //$menu_title,  //$capability,  //$menu_slug,  //$function = '' );
  add_submenu_page( 'menu_footer_admin_page',  'Social',  'Social',  'manage_options',  'social_admin_page',  'add_submenu_page_function' );

} //  #close menu_pages


  function add_menu_page_function() {  require_once('pages/menu_titolo.php'); }
  function add_submenu_page_function() {  require_once('pages/submenu_titolo.php'); }

  add_action('admin_init', 'display_footer');

  function display_footer()
  {
    //add_settings_section(  //$id,  //$title,  //$callback,  //$page );
    add_settings_section( 'footer_setion_id',  'Nome e cognome',  'display_footer_callback',  'menu_footer_admin_page' );
    function display_footer_callback() {}

    //add_settings_field( //$id, //$title, //$callback, //$page, stessa pagina indicata in add_settings_section //$section, //$args );
    add_settings_field( 'nome', 'inserire il vostro nome',  'display_nome_callback', 'menu_footer_admin_page', 'footer_setion_id' );
    add_settings_field( 'cognome',  'inserire il vostro cognome',  'display_cognome_callback',  'menu_footer_admin_page',  'footer_setion_id' );

   //register_setting( //$option_group, //'nome_field', //$option_name //$args);
   register_setting( 'footer_group', 'nome_field');
   register_setting( 'footer_group', 'cognome_field');


    function display_nome_callback($params)
    {
       $fieldName = get_option('nome_field');  ?>

      <input id="" class="regular-text" type="text" name="nome_field" value="<?php echo $fieldName ?>">

   <?php
   }

    function display_cognome_callback($params)
    {
      $fieldSurname = get_option('cognome_field'); ?>

        <input type="file" name="cognome_field" accept="image/*" value="<?php echo $fieldSurname ?>">

    <?php
    }
  }  //  #close display_footer


  /**************************************************************
  **************************************************************/


    add_action('admin_init', 'display_Option_Social');

    function display_Option_Social()
    {

      add_settings_section( 'social_setion_id', 'Inserisci i Social', 'display_Option_Social_callback', 'social_admin_page' );
      function display_Option_Social_callback(){}
    /*================================================
                add_settings_field
    ================================================*/
      add_settings_field( 'facebook',  'inserire facebook',  'display_facebook_callback',  'social_admin_page',  'social_setion_id' );
      add_settings_field( 'twitter', 'inserire twitter',  'display_twitter_callback',  'social_admin_page',  'social_setion_id' );

    /*================================================
                register_setting
    ================================================*/
      register_setting( 'social_group', 'facebook_field');
      register_setting( 'social_group', 'twitter_field');


      function display_facebook_callback( $params )
      {
        $fieldFacebook = get_option('facebook_field');  ?>

        <input id="" type="text" size="30" name="facebook_field" value="<?php echo $fieldFacebook ?>">

        <?php
      }

      function display_twitter_callback( $params )
      {
        $fieldTwitter = get_option('twitter_field'); ?>

        <input id="" type="text" size="30" name="twitter_field" value="<?php echo $fieldTwitter ?>">

        <?php
      }
    }
