<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
?>

</section>

    <!-- Footer	================================================== -->
	<footer id="footer">
	  <div class="container">
	  	<?php wp_footer(); ?>
	  	<div class="row">
		    <div class="span4">
				<a class="brand" href="index.html">
					PTP NoVa
				</a>
				<p>
					Providing in home physical therapy evaluation and treatment.
				</p>
			</div>
			<div class="span4 social-networks">
				<h3>Find us elsewhere</h3>
				<p>
					<a class="social-network twitter"></a>
					<a class="social-network facebook" href="https://www.facebook.com/PediatricTherapyPartnersOfNova"></a>
					<a class="social-network linkedin" href="http://www.linkedin.com/profile/view?id=10570030&locale=en_US&trk=tyah"></a>
					<!-- <a class="social-network pinterest"></a> -->
				</p>
			</div>
			<div class="span4 newsletter">
				<h3>Newsletter</h3>
				<p>Subscribe to our monthly newsletter and be the first to know about our news and special deals!</p>
				<img class="ajax-loader" src="/wp-content/themes/ptp_nova_theme/img/ajax-loader.gif" alt="">
				<form method="post" id="newsletter-form">
					<input type="text" placeholder="Enter your E-mail" name="subscribe">
					<input type="hidden" name="bot"><!-- SPAM protection -->
					<button type="submit" class="icon-ok" id="newsletter-subscribe"></button>
				</form>
			</div>						
		</row>	
	  </div>
	</footer>

	<footer id="copyright">
		<div class="container">
			<div class="row">
				<div class="span4">
			      &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
				</div>
			    <div class="span4">
	              <a href="mailto:chrissy@ptpnova.com">chrissy@ptpnova.com</a>
				</div>
			    <div class="span4">
			      <span style="color:white;">
	              571.212.6145 (cell)
	              <br>
	              888.750.4126 (fax)
	              </span>
				</div>
			</div>	
		</div>
	</footer>

	<!--  </div> for what ?? container -- deleted -->


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<!-- Javascript - Placed at the end of the document so the pages load faster 
================================================== -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.hotkeys.min.js" charset='utf-8'></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
	
</body>

</html>
