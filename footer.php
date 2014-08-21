<div class="footer">
	<div class="innerWrapper">
    <p>&copy; Your Name Here <?php echo date('Y'); ?></p>
    <?php wp_footer(); ?>
  </div>
</div>

<script>

/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
  <!-- Load jQuery and our own scripts file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
</body>
</html>