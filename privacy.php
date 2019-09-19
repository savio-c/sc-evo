<?php get_header();
/* Template Name: Privacy */
?>




		<?php
		while ( have_posts() ) :
			the_post();?>

<div class="p-1 p-3__large">
  <?php the_content(); ?>
</div>


		<?php
		endwhile; // End of the loop.
		?>
<?php


 ?>


<?php get_footer(); ?>
