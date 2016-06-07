<?php
/* Template Name: Inside Template
*/
?>

<?php get_header(); ?>
<div class="content space">
  <div class="container">
    <div class="row">
			<div class="entry">
			 <?php if( get_field('history_photo') ): ?>
				<img src="<?php the_field('history_photo'); ?>" class="ourHistory" />
			<?php endif; ?> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="history-content">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			</div>
			</div>

			
	<?php endwhile; endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>