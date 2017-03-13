<?php
	get_header();
	
	get_template_part('inc/page', 'header');
?>


<section class="content-area">
	<div class="container">
		<div class="row">
		<div id="element_change" class="col-md-12">
		<?php
			if(have_posts()):
				while(have_posts()): the_post();
				
					
		?>
			
			
				<?php the_content(); ?>
				
			
		<?php
				endwhile;
			endif;
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
		jQuery('#element_change').each(function(){
			jQuery("#element_change div.woocommerce").addClass("cart-table");
			jQuery("#element_change table").addClass("table table-bordered");	
		});
	});
</script>