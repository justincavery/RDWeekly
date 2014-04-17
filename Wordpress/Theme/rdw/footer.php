		<footer id="content-info" role="contentinfo" class="footer">
			<div class="row">
				<div class="four columns">
					<h4>Newsletter</h4>
						<ul>
						<li><?php bloginfo('name'); ?> is curated by <a href="http://surfthedream.com.au">Justin Avery</a></li>
						<li>Hosted on <a href="http://www.mediatemple.net/go/order/?refdom=javerydesign.com">Media Temple (mt)</a></li>
						<li><a href="http://responsivedesignweekly.com/advertise">Advertise</a></li>
</ul>
			</div>
			<div class="four columns">
				<h4>Related Projects</h4>
				<ul>
					<li><a href="http://ami.responsivedesign.is">Am I Responsive</a></li>
					<li><a href="http://www.responsivedesign.is">Responsive Design</a></li>
					<li><a href="http://bradfrost.github.com/this-is-responsive/">This is Responsive</a></li>
				</ul>
			</div>
							<div class="four columns">
			<h4>Social</h4>
			<ul>
			
			<li><a href="http://www.twitter.com/reswebdes">Twitter</a></li>
			<li><a href="http://www.facebook.com/responsivewebdesigns">Facebook</a>
			</li>
			<li>
				 <a href="https://plus.google.com/communities/112867995432241285199">Google+</a>
			</li>
			</ul>
			</div>

		</footer>
			
	</div><!-- Container End -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<!-- Included JS Files of Foundation -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
<!--	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> -->
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fittext.js"></script>
 <script type="text/javascript">   
   var $rwdsize = window.getComputedStyle(document.body,':after').getPropertyValue('content');
   var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
   </script>
 
	
<script>
  jQuery("#responsive_headline").fitText(1.8);
</script>

	<?php wp_footer(); ?>
</body>
</html>