<?php
/* Template Name: Gallery Inside Template
*/
?>

<?php get_header();

$args = [
    'numberposts' => -1,
    'post_type'   => "photo-gallery",
    'orderby' => array('id' => 'asc'),
    'sort_order'  => 'asc'
];

$the_query = new WP_Query( $args );

?>


<div class="content space photo-gallery">
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