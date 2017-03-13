<?php
/*
	Template Name: Contact Us
*/
	get_header();
	
	get_template_part('inc/page', 'header');
?>

	<!-- Contact Us -->
		<section class="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="contact-form">
							<?php 
								if(have_posts()) : while(have_posts()) : the_post();
							?>

							<?php the_content(); ?>


							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="contact-info">
							<div class="single-contact-box">
								<h4><i class="fa fa-map-marker"></i> Address:</h4>
								<p><?php echo $chairs4k['address']['1']; ?> <br /> <?php echo $chairs4k['address']['2']; ?></p>
							</div>
							
							<div class="single-contact-box">
								<h4><i class="fa fa-phone"></i> Phone:</h4>
								<p><?php echo $chairs4k['phone']['1']; ?></p>
							</div>
							
							<div class="single-contact-box">
								<h4><i class="fa fa-envelope "></i> Email:</h4>
								<p><?php echo $chairs4k['email']['1']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Us -->

<?php
	get_footer();
?>