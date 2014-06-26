

<?php get_header(); ?>



					<!-- content -->

					<div class="container">
						
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="jumbotron">
									<div class="container">
										<h3>General information</h3>

												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

													<?php  the_content( ); ?>

													<?php endwhile; else: ?>
													<?php endif; ?>


									</div>
								</div>
							</div>

							<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="jumbotron">
									<div class="container">
										<h3>Announcments</h3>


										<?php

											
											query_posts('cat=announcments&showposts=4');
											while (have_posts()) : the_post();
											?>




											<div class="panel panel-success">
											  <div class="panel-heading">
											    <a href="/greenhouse/announcments/"><h3 class="panel-title"><?php the_title(); ?></h3></a>
											  </div>
											  <div class="panel-body">
											    <?php echo substr(strip_tags($post->post_content), 0, 10).'...';?>
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