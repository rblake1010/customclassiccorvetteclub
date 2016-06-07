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

			<div class="profile">

			<?php if(get_field('members')): ?>  

						<?php while(has_sub_field('members')): ?>

				<div class="profile-image four columns">				

				<img src="http://www.wealthcg.com/sites/default/files/users/wealthconsultinggroup/images/placeholder-male.png" alt="">						

				</div>

				<div class="profile-content seven columns">

				<h3><?php the_sub_field('position'); ?></h3>

				<p class="name"><?php the_sub_field('name'); ?></p>

					<p><?php the_sub_field('bio'); ?></p>

				</div>

				<?php endwhile; ?>

 				<?php endif; ?> 	

			</div>





			<?php the_content(); ?>

			

			</div>



			

	<?php endwhile; endif; ?>



		</div>

	</div>

</div>



<?php get_footer(); ?>