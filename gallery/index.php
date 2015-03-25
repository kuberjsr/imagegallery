
		<div class="container">
			
			<div class="content">
				<h1>Recent updates about Marina Suites</span></h1>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									  <?php 
$files = glob("gallery/img/*.*"); 

for ($i=count($files)-1; $i>=0; $i--)
 { 
 $num = $files[$i]; 
 echo "<li><a href='#'><img src='$num' data-large='$num' alt='image$i' width='300' height='50' data-description='Latest updates from Marina Suites' /></a></li>&nbsp;&nbsp;";
 }
  ?>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
				
			</div><!-- content -->
		</div><!-- container -->
