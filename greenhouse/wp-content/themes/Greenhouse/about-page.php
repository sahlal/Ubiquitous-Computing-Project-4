<?php
/*
Template Name: about-page
*/
?>

<?php get_header(); ?>



					<!-- content -->

					<div class="container">
						
						<div class="row">
							
							<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="jumbotron">
									<div class="container">
										<h3>About Us</h3>


										<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

													<?php  the_content( ); ?>

													<?php endwhile; else: ?>
													<?php endif; ?>




									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>