
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/js/gallery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/css/demo.css" />


<head>
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
	<div class="rg-image-wrapper">
		{{if itemsCount > 1}}
			<div class="rg-image-nav">
				<a href="#" class="rg-image-nav-prev">Previous Image</a>
				<a href="#" class="rg-image-nav-next">Next Image</a>
			</div>
		{{/if}}
		<div class="rg-image"></div>
		<div class="rg-loading"></div>
		<div class="rg-caption-wrapper">
			<div class="rg-caption" style="display:none;">
				<p></p>
			</div>
		</div>
	</div>
</script>
</head>

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
					<li>
						<a href="#">
							<img src="http://wp:8888/wp-content/uploads/2015/05/lift.jpg" data-large="http://wp:8888/wp-content/uploads/2015/05/lift.jpg" alt="image01" data-description="Some description" />
						</a>
					</li>
                    
				</ul>
			</div>
		</div>
		<!-- End Elastislide Carousel Thumbnail Viewer -->
	</div><!-- rg-thumbs -->
</div><!-- rg-gallery -->