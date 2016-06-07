<?php
/* Template Name: Contact Template
*/
?>

<?php get_header(); ?>
<div class="content space">
  <div class="container">
    <div class="row">
			<div class="entry six columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			</div>

			
	<?php endwhile; endif; ?>

	<?php get_sidebar(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>