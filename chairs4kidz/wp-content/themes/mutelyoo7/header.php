<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		
		<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
		
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<?php
			global $chairs4k;
			
			global $woocommerce;
		?>
		
		<!-- Header Start -->
		<header>
			
			<!-- Top Strip -->
			<div class="top-strip"></div>
			<!-- Top Strip -->
			
			
			<div class="header-blue">
				<div class="container">
					
					<!-- Logo Bar -->
					<div class="row logo-bar">
						<div class="col-md-3">
							<div class="logo">
								<a href="<?php bloginfo('home'); ?>"><img src="<?php echo $chairs4k['logo']['url']; ?>" alt="Chairs 4 Kidz" /></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="search">
								<form role="search" method="get" class="form-horizontal" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="woocommerce-product-search-field"><?php _e( 'Search:', 'woocommerce' ); ?></label>
										<div class="col-sm-10">
											<input type="text" id="woocommerce-product-search-field" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search Product:', 'label', 'woocommerce' ); ?>" />
											
											<input type="hidden" name="post_type" value="product" />
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
						
							<!-- Social Media-->
							<div class="social-media">
								<ul>
									<li><a href="<?php echo $chairs4k['social-icon']['1']; ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['2']; ?>"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['3']; ?>"><i class="fa fa-instagram"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['4']; ?>"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="<?php echo $chairs4k['social-icon']['5']; ?>"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
							<!-- Social Media-->
							
							<div class="cart">
								<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
									<button class="btn btn-default"><i class="fa fa-shopping-bag"></i> <span>Cart: <span class="item"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woocommerce'), $woocommerce->cart->cart_contents_count); ?></span></span> <span><i class="fa fa-caret-down"></i></span></button>
								</a>
							</div>
							
							
						</div>
					</div>
					<!-- Logo Bar -->
					
					
					<!-- Menu Bar -->
					<div class="row">
						<div class="col-md-12">
						<?php
							if(function_exists('wp_nav_menu')){
								wp_nav_menu(array(
									'container_class'	=> 'main-menu',
									'link_before'		=> '<span><i></i> </span> ',
								));
							}
						?>
							<!--<div class="main-menu">
								<ul>
									<li><a href=""><span><i class="fa fa-home"></i> </span> Home</a></li>
									<li><a href=""><span><i class="fa fa-info-circle"></i> </span> About Us</a></li>
									<li><a href=""><span><i class="fa fa-lightbulb-o"></i> </span> Products</a></li>
									<li><a href=""><span><i class="fa fa-newspaper-o"></i> </span> Blog</a></li>
									<li><a href=""><span><i class="fa fa-home"></i> </span> Contact Us</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<!-- Menu Bar -->
					
					
				</div>
			</div>
			
		</header>
		<!-- Header End -->
		