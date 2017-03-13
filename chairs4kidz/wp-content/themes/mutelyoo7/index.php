<?php
/**
 * The main template file
 *
*/
	get_header();
	
	get_template_part('inc/page', 'header');
?>
	
	<!-- Blog -->
	<section class="blog">
		<div class="container">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$p_args		= array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 12,
					'paged'				=> $paged,
				);
				
				$p_data		= new WP_Query($p_args);
				if($p_data->have_posts()):
				
				while($p_data->have_posts()): $p_data->the_post();
			?>
			
			<!-- Single Blog -->
			<div class="row blog-margin">
				<!-- Single Blog -->
				<div class="col-md-6">
					<div class="blog-image">
						<?php
							if(has_post_thumbnail($post->ID)){
								echo get_the_post_thumbnail($post->ID, 'blog_post_image');
							}
						?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="blog-text">
						<div class="heading">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
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
							<p><?php echo wp_trim_words(get_the_content(), 100); ?></p>
						</div>
						
						<div class="read-more-btn">
							<a href="<?php the_permalink(); ?>" class="btn btn-read-more">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- Single Blog -->
			</div>
			<!-- Single Blog -->
		<?php		
				endwhile;
			endif;
		?>
		</div>
	</section>
				
		<!-- Pagination -->
		<section class="pagination">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="pagi-line"></div>
						
						<div class="pagi">
							<?php 
								the_posts_pagination(array(
									'type'				=> 'list',
									'mid_size'          => 2,
									'prev_text' 		=> '<i class="fa fa-long-arrow-left"></i>',
									'next_text'			=> '<i class="fa fa-long-arrow-right"></i>',
									'screen_reader_text'=> ' ',
								));
								
							?>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- Pagination -->

<?php
	get_footer();
?>