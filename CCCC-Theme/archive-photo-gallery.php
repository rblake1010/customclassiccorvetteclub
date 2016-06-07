<?php get_header(); ?>

<div <?php post_class() ?>>
					<div class="photo-gallery space">      
			      <div class="container">
			        <div class="row">

			        <h2>Photo Gallery</h2>

		<?php if (have_posts()) : ?>
			
		<div class="parent">
			<?php while (have_posts()) : the_post(); ?>
			
				
	        <div class="image">
						 <a href="<?php the_permalink() ?>">	
							 <?php if( get_field('gallery_image') ): ?>
		           <img class="name" src="<?php the_field('gallery_image'); ?>" />
		           <?php endif; ?>
	           </a>
	           <span id="post-<?php the_ID(); ?>"><i><?php the_title(); ?></i></span>
					</div>		
						

			<?php endwhile; ?>
		</div>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

						</div>
					</div>
				</div>
			</div>


<?php get_footer(); ?>