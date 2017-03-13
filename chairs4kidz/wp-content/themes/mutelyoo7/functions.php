<?php

function chairs4kidz_setup(){
	
	add_theme_support('title');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );
	
	add_theme_support('woocommerce');
	add_image_size('front_product_image', 555, 507, true);
	add_image_size('blog_post_image', 555, 507, true);
	add_image_size('single_post_image', 1140, 507, true);
	add_image_size('custom_product_image', 360, 330, true);
	add_image_size('custom_psingle_image', 555, 555, true);
	add_image_size('custom_pthumbnail_image', 168, 168, true);
	
	load_theme_textdomain('c4k', get_template_directory_uri().'/languages');
	
	
	if(function_exists('register_nav_menu')){
		register_nav_menu('main-menu', __('Main Menu', 'c4k'));
	}
	
	register_post_type('feature-product', array(
		'labels'		=> array(
				'name'		=> 'Feature Product',
				'add_new'	=> 'Add New Feature Product Item',
		),
		'public'		=> true,
		'supports'		=> array('title', 'custom-fields'),
	));
	
	register_post_type('testimonial', array(
		'labels'		=> array(
				'name'		=> 'Testimonial',
				'add_new'	=> 'Add New Testimonial',
		),
		'public'		=> true,
		'supports'		=> array('title', 'editor', 'custom-fields'),
	));
	
}
add_action('after_setup_theme', 'chairs4kidz_setup');


/* function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   //remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' ); */

function css_and_js_enqueue(){
	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css');
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_register_style('owlcarousel', get_template_directory_uri().'/css/owl.carousel.css');
	wp_register_style('owltheme', get_template_directory_uri().'/css/owl.theme.css');
	wp_register_style('lightboxcss', get_template_directory_uri().'/css/lightbox.min.css');
	wp_register_style('maincss', get_template_directory_uri().'/css/main.css');
	wp_register_style('m-style', get_template_directory_uri().'/css/style.css');
	wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_register_style('style', get_template_directory_uri().'/style.css');
	
	wp_register_script('jquery-min', get_template_directory_uri().'/js/vendor/jquery-1.12.0.min.js');
	wp_register_script('modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.8.3.js');
	wp_register_script('plugins', get_template_directory_uri().'/js/plugins.js');
	wp_register_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_register_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js');
	wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.min.js');
	wp_register_script('main', get_template_directory_uri().'/js/main.js');
	
	
	wp_enqueue_style(array('normalize', 'bootstrap', 'font-awesome', 'owlcarousel', 'owltheme', 'lightboxcss', 'maincss', 'm-style', 'responsive', 'style'));
	wp_enqueue_script(array('jquery-min', 'modernizr', 'plugins', 'bootstrap-js', 'owl-carousel', 'lightbox', 'main'));
	
}
add_action('wp_enqueue_scripts', 'css_and_js_enqueue');



require_once("redux/ReduxCore/framework.php");
require_once("redux/sample/config.php");



add_filter('add_to_cart_fragments', 'woocommerceframework_header_add_to_cart_fragment');
function woocommerceframework_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
 
	ob_start();
?>

	<span class="item"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woocommerce'), $woocommerce->cart->cart_contents_count); ?></span>
	<?php
 
	$fragments['span.item'] = ob_get_clean();
 
	return $fragments;
 
}

add_filter( 'woocommerce_page_title', 'custom_woocommerce_page_title');
function custom_woocommerce_page_title( $page_title ) {
  if( $page_title == 'Shop' ) {
    return "Products Lists";
  }
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3;
	}
}


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

/*function envy_stock_catalog() {
    global $product;
    if ( $product->is_in_stock() ) {
        echo '<div class="stock" >' . $product->get_stock_quantity() . __( ' in stock', 'c4k' ) . '</div>';
    } else {
        echo '<div class="out-of-stock" >' . __( 'out of stock', 'c4k' ) . '</div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'envy_stock_catalog' );*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
	
    unset( $tabs['additional_information'] );

    return $tabs;

}

/*function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'View Cart' :
            $translated_text = "<i class='fa fa-shopping-cart'></i>";
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );*/

/* add_filter( 'body_class', 'my_custom_body_classes' );
function my_custom_body_classes( $classes ) {
	if ( is_search() ){
		$classes[] = 'woocommerce'; // show products properly on the search page
	}
	return $classes;
} */

function remove_page_cat($query){
	if($query->is_search){
		$query->set('post_type', 'product');
	}
	return $query;				
}
add_filter('pre_get_posts', 'remove_page_cat');



/*
 * Hook in on activation
 *
 */
add_action( 'init', 'yourtheme_woocommerce_image_dimensions', 1 );

/**
 * Define image sizes
 */
function yourtheme_woocommerce_image_dimensions() {
  	$catalog = array(
		'width' 	=> '360',	// px
		'height'	=> '330',	// px
		'crop'		=> 1 		// true
	);

	$single = array(
		'width' 	=> '555',	// px
		'height'	=> '555',	// px
		'crop'		=> 1 		// true
	);

	$thumbnail = array(
		'width' 	=> '168',	// px
		'height'	=> '168',	// px
		'crop'		=> 1 		// true
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}

?>

