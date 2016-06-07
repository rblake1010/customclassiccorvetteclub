<?php
/* Template Name: History Template
*/
?>

<?php get_header(); ?>

  <div class="container"> 
    <div class="row">
			<div class="entry">
			<img src="<?php the_field('history_photo'); ?>" class="ourHistory" />


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?> 
		
			</div>

			
	<?php endwhile; endif; ?>

		</div>
	</div>


<?php get_footer(); ?>