<?php

    $image              =  get_field('image');
    $categories         =  get_field('categories');
    $title              =  get_field('title');
    $title_size         =  get_field('title_size');
    $subtitle           =  get_field('subtitle');
    $paragraph          =  get_field('paragraph');
    $text_color         =  get_field('text_color');
    $link               =  get_field('link');
    $button_style       =  get_field('button_style');
    $button_color       =  get_field('button_color');
    $button_url         =  get_field('button_url');
    $overlay            =  get_field('overlay');
    $overlay_color      =  get_field('overlay_color');
    $opacity_overlay    =  get_field('overlay_opacity');
    $margin_top         =  get_field('margin_top');
    $margin_bottom      =  get_field('margin_bottom');

    $var_class_color_white = $text_color == 'text-white' ? 'text-white op2' : '';
    // $var_class_color_op_black = $block_color == 'is-black' ? 'text-white op2' : '';
    ?>

<section class="banner-center mt-1 mb-2 <?php if( $margin_top ){ echo 'mt-'.$margin_top.'__medium ';} if( $margin_bottom ){ echo 'mb-'.$margin_bottom.'__medium';} ?>">

  <?php if ($overlay) : ?>
      <div class="banner-overlay"
           style="background-color:<?php echo $overlay_color ?>; opacity: <?php echo $opacity_overlay ?>">
      </div>
  <?php endif; ?>

  <div class="banner-inner">

      <?php
        echo '<' . esc_html($title_size) . ' class="mb-1 ' . $text_color . ' ">';
          echo esc_html($title);
        echo '</' . esc_html($title_size) .'>';?>

        <div class="subtitle-large <?php echo $var_class_color_white ?>">
          <?php echo $subtitle; ?>
        </div>

        <div class="<?php echo $var_class_color_white ?>">
          <?php echo $paragraph; ?>
        </div>

         <?php
         if( $link ):?>

          <a class="btn <?php echo $button_style.' '; echo $button_color?>"
             href="<?php echo esc_url($link['url']); ?>"
             target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                <?php echo esc_html($link['title']); ?>
          </a>
        <?php endif; ?>


  </div>
  <figure class="image">
      <?php if( $image ) {
         echo wp_get_attachment_image( $image, 'full');
       } else {
         echo '<img src="' . get_template_directory_uri() . '/assets/images/Banner.png' . '">';
       }  ?>
  </figure>
</section>
