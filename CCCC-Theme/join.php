<?php
/* Template Name: Join Template
*/
?>

<?php get_header(); ?>
<div class="content space join">
  <div class="container">
    <div class="row">
			<div class="entry">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			</div>

			
	<?php endwhile; endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>