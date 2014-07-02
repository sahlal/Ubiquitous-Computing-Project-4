



<?php
/*
Template Name: search-page
*/
?>



<?php get_header(); ?>



					<!-- content -->

					<div class="container">
						
						<div class="row">
							
							<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="jumbotron">
									<div class="container">



										<div class="row">
										<!-- Form to get the search term -->
										<form class="searchForm" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" >
											<div class="formFields col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="input-group">
											<span class="input-group-addon">Search</span>
											<input class="form-control" name="plantName" type="text" value="Plant Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Plant Name...';}">
											</div>
											</div>

											<div class="formFields col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<input class="btn" type="submit" value="Find!" >
										</div>
										</form>
									</div>






										<div class="plantRow row">


										<!-- *************** handles submitted form *************** -->
										<?php
										if ($_SERVER["REQUEST_METHOD"] == "POST"){	
														if(isset($_POST["plantName"])){
															$plantName = htmlspecialchars($_POST["plantName"]);
														}

													
														

										}
										?>
										<!-- ********************************************************************** -->







										










										<?php
										// query to be used in a loop through custom posts. exclusive for (plant_new). This will loop once since there is always one post
										$args = array( 'post_type' => 'plant_new', 'posts_per_page' => -1);
										$loop = new WP_Query( $args );

										// while loop to iterate through every post (in this case only 1) using previous query
										// purpose of this loop is to check wheather the search term exist in the Custom Fields that are contained withing the Custom Post Type
										while ( $loop->have_posts() ) : $loop->the_post();
											
											// if there is a search term posted
											if(isset($plantName)){
													



													if( have_rows('plants') ):
														while( have_rows('plants') ): the_row();

															similar_text(strtolower(get_sub_field('plant_name')), strtolower($plantName), $percent); 
															if($percent>90){
																
																$plantNameDashed = str_replace(" ", "-", get_sub_field('plant_name'));
																$plantNameDashed = str_replace("'", "", $plantNameDashed);
																?>

																		<div class="plantCol col-xs-12 col-sm-6 col-md-3 col-lg-3">
																			<a class="plantButton btn btn-default"  data-toggle="modal" href='#<?php echo $plantNameDashed; ?>'>
																			<img  class="img-responsive" src="<?php the_sub_field('plant_image'); ?>">
																			<p>Name: <?php the_sub_field('plant_name'); ?></p>
															    			<p>Temperature: <?php the_sub_field('plant_temperature'); ?></p>
															    			<p>Humidity: <?php the_sub_field('plant_humidity'); ?></p>
															    			</a>
																		</div>




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



																
																<?php
															}


														endwhile; 
													endif;




















											}

													

										endwhile;
										?>
























											</div>
									</div>									
									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>