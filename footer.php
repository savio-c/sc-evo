
    </div>
  </div>
</div>
<div class="overlay hidden"></div>
<footer class="footer-site">
<div class="footer-site__content">

<div class="ly__grid">
    <div class="is-12 is-4__medium">
        <div class="footer-logo" itemscope itemtype="https://schema.org/Brand">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home">
            <img src="<?php echo get_theme_mod('CMZ_Footer__logo_img_ID');?>"
                 alt=""
                 id="footer_logo"
                 itemprop="logo"
                 role="banner">
            <span itemprop="name" class="visuallyhidden"><?php echo get_theme_mod('logo_alt_ID'); ?></span>
          </a>
        </div>
        <div id="footer_description" class="footer-description">
          <?php echo get_theme_mod('CMZ_Footer__description_ID');?>
        </div>
        <div class="footer-social">
          <?php
              $facebook   =  get_theme_mod('CMZ_Footer__facebook_ID');
              $instagram  =  get_theme_mod('CMZ_Footer__instagram_ID');
              $pinterest  =  get_theme_mod('CMZ_Footer__pinterest_ID');
           ?>
           <ul>
             <?php if( $facebook ):?>
               <li>
                 <a href="<?php echo $facebook; ?>" title="Facebook" target="_blank">
                    <svg class="icon is-medium is-white"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite-icon.svg#icon-facebook' ?>"></use></svg>
                 </a>
               </li>
             <?php endif; ?>
             <?php if( $instagram ):?>
               <li>
                 <a href="<?php echo $instagram; ?>" title="Instagram" target="_blank">
                    <svg class="icon is-medium is-white"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite-icon.svg#icon-instagram' ?>"></use></svg>
                 </a>
               </li>
             <?php endif; ?>
             <?php if( $pinterest ):?>
               <li>
                 <a href="<?php echo $pinterest; ?>" title="Pinterest" target="_blank">
                    <svg class="icon is-medium is-white op2"><use xlink:href="<?php echo get_template_directory_uri() . '/assets/images/sprite-icon.svg#icon-pinterest' ?>"></use></svg>
                 </a>
               </li>
             <?php endif; ?>
           </ul>
         </div>
    </div>
    <div class="is-12 is-8__medium">
      <?php
          wp_nav_menu( array(
            'theme_location'  => 'footer-menu',
             'echo'           => true,
            'menu_class'     => '',
            'walker'         => '',
            'fallback_cb'    => '',
            'items_wrap'     => '<ul class="menu-footer %2$s">%3$s</ul>'
          ));
      ?>
    </div>
</div>




</div>
<div class="footer-copyright"><?php esc_html_e('Copyright', 'archipassport') ?> - <?php echo date('o'); ?> <?php bloginfo(); ?></div>
</footer>


<div id="cookie-banner" class="cookie-banner" style="display:none">
    <span class="text-white">I cookie ci aiutano a fornire i nostri servizi. Utilizzando tali servizi, accetti l'utilizzo dei cookie da parte nostra.</span>
    <a class="btn is-clear text-white" href="https://www.google.com/" target="_blank">More info</a>
    <a class="btn is-primary" id="cookie-button" href="#">OK</a>
</div>

</body>
</html>

<?php
echo get_option('twitter_field');
 ?>
<?php wp_footer(); ?>
