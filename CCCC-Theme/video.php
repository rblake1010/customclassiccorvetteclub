<?php
/* Template Name: Video Template
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="video-gallery space">       
				 <div class="container">
						<div class="row">
			
			<h2><?php the_title(); ?></h2>
						
			<?php
			/* 
			 * Paginate Advanced Custom Field repeater
			 */

			if( get_query_var('page') ) {
				$page = get_query_var( 'page' );
			} else {
				$page = 1;
			}

			// Variables
			$row              = 0;
			$images_per_page  = 9; // How many images to display on each page
			$images           = get_field( 'video-upload' );
			$total            = count( $images );
			$pages            = ceil( $total / $images_per_page );
			$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
			$max              = ( $min + $images_per_page ) - 1;

			// ACF Loop
			if( have_rows( 'video-upload' ) ) : ?>
				<div class="parent">
					<?php while( have_rows( 'video-upload' ) ): the_row();

						$row++;

						// Ignore this image if $row is lower than $min
						if($row < $min) { continue; }

						// Stop loop completely if $row is higher than $max
						if($row > $max) { break; } ?>                     
						
					 <div class="image video">
						<?php the_sub_field('single_video_upload'); ?>
					 </div>  

					<?php endwhile; ?>
				</div>
				
				<div class="pagination">
					<?php
					// Pagination
					echo paginate_links( array(
						'base' => get_permalink() . '%#%' . '/',
						'format' => '?page=%#%',
						'current' => $page,
						'total' => $pages
					) );
					?>
				</div>

			<?php else: ?>

				No images found

			<?php endif; ?>			
			</div>
		</div>
	</div>			
</div>


	<?php endwhile; endif; ?>
	


<?php get_footer(); ?>