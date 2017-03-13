<?php
get_header();

get_template_part('inc/page', 'header');

?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
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


</article>
<?php

get_footer();
?>