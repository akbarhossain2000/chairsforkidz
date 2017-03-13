<?php

get_header();

get_template_part('inc/page', 'header');
?>		
<?php
	if(have_posts()):
		while(have_posts()): the_post();
?>
		<!-- Blog -->
		<section class="blog">
			<div class="container">
				<!-- Single Blog -->
				<div class="row blog-margin">
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="blog-image">
							<?php
								if(has_post_thumbnail($post->ID)){
									echo get_the_post_thumbnail($post->ID, 'single_post_image');
								}
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="blog-text">
							<div class="heading">
								<?php
									the_title('<h3>', '</h3>');
								?>
							</div>
							<div class="blog-info">
								<ul>
									<li><i class="fa fa-user"></i>  <?php the_author(); ?></li>
									<li><i class="fa fa-calendar "></i>  <?php the_time('d M, Y'); ?></li>
									<li><i class="fa fa-comments "></i>  <?php echo get_comments_number(); ?> Comments</li>
								</ul>
							</div>
							<div class="blog-line"></div>
							
							<div class="blog-main-text">
								<p><?php the_content(); ?></p>
							</div>
							
						</div>
					</div>
					<!-- Single Blog -->
				</div>
				<!-- Single Blog -->
			</div>	
		</section>
	</article>
	
	<section class="comment">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
				</div>
			</div>
		</div>
	</section>
<?php
	endwhile;
	endif;
?>				
				
<?php
	get_footer();
?>
