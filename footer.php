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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory');?>/js/jQuery.js"><\/script>')</script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
	<script>
		$(document).ready(function() {
			// navigation click actions	
			$('.scroll-link').on('click', function(event){
				event.preventDefault();
				var sectionID = $(this).attr("data-id");
				scrollToID('#' + sectionID, 750);
			});
			// scroll to top action
			$('.scroll-top').on('click', function(event) {
				event.preventDefault();
				$('html, body').animate({scrollTop:0}, 'slow'); 		
			});
			// mobile nav toggle
			$('#nav-toggle').on('click', function (event) {
				event.preventDefault();
				$('#main-nav').toggleClass("open");
			});

			//sticky header
			$(window).scroll(function() {

			    if ($(window).scrollTop() > 500) {
			        $('header').addClass('sticky');
			    } else {
			        $('header').removeClass('sticky');
			    }
			});
		});
		// scroll function
		function scrollToID(id, speed){
			var offSet = 50;
			var targetOffset = $(id).offset().top - offSet;
			var mainNav = $('#main-nav');
			$('html,body').animate({scrollTop:targetOffset}, speed);
			if (mainNav.hasClass("open")) {
				mainNav.css("height", "1px").removeClass("in").addClass("collapse");
				mainNav.removeClass("open");
			}
		}
		if (typeof console === "undefined") {
		    console = {
		        log: function() { }
		    };
		}

	</script>
</body>
</html>