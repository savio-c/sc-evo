<div class="wrap">
    <h1 class="wp-heading-inline">titolo della pagina</h1>
    <form class="" action="options.php" method="post">
        <?php
        settings_errors();
        settings_fields( 'footer_group' ); // $option group - comune a register_setting
        do_settings_sections( 'menu_footer_admin_page' ); // $page - comune al 4 parametro di add_settings_section e al 4 parametro di add_settings_field
        submit_button( );
        ?>
    </form>
</div>
