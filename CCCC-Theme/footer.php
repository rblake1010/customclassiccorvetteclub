<div class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="eight columns offset-by-two">
	        <div class="footerLogo five columns"><a href="http://customclassiccorvetteclub.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoFooter.png"></a>
	          <p>Copyright 2016 Custom Classic Corvette Club. All Rights Reserved</p>
	        </div>
	        <div class="footerNav three columns offset-by-one">
	          <h3>Navigation</h3>
	          <?php wp_nav_menu(array('menu' => 'Footer Nav Menu')); ?>    
	        </div>
	        <div class="socialNav three columns">
	          <h3>Social</h3>
	          <?php wp_nav_menu(array('menu' => 'Social
	           Nav Menu')); ?>    
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75268510-1', 'auto');
  ga('send', 'pageview');

</script>
	
</body>

</html>