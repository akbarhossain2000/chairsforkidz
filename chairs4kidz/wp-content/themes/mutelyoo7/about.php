<?php
/*
	Template Name: About US
*/
get_header();

get_template_part('inc/page', 'header');
?>

		<!--- about us -->
		<section class="about-us">
		<?php
			if(have_posts()):
				while(have_posts()): the_post();
		?>
			<div class="container">
			
				<!-- About Image -->
				<div class="row">
					<div class="col-md-12">
						<div class="about-image">
							<?php
								if(has_post_thumbnail($post->ID)){
									the_post_thumbnail();
								}
							?>
						</div>
					</div>
				</div>
				<!-- About Image -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="about-text">
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php
				endwhile;
			endif;
		?>
		</section>
		<!--- about us -->
		
		
		<!-- Happy Customer -->
		<section class="testimonials">
			<div class="row">
				<div class="container">
					<div class="col-md-12">
						<div class="testimonial-title">
							<h2>Happy Customer</h2>
						</div>
						
						<div id="owl-example" class="owl-carousel">
						<?php
							$h_args		= array(
								'post_type'			=> 'testimonial',
								'posts_per_page'	=> 3,
							);
							
							$h_data		= new WP_Query($h_args);
							
							if($h_data->have_posts()):
								while($h_data->have_posts()): $h_data->the_post();
						?>
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<p><?php the_content(); ?></p>
								<div class="client-info">
									<span><strong><?php the_title(); ?>,</strong> <?php echo get_post_meta(get_the_ID(), 'designation', true); ?>, <?php echo get_post_meta(get_the_ID(), 'company_name', true); ?></span>
								</div>
							</div>
							<!-- Single Testimonial -->
						<?php
								endwhile;
							endif;
							wp_reset_postdata();
						?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Happy Customer -->
	</article>	
<?php
get_footer();
?>