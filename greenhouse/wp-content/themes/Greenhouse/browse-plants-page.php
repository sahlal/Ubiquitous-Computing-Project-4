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
										<h3 style="text-align:center;">Plants</h3>

										




										
										<div class="plantRow row">

												<?php if( have_rows('plants') ): ?>
					   								 <?php while( have_rows('plants') ): the_row(); ?>

					   								 <?php $plantNameDashed = str_replace(" ", "-", get_sub_field('plant_name')); ?>
					   								 <?php $plantNameDashed = str_replace("'", "", $plantNameDashed); ?>
					   								 


					   								 



											<div class="plantCol col-xs-12 col-sm-6 col-md-3 col-lg-3">
												<a class="plantButton btn btn-default"  data-toggle="modal" href='#<?php echo $plantNameDashed; ?>'>
												<img  class="img-responsive" src="<?php the_sub_field('plant_image'); ?>">
												<p>Name: <?php the_sub_field('plant_name'); ?></p>
								    			<p>Temperature: <?php the_sub_field('plant_temperature'); ?></p>
								    			<p>Humidity: <?php the_sub_field('plant_humidity'); ?></p>
								    			</a>
											</div>




											<!-- modal -->



											
											<div class="modal fade " id="<?php echo $plantNameDashed; ?>">
												<div class="modal-dialog ">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title"><?php the_sub_field('plant_name'); ?></h4>
														</div>
														<div class="modal-body">
															<?php the_sub_field('plant_description'); ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
					   								


					   								 
					   								 <!-- aksjhdkjashdkjas -->












											   		<?php endwhile; ?>
												<?php endif; ?>

										</div>











										
									</div>
										




									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>