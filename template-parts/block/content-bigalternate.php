<?php




    $image              =  get_field('image');
    $categories         =  get_field('categories');
    $direction          =  get_field('direction');
    $title              =  get_field('title');
    $title_size         =  get_field('title_size');
    $link               =  get_field('link');
    $button_style       =  get_field('button_style');
    $button_color       =  get_field('button_color');
    $button_url         =  get_field('button_url');
    $paragraph          =  get_field('paragraph');
    $text_size          =  get_field('text_size');
    $block_color        =  get_field('block_color');
    $padding_top        =  get_field('padding_top');
    $padding_bottom     =  get_field('padding_bottom');

    $var_class_bg_black       = $block_color == 'is-black' ? 'white' : '';
    $var_class_color_black    = $block_color == 'is-black' ? 'text-white' : '';
    $var_class_color_op_black = $block_color == 'is-black' ? 'text-white op2' : '';
    ?>


<section class="container box-alternate-big <?php echo $block_color.' '; echo $direction.' '; if( $padding_top ){ echo 'pt-'.$padding_top.' ';} if( $padding_bottom ){ echo 'pb-'.$padding_bottom;}?>" >
            <div class="ly__grid is-collapse">
                <div class="is-12 is-6__medium boxalt__image">

                    <figure>
                        <?php if( $image ) {
                           echo wp_get_attachment_image( $image, 'full');
                         } else {
                           echo '<img src="' . get_template_directory_uri() . '/assets/images/Image.png' . '">';
                         }  ?>
                    </figure>

                </div>
                <div class="is-12 is-6__medium boxalt__text">
                    <div class="boxalt__text-inner">
                        <?php if ($categories) :?>
                            <div class="categories <?php echo $var_class_bg_black; ?>">
                                <?php echo $categories; ?>
                            </div>
                        <?php endif;


                         echo '<' . esc_html($title_size) . ' class="mb-1 mb-2__large ' . $var_class_color_black . ' ">';
                           echo esc_html($title);
                         echo '</' . esc_html($title_size) .'>';?>

                         <div class="<?php echo $var_class_color_op_black.' '.$text_size;?>">
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
                </div>
            </div>
        </section>
