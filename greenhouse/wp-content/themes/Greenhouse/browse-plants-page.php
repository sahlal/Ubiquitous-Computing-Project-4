<?php
/*
Template Name: browse-plants-page
*/
?>

<?php get_header(); ?>



					<!-- content -->

					<div class="container">
						
						<div class="row">
							
							<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="jumbotron">
									<div class="container">
										<h3>Plants</h3>

											<?php if( have_rows('plants') ): ?>
					    <?php while( have_rows('plants') ): the_row(); ?>
					 
					    	<div class="row">
					    		
					    	

					    	<div class="plantDetails col-xs-6 col-sm-6 col-md-6 col-lg-6">
					    			<div class="plantImage">
					    			<img class="img-responsive" src="<?php the_sub_field('plant_image'); ?>">
					    			</div>

					    			<div class="plantDisc">
					    			<p><?php the_sub_field('plant_name'); ?></p>
					    			<p><?php the_sub_field('plant_temperature'); ?></p>
					    			<p><?php the_sub_field('plant_humidity'); ?></p>
					    		</div>
							</div>








					    	<div class="plantDetails col-xs-6 col-sm-6 col-md-6 col-lg-6">
					    			<div class="plantImage">
					    			<img class="img-responsive" src="<?php the_sub_field('plant_image'); ?>">
					    			</div>

					    			<div class="plantDisc">
					    			<p><?php the_sub_field('plant_name'); ?></p>
					    			<p><?php the_sub_field('plant_temperature'); ?></p>
					    			<p><?php the_sub_field('plant_humidity'); ?></p>
					    		</div>
							</div>


							</div>










							

									

									

								






					        
					        
					        


					    <?php endwhile; ?>
					<?php endif; ?>
										




									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>