<?php get_header(); ?>





		<?php
		while ( have_posts() ) :
			the_post();?>

<div class="">
  <?php the_content(); ?>
</div>


		<?php
		endwhile; // End of the loop.
		?>


<?php get_footer(); ?>
