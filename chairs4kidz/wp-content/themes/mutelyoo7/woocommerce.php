<?php
	get_header();
	
	get_template_part('inc/page', 'header');
?>


<section class="content-area">
	<div class="container">
		<div class="row">
			<div id="woo_element_change" class="col-md-12">
				<?php
					woocommerce_content();
				?>
			</div>
		</div>
	</div>
</section>


<?php
	get_footer();
?>

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('div#woo_element_change a.button').each(function(){
        jQuery("div#woo_element_change a.button").addClass("add_tag_i");
    });
	
	$(".add_tag_i").prepend("<i class = 'fa fa-shopping-cart'></i>");
	
	$("div#woo_element_change .quantity").prepend("<label class='t_label'>Quantity:  </label>");
	
	jQuery("[itemprop=description]").addClass('short_desc');
	
	$('p.stock').before($('.quantity'));
	$("div#woo_element_change p.stock").prepend("<span>Availability:  </span>");
	
	$('.single_add_to_cart_button').after($('.wpsocial-social-icons-box'));
	$(window).on('load',function(){
		$(".social1").prepend("<h3>Share:  </h3>");
	});
});

</script>