<?php
/* Template Name: FAQ Template
*/
?>

<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function() {

	$( "#accordion" ).accordion({
      heightStyle: "content",
      collapsible: true
    });

});

</script>
<div class="content space faq">
  <div class="container">
    <div class="row">
			<div class="entry six columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>


			<div id="accordion">

			<?php if(get_field('faq')): ?>          
          <?php while(has_sub_field('faq')): ?>
          	<h3><?php the_sub_field('question'); ?></h3> 
          	<div>          
           		<?php the_sub_field('answer'); ?>
            </div>       
          <?php endwhile; ?>         
          
        <?php endif; ?> 

			</div>


			
	<?php endwhile; endif; ?>

			</div>

<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>