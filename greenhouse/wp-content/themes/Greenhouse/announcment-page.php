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
										<h3 style="text-align:center;">Announcments</h3>


										<?php

											
											query_posts('cat=announcments');
											while (have_posts()) : the_post();
											?>




											<div class="panel panel-success">
											  <div class="panel-heading">
											    <h3 class="panel-title"><?php the_title(); ?></h3>
											  </div>
											  <div class="panel-body">
											    <?php the_content();?>
											  </div>
											</div>

											






											<?php
											endwhile;
											wp_reset_query();
											?>



<?php
$args = array( 'post_type' => 'plant_new', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<h2><?php the_title(); ?></h2>
<div class="entry-content">

<?php the_content(); ?>
</div>
<?php wp_reset_postdata(); ?>

<?php endwhile; ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



									</div>
								</div>
							</div>
						</div>

					</div>


<?php get_footer(); ?>