	<?php
		global $chairs4k;
	?>
	<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-content">
							<div class="footer-logo">
								<a href="<?php bloginfo('home'); ?>"><img src="<?php echo $chairs4k['footer-logo']['url']; ?>" alt="" /></a>
							</div>
							
							<div class="footer-text">
								<ul>
									<li><span><i class="fa fa-map-marker"></i> </span> <?php echo $chairs4k['contact-text']['1']; ?></li>
									<li><span><i class="fa fa-phone"></i> </span> <?php echo $chairs4k['contact-text']['2']; ?></li>
									<li><span><i class="fa fa-envelope"></i> </span> <?php echo $chairs4k['contact-text']['3']; ?></li>
								</ul>
							</div>
							
							
							<!-- Social Media-->
							<div class="social-media social-media-footer">
								<ul>
									<li><a href="<?php echo $chairs4k['social-icon']['1']; ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['2']; ?>"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['3']; ?>"><i class="fa fa-instagram"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['4']; ?>"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['5']; ?>"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
							<!-- Social Media-->
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright-text">
								<p><?php echo $chairs4k['footer-text']['1']; ?></p>
							</div>
						</div>
						
						<div class="col-md-6">
							<?php 
								if(function_exists('wp_nav_menu')){
									wp_nav_menu( array(
										'container_class'	=> 'footer-menu',
										)
									);
								}
							?>
							<!--<div class="footer-menu">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>-->
						</div>
					</div>
				</div>
			</div>
			
		</footer>
		<!-- footer -->


		
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		<?php wp_footer(); ?>
    </body>
</html>
