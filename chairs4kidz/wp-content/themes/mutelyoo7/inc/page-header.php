<?php
global $chairs4k;
?>

<style type="text/css">
.breadcamp{
	background:url(<?php echo $chairs4k['page-header-img']['url']; ?>) no-repeat center center;
	background-size:cover;
	min-height:218px;
	width: 100%;
	background-color:#434a54;
}
</style>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Breadcamp -->
		<section class="breadcamp">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tablebreadcrump">
							<div class="breadcamp-title">
								<h3><?php WP_title('', true); ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="breadcamp-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
						<?php
						
							if(! is_single() && !is_search()){
														
						?>
								<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
								<li class="active"><a href="<?php  ?>"><?php echo WP_title('', true); ?></a></li>
						<?php 
							}
							else if( is_single() && ! is_woocommerce() ){
						?>
								<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_title(get_the_title(get_option('page_for_posts', true))))); ?>"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></a></li>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
							}
							else if( is_single() && is_woocommerce() ){
								$shop_page_id = wc_get_page_id( 'shop' );
						?>	
								<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_title(get_the_title($shop_page_id)))); ?>"><?php echo get_the_title($shop_page_id); ?></a></li>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
							}
							else if( is_search() ){
								$shop_page_id = wc_get_page_id( 'shop' );
						?>	
								<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
								<li><a href="<?php echo esc_url(get_permalink(get_page_by_title(get_the_title($shop_page_id)))); ?>"><?php echo get_the_title($shop_page_id); ?></a></li>
								<li class="active"><a href="<?php the_permalink(); ?>"><?php WP_title('', true); ?></a></li>
						<?php
							}
						?>
							
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcamp -->