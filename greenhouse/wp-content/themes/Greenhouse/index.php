<?php get_header();
error_reporting(0);
 ?>


<?php
include (TEMPLATEPATH . '/php/retrieveStats.php');




?>
					<!-- content -->

					<div class="container">
						
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="jumbotron">
									<div class="container">
									<div style="text-align:center; margin-bottom: 27px;"> <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /></div>
										<div id="head3">Welcome to the  future greenhouse</div>

												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

													<?php  the_content( ); ?>

													<?php endwhile; else: ?>
													<?php endif; ?>
													
										


													<div id="head3"> <span class="glyphicon glyphicon-stats" style="color:black;"></span> 
														Current Statistics
													</div>
												<table class="table table-bordered">
													        <thead >
													          <tr>
													            
													            <th style="text-align:center"><span class="glyphicon glyphicon-fire"></span>  Temperature</th>
													            <th style="text-align:center"><span class="glyphicon glyphicon-tint"></span>  Humidity</th>
													            
													          </tr>
													        </thead>
													        <tbody>
													          <tr>
													            
													            <td style="text-align:center"><?php echo $getCurrentTemperatureResultVal; ?></td>
													            <td style="text-align:center"><?php echo $getCurrentHumidityResultVal; ?></td>
													            
													          </tr>
													         
													        </tbody>
												</table>

									</div>
								</div>
							</div>

							<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="jumbotron">
									<div class="container">
										<div id="head3">Announcements</div>


										<?php

											
											query_posts('cat=announcments&showposts=4');
											while (have_posts()) : the_post();
											?>




											<div class="panel panel-success" style="background-color: #F5FFEF;border-color: #AEDA8A;">
											  <div class="panel-heading" style="background-color: #CDFF96;">
											    <a href="../greenhouse/announcments/"><h3 style="text-decoration:underline; font-size: 13px; color: rgb(83, 158, 146); font-weight: bold;text-align: center;" class="panel-title"><?php the_title(); ?></h3></a>
											  </div>
											  <div id = "panelb" class="panel-body">
											    <?php 
//echo substr(strip_tags($post->post_content), 0, 10).'...';
the_content( ); 


?>
											  </div>
											</div>

										

											<?php
											endwhile;
											wp_reset_query();
											?>




									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>
