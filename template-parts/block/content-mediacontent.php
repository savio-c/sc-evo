      <?php
                $categories      = get_field('categories');
                $title           = get_field('title');
                $title_size      = get_field('title_size');
                $subtitle        = get_field('subtitle');
                $block_color     = get_field('block_color');
                $columns         = get_field('columns');
                $inner_block     = get_field('inner_block');
                $button_style    = get_field('button_style');
                $button_color    = get_field('button_color');
                $link            = get_field('link');
                $rows            = get_field('mediaobject_repeater');
                $size_paragraph  = get_field('size_paragraph');
                $padding_top     = get_field('padding_top');
                $padding_bottom  = get_field('padding_bottom');
                $padding_mobile  = get_field('padding_mobile');
                $padding_desktop = get_field('padding_desktop');
                $icon_position   = get_field('icon_position');
                $icon_vertical_align = get_field('icon_vertical_align');

                $var_class_bg_black       = $block_color == 'is-black' ? 'white' : '';
                $var_class_color_black    = $block_color == 'is-black' ? 'text-white' : '';
                $var_class_color_op_black = $block_color == 'is-black' ? 'text-white op2' : '';
                ?>

            <section class="container is-left is-large <?php echo $block_color; if($padding_top > 0){ echo esc_html($padding_top);} ?>">

                <div class="container-inner">
                  <header class="content__title text-center">

                    <?php if( $categories ) : ?>

                      <div class="categories <?php echo $var_class_bg_black; ?>">
                        <?php echo $categories ?>
                      </div>

                    <?php endif;

                        echo '<' . esc_html($title_size) . ' class="mb-1 ' . $var_class_color_black . ' ">';
                          echo esc_html($title);
                        echo '</' . esc_html($title_size) .'>';

                        ?>

                    <?php if($subtitle): ?>

                      <div class="subtitle-small <?php echo $var_class_color_op_black; ?>">
                        <?php echo $subtitle ?>
                      </div>

                    <?php endif; ?>

                  </header>

                <div class="ly__grid-block is-block-<?php echo $columns; ?>__medium">

            <?php
                if($rows) :
                    foreach($rows as $row) :

                      $inner_title     =    $row['inner_title'];
                      $inner_paragraph =    $row['inner_paragraph'];
                      $box_style       =    $row['box_style'];
                      $icons           =    $row['icons'];
                      $text_color      =    $row['text_color'];
                      $image           =    $row['image'];
                      $link_inner            =    $row['link_inner'];
                        $link_inner_url        =    isset($link_inner['url']) ? $link_inner['url'] : '';
                        $link_inner_title      =    isset($link_inner['title']) ? $link_inner['title'] : '';
                   ?>
                    <div class="is-block">

                      <a href="<?php echo $link_inner_url; ?>"
                         title="<?php echo $link_inner_title; ?>"
                         class="<?php if( $box_style ){ echo 'box is-white ';  }?> <?php if($padding_mobile){ echo 'p-'.$padding_mobile.' '; } if($padding_desktop){ echo 'p-'.$padding_desktop.'__large'; } ?>">
<?php if($image) : ?>
  <figure class="mb-1">
    <?php echo wp_get_attachment_image( $image, 'full'); ?>
  </figure>
<?php endif; ?>
                        <div class="media h-100">
                          <?php if( $icons ): ?>

                            <div class="icon is-large media__<?php echo $icon_position.' '; echo $icon_vertical_align; ?>">
                              <img src="<?php echo $icons['url'] ?>" alt="<?php echo $icons['alt'] ?>">
                            </div>
                          <?php endif; ?>
                            <div class="media__content">


                                <?php if($inner_title): ?>
                                  <h6 class="mb-1 <?php echo $text_color ?>">
                                    <?php echo $inner_title; ?>
                                  </h6>
                                <?php endif; ?>

                                <div class="<?php echo $size_paragraph; ?>">
                                  <p><?php echo $inner_paragraph; ?></p>
                                </div>

                              </div>
                            </div>
                          </a>

                      </div>
                <?php endforeach; endif; ?>
                </div>

      <footer class="container-footer text-center">

                <?php if( $link ) : ?>
                	<a class="btn <?php echo $button_style.' '; echo $button_color?>"
                     href="<?php echo esc_url($link['url']); ?>"
                     target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                        <?php echo esc_html($link['title']); ?>
                  </a>

          <?php endif; ?>
      </footer>
  </div>
</section>
