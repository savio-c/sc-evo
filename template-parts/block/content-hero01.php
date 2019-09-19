<?php


    $type_image            =  get_field('type_image');
    $image_background_hero =  get_field('image_background_hero');
    $overlay_hero          =  get_field('overlay_hero');
    $overlay_color         =  get_field('overlay_color');
    $opacity_overlay       =  get_field('opacity_overlay');
    $text_color            =  get_field('text_color');
    $title                 =  get_field('title');
    $title_size            =  get_field('title_size');
    $subtitle              =  get_field('subtitle');
    $subtitle_size         =  get_field('subtitle_size');
    $button_style          =  get_field('button_style');
    $button_color          =  get_field('button_color');
    $link                  =  get_field('link');
    $image_frame           =  get_field('image_frame');
    $video_frame           =  get_field('video_frame');
      $url = wp_get_attachment_url($video_frame);
      $type = wp_get_attachment_metadata($video_frame);
    $color_frame           =  get_field('color_frame');
    $image_video_mobile    =  get_field('image_video_mobile');

    $var_class_color_white = $text_color == 'text-white' ? 'text-white' : 'text-black';
 ?>

<header class="hero_01 container <?php echo $type_image ?>"
        style="background-image:url('<?php echo $image_background_hero['url'] ?>');">

  <?php if ($overlay_hero) : ?>
      <div class="hero-overlay"
           style="background-color:<?php echo $overlay_color ?>; opacity: <?php echo $opacity_overlay ?>">
      </div>
  <?php endif; ?>
    <div class="container-inner">
      <div class="content__title text-center">
          <?php
            echo '<' . esc_html($title_size) . ' class="mb-1 ' . $text_color . ' ">';
              echo esc_html($title);
            echo '</' . esc_html($title_size) .'>';



             if( $subtitle ) : ?>
              <div class="subtitle-<?php echo $subtitle_size . ' ' . $var_class_color_white; ?>">
                <?php echo $subtitle ?>
              </div>
          <?php endif; ?>

          <div>
            <?php if( $link ):?>
            	<a class="btn <?php echo $button_style.' '; echo $button_color; ?>"
                 href="<?php echo esc_url($link['url']); ?>"
                 target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                    <?php echo esc_html($link['title']); ?>
              </a>
            <?php endif; ?>
          </div>
      </div>

        <?php if($image_frame) : ?>
          <div class="frame" style="border-color:<?php echo $color_frame ?>">
              <?php echo wp_get_attachment_image( $image_frame, 'full'); ?>
          </div>
        <?php endif; ?>


         <?php if($video_frame) : ?>
          <div class="frame" style="border-color:<?php echo $color_frame ?>">
            <video loop="true" muted="true" autoplay="true" poster="" class="show-for-medium">
              <source type="video/<?php echo $type['fileformat']?>" src="<?php echo $url; ?>">
            </video>
            <figure class="hide-for-medium">
                 <?php echo wp_get_attachment_image( $image_video_mobile, 'full'); ?>
            </figure>
          </div>

        <?php endif; ?>

</header>
