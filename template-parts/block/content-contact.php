<?php

    $categories            =  get_field('categories');
    $title                 =  get_field('title');
    $subtitle              =  get_field('subtitle');
    $block_color           =  get_field('block_color');
    $title_size            =  get_field('title_size');
    $id_form               =  get_field('id_form');
    $shortcode_form        =  do_shortcode('[contact-form-7 id="' . $id_form . '" title="Richiesta informazioni"]');
    ?>


<section class="container box-alternate-small is-large <?php echo $block_color ?>">
      <div class="container-inner">

          <header class="content__title text-center">

            <?php if( $categories ) : ?>

              <div class="categories">
                <?php echo $categories ?>
              </div>

            <?php endif;
                echo '<' . esc_html($title_size) . ' class="mb-1">';
                  echo esc_html($title);
                echo '</' . esc_html($title_size) .'>';
                ?>

            <?php if($subtitle): ?>
              <div class="subtitle-small">
                <?php echo $subtitle ?>
              </div>
            <?php endif; ?>
          </header>

          <div class="ml-3__medium mr-3__medium">
            <!-- form CF7 -->

          <?php if($id_form): ?>
            <?php echo $shortcode_form; ?>
          <?php endif; ?>
          </div>
      </div>
  </section>
