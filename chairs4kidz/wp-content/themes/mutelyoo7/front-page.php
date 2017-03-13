<?php
/*
	Template Name: Front Page
*/
	get_header();
?>
<style type="text/css">
.slider{
	background:url(<?php echo $chairs4k['sb-image']['url']; ?>) center top;
	background-size:cover;
	min-height:625px;
}
</style>		
		
		
		<!-- Slider -->
		<section class="slider">
			<div class="slider-text">
				<h1><?php echo $chairs4k['slider-text'][1]; ?></h1>
				<h2><?php echo $chairs4k['slider-text'][2]; ?></h2>
				
				<div class="slider-button">
					<ul>
						<li class="button-blue"><a href="#"><?php echo $chairs4k['slider-text'][3]; ?></a></li>
						<li><a href="#"><?php echo $chairs4k['slider-text'][4]; ?></a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Slider -->
		
		
		<!-- Features -->
		<section class="features">
			<div class="container">
				<div class="row">
				
					<!-- Single Feature -->
					<?php
						$f_args	= array(
							'post_type'		=> 'feature-product',
							'posts_per_page'=> 4,
							'order'			=> 'ASC',
						);
						
						$f_data 	= new WP_Query($f_args);
						
						if($f_data->have_posts()):
							while($f_data->have_posts()): $f_data->the_post();
					?>
					<div class="col-md-3">
						<div class="single-feature">
							<div class="<?php echo get_post_meta(get_the_ID(), 'color-css', true); ?>">
								<i class="<?php echo get_post_meta(get_the_ID(), 'icon-css', true); ?>"></i>
							</div>
							<div class="feature-text">
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</div>
					
					<?php
							endwhile;
						endif;
					?>
					<!-- Single Feature -->
					
					
					
					
				</div>
			</div>
		</section>
		<!-- Features -->
		
		
		<!-- Featured Product -->
		<section class="featured-product">
			<div class="container">
				
				<!-- Title -->
				<div class="row">
					<div class="col-md-12">
						<div class="title-text">
							<h1>featured <span>products</span></h1>
						</div>
					</div>
				</div>
				<!-- Title -->
				
				<!-- Proudct Lists -->
				<div class="row">
				<?php
					$fp_args	= array(
						'post_type'					=> 'product',
						'product_cat'				=> 'featured',
						'posts_per_page'			=> 4,
					);
					
					$fp_data	= new WP_Query($fp_args);
					
					if($fp_data->have_posts()):
						while($fp_data->have_posts()): $fp_data->the_post(); global $product;
				?>
							<!-- Single Product -->
							<div class="col-md-6">
								<div class="single-product">
									<div class="product-image">
										<a href="<?php the_permalink(); ?>">
											<?php
											if(has_post_thumbnail($fp_data->post->ID)){
												echo get_the_post_thumbnail($fp_data->post->ID, 'front_product_image');
												//echo woocommerce_get_product_thumbnail('');
											}else{
											?>
											<img src="<?php echo woocommerce_placeholder_img_src(); ?>" alt="" />
											<?php
												}
											?>
										</a>
									</div>
									
									<div class="product-details">
										<div class="row no-padding">
											<div class="col-xs-8 no-padding">
												<div class="product-title">
													<a href="<?php the_permalink(); ?>">
														<h2><?php the_title(); ?></h2>
													</a>
												</div>
												<div id="element_add" class="add-to-cart">
													<?php woocommerce_template_loop_add_to_cart($fp_data->post, $product); ?>
												</div>
											</div>
											<div class="col-xs-4 no-padding">
												<div class="price">
													<h3><?php echo $product->get_price_html(); ?></h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product -->
				<?php 
						endwhile;
					endif;
					wp_reset_postdata();
				?>
					
					
					
					
				</div>
				<!-- Proudct Lists -->
			</div>
		</section>
		<!-- Featured Product -->
		
		
		
		<!-- Adz -->
		<section class="adz">
			<img src="<?php echo $chairs4k['offer-image']['url']; ?>" alt="" />
		</section>
		<!-- Adz -->


		
<?php
	get_footer();
?>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#element_add').each(function(){
        jQuery("#element_add a").addClass("btn btn-add-to-cart add_tag");
    });
	
	$(".add_tag").prepend("<i class='fa fa-shopping-cart'></i>");
	
});

</script>