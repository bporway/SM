<?php while (have_posts()) : the_post(); ?>

<head>
<script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/jquery.elastislide.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/jquerypp.custom"></script>

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/custom.css" />

</head>

<div class="image-preview">
						<img id="sm-mobile-preview" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/3.jpg">
					</div>

<ul id="carousel" class="elastislide-list">
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/1.jpg" alt="image01" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/2.jpg" alt="image02" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/3.jpg" alt="image03" /></a></li>
    	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/4.jpg" alt="image04" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/5.jpg" alt="image05" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/6.jpg" alt="image06" /></a></li>
    	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/7.jpg" alt="image07" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/8.jpg" alt="image08" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/9.jpg" alt="image09" /></a></li>
    	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/1.jpg" alt="image01" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/2.jpg" alt="image02" /></a></li>
	<li><a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/3.jpg" alt="image03" /></a></li>

	<!-- ... -->
</ul>



<script> $(document).ready(function(){ $('#carousel').elastislide();

        //on click display preview image

                                      $('li').click(function() {

                                        $previewImageSrc =   $(this).find('img').attr("src");
                                        $('#sm-mobile-preview').attr("src",$previewImageSrc);


                                      });




                                     });</script>




<?php endwhile; ?>
