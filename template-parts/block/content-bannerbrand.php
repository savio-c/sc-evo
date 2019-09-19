<?php

    $title              =  get_field('title');
    $title_size         =  get_field('title_size');
    $subtitle           =  get_field('subtitle');
    $rows               =  get_field('logos_repeater');
    $button_style       =  get_field('button_style');
    $button_url         =  get_field('button_url');
    $wrap               =  get_field('wrap');
    $scroll             =  get_field('scroll');
    $padding_top        =  get_field('padding_top');
    $padding_bottom     =  get_field('padding_bottom');

    ?>


<section class="banner-brand pt-1 pb-2 <?php
    if( $padding_top ){ echo 'pt-'.$padding_top.'__medium ';}
    if( $padding_bottom ){ echo 'pb-'.$padding_bottom.'__medium ';}
    if( $padding_bottom ){ echo 'pb-'.$padding_bottom.'__medium ';}
    if( $scroll ){ echo 'scroll-x';}
?>">


<div class="content__title text-center subtitle-small mb-0">
  <?php
    echo '<' . esc_html($title_size) . ' class="mb-1 mb-2__large ">';
    echo esc_html($title);
    echo '</' . esc_html($title_size) .'>';
  ?>
</div>

<div class="banner-wrapper">
  <div class="banner-inner <?php if($wrap){ echo 'flex-wrap'; } ?>">

      <?php
          if($rows) :
              foreach($rows as $row) :

                $inner_image     =    $row['inner_image'];
                $inner_link      =    $row['inner_link'];
                  $in_url            =    isset($inner_link['url']) ? $inner_link['url'] : '';
                  $in_title          =    isset($inner_link['title']) ? $inner_link['title'] : '';
                  ?>

                  <a href="<?php echo $in_url; ?>" title="<?php echo $in_title; ?>" class="banner-logo">
                          <?php if( $inner_image ) {
                             echo wp_get_attachment_image( $inner_image, 'full');
                           } else {
                             echo '<img src="' . get_template_directory_uri() . '/assets/images/Rectangle.png' . '">';
                           }  ?>
                  </a>

          <?php endforeach; endif; ?>

          <?php if($scroll && $rows) :

                    foreach($rows as $row) :

                      $inner_image     =    $row['inner_image'];
                      $inner_link      =    $row['inner_link'];
                        $in_url            =    isset($inner_link['url']) ? $inner_link['url'] : '';
                        $in_title          =    isset($inner_link['title']) ? $inner_link['title'] : '';
                        ?>

                        <a href="<?php echo $in_url; ?>" title="<?php echo $in_title; ?>" class="banner-logo">
                                <?php if( $inner_image ) {
                                   echo wp_get_attachment_image( $inner_image, 'full');
                                 } else {
                                   echo '<img src="' . get_template_directory_uri() . '/assets/images/Rectangle.png' . '">';
                                 }  ?>
                        </a>

                <?php endforeach; endif;?>


  </div>


</div>
</section>
