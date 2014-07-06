<?php
/*
Template Name: announcment-page
*/
?>

<?php get_header(); ?>



					<!-- content -->

					<div class="container">
						
						<div class="row">
							
							<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="jumbotron">
									<div class="container">
										<div id="head3">Announcements</div>


										<?php

											
											query_posts('cat=announcments');
											while (have_posts()) : the_post();
											?>




											<div class="panel panel-success" style="background-color: #F5FFEF;border-color: #AEDA8A;">
											  <div class="panel-heading" style="background-color: #CDFF96;">
											    <h3 class="panel-title" style=" font-size: 13px; color: rgb(83, 158, 146); font-weight: bold;"><?php the_title(); ?></h3>
											  </div>
											  <div id = "panelb" class="panel-body">
											    <?php the_content();?>
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
