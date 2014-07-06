



<?php
/*
Template Name: search-page
*/
?>



<?php get_header(); ?>

<script type="text/javascript">
var gCtx = null;
	var gCanvas = null;

	var imageData = null;
	var ii=0;
	var jj=0;
	var c=0;
	
	
function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}
function drop(e) {
  e.stopPropagation();
  e.preventDefault();

  var dt = e.dataTransfer;
  var files = dt.files;

  handleFiles(files);
}

function handleFiles(f)
{
	var o=[];
	for(var i =0;i<f.length;i++)
	{
	  var reader = new FileReader();

      reader.onload = (function(theFile) {
        return function(e) {
          qrcode.decode(e.target.result);
        };
      })(f[i]);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f[i]);	}
}
	
function read(a)
{

	if(a=='error decoding QR Code'){
		document.getElementById('plantName').value=a;
	}
	else{
	 document.getElementById('plantName').value=a;
	 document.forms["searchForm"].submit();
	}
	
}	
	
function load()
{
	initCanvas(1,1);
	qrcode.callback = read;
	qrcode.decode("meqrthumb.png");
}

function initCanvas(ww,hh)
	{
		gCanvas = document.getElementById("qr-canvas");
		gCanvas.addEventListener("dragenter", dragenter, false);  
		gCanvas.addEventListener("dragover", dragover, false);  
		gCanvas.addEventListener("drop", drop, false);
		var w = ww;
		var h = hh;
		gCanvas.style.width = w + "px";
		gCanvas.style.height = h + "px";
		gCanvas.width = w;
		gCanvas.height = h;
		gCtx = gCanvas.getContext("2d");
		gCtx.clearRect(0, 0, w, h);
		imageData = gCtx.getImageData( 0,0,320,240);
	}

	function passLine(stringPixels) { 
		//a = (intVal >> 24) & 0xff;

		var coll = stringPixels.split("-");
	
		for(var i=0;i<320;i++) { 
			var intVal = parseInt(coll[i]);
			r = (intVal >> 16) & 0xff;
			g = (intVal >> 8) & 0xff;
			b = (intVal ) & 0xff;
			imageData.data[c+0]=r;
			imageData.data[c+1]=g;
			imageData.data[c+2]=b;
			imageData.data[c+3]=255;
			c+=4;
		} 

		if(c>=320*240*4) { 
			c=0;
      			gCtx.putImageData(imageData, 0,0);
		} 
 	} 

  
</script>


					<!-- content -->

					<div class="container">
						
						<div class="row">

							
							<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="jumbotron">
									<div class="container">



										<div class="row">

 
											<!-- *************** 2 ways to input search, QR or manual search *************** -->

											 <div class="container">
	











<p>Capture a QR code</p>

  	
	
    </div>
<div class="fileinput fileinput-new" data-provides="fileinput">
  <span class="fPut btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" accept="image/*;capture=camera" onchange="handleFiles(this.files)"></span>
  <span class="fileinput-filename"></span>
  <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
</div><br>
<canvas id="qr-canvas" width="1" height="1"></canvas>

											






















										<!-- Form to get the search term -->
										<form name="searchForm" class="searchForm" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" method="post" >
											<p>or</p>
											<div class="formFields col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="input-group">
											<span class="input-group-addon">Search</span>
											<input class="form-control" name="plantName" id="plantName" type="text" value="Plant Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Plant Name...';}">
											</div>
											</div>

											<div class="formFields col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<input class="btn btn-default" type="submit" value="Find!" >
										</div>
										</form>
									</div>

								

									<!-- ********************************************************************** -->




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