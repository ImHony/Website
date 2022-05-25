<!DOCTYPE html> 
<html> 
<head> 
	<?php  
		include 'templates/head.html' 
	?> 
</head> 
<body class="d-flex flex-column min-vh-100"> 
	<?php  
		include 'templates/navbar.html' 
	?> 
<div class="container"> 
	<div class="container-fluid"> 
		<div class="row mt-4"> 
			<div class="item col-sm-6 col-md-4 mb" style="padding-bottom: 6px;"> 
				<a href="images/image1.jpg" class="fancybox" data-fancybox="gallery1"> 
					<img src="images/image1.jpg" width="100%" height="100%"> 
				</a> 
					<p style="color: white; text-align: center;">xfasfasfafafafasfd</p>
			</div> 

			<div class="item col-sm-6 col-md-4 mb" style="padding-bottom: 6px;"> 
				<a href="images/image2.jpg" class="fancybox" data-fancybox="gallery1"> 
					<img src="images/image2.jpg" width="100%" height="100%"> 
				</a> 
			</div> 
			<div class="item col-sm-6 col-md-4 mb" style="padding-bottom: 6px;"> 
				<a href="images/image3.jpg" class="fancybox" data-fancybox="gallery1"> 
					<img src="images/image3.jpg" width="100%" height="100%"> 
				</a> 
			</div> 
			
		</div> 
		 
	</div> 
	</div> 
<footer class="mt-auto">
	<?php
  include 'templates/footer.html'
	?>

	</footer>
</body> 
</html>