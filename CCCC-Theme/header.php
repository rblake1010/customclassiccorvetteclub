<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?> 

 	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightslider.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>  
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js"></script>




</head>

<body <?php body_class(); ?>>

<div class="navigationwrap">
   <div class="navigation">
 <?php wp_nav_menu(array('menu' => 'Main Mobile Nav Menu')); ?>
   </div><!-- end navigation -->
</div><!-- end navigationwrap -->
	
	<div class="wrapper">

		<div class="top">
        <?php wp_nav_menu(array('menu' => 'Top Nav Menu')); ?>             
    </div>
    <div class="header">
        <div class="container">
          <div class="row">
            <div class="logo four columns"><a href="http://customclassiccorvetteclub.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a></div>
            <div class="nav eight columns u-pull-right">             
                <?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>             
            </div>
          </div>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobileIcon.png" class="mobileIcon">
     </div>