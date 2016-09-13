<?php

/* Template Name: Home Page */

?>



<?php get_header(); ?>



  <?php if(get_field('Images')): ?>          

          <?php while(has_sub_field('Images')): ?>

            <div class="image">

            <a class="fancybox" rel="group" href="<?php the_sub_field('single-gallery-image'); ?> "><img src="<?php the_sub_field('single-gallery-image'); ?> "/></a>     

              </div>       

          <?php endwhile; ?>         

          

        <?php endif; ?>   



<section class="leader">

	<div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-speed="600" class="cycle-slideshow">

		

      <?php if(get_field('home_page_slider')): ?>          

          <?php while(has_sub_field('home_page_slider')): ?>            

           <img src="<?php the_sub_field('home_page_slides'); ?> "/>

                  

          <?php endwhile; ?>         

          

        <?php endif; ?>   



	</div>

</section>



<div class="quote" style="display:none">

  <div class="container">

  <div class="row">

    <div class="message nine columns offset-by-two">

        <div class="copy">

           <p class="title"><?php the_field('event_title'); ?></p>

           <p class="sub-title"><?php the_field('event_sub_title'); ?></p>

           <p><?php the_field('event_registration_details'); ?></p>

           <p><?php the_field('event_judging'); ?></p>

           <p><?php the_field('event_awards'); ?></p>

        </div>

         <div class="register-button" style="display:none">

           <a href="#"><?php the_field('event_button'); ?></a>

        </div>



    </div>



 



    </div>

  </div>

</div>



 <div class="intro">

  <div class="container">

    <div class="row">

      <div class="mission five columns">

        <h2><?php the_field('mission_title'); ?></h2>

        <?php the_field('mission_text'); ?>

      </div>

      <div class="vision five columns offset-by-two">

        <h2><?php the_field('vision_title'); ?></h2>

       <?php the_field('vision_text'); ?>

      </div>

    </div>

  </div>

</div>

<div class="friends">

  <h2>Our Friends</h2>

  <div class="slider">

    <ul id="friends">

     <?php if(get_field('friends')): ?>          

          <?php while(has_sub_field('friends')): ?>            

           <li><a href="<?php the_sub_field('friend_link'); ?>"><img src="<?php the_sub_field('friend_logos'); ?> "/></a> </li>                 

          <?php endwhile; ?>          

        <?php endif; ?>   

    </ul>

  </div>

</div>



<?php get_footer(); ?>