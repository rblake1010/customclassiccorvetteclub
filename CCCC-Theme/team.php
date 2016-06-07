<?php

/* Template Name: Team Members Template

*/

?>



<?php get_header(); ?>

<div class="content space">

  <div class="container">

    <div class="row">

			<div class="entry">

			 

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						

			<h2><?php the_title(); ?></h2>

		

			<?php if(get_field('members')): ?>  

						<?php while(has_sub_field('members')): ?>
							
					<div class="profile">			

				<div class="profile-image four columns">				

				<img src="<?php the_sub_field('picture'); ?>" alt="">						

				</div>

				<div class="profile-content seven columns">

				<h3 class="name"><?php the_sub_field('name'); ?></h3>

				<p><strong>Nickname:</strong> <?php the_sub_field('position'); ?></p>				

				<p><strong>Member Since:</strong><?php the_sub_field('member-since'); ?></p>

				<p><strong>Car:</strong><?php the_sub_field('car'); ?></p>

				<p><strong>Hobbies:</strong><?php the_sub_field('hobbies'); ?></p>

				<p><?php the_sub_field('bio'); ?></p>

				</div>
			</div>

				<?php endwhile; ?>

 				<?php endif; ?> 	

			





			<?php the_content(); ?>

			

			</div>



			

	<?php endwhile; endif; ?>



		</div>

	</div>

</div>



<?php get_footer(); ?>