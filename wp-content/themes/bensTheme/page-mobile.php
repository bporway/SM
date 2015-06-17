<?php while (have_posts()) : the_post(); ?>


<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/js/jquery.elastislide.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/css/demo.css" />


<ul id="carousel" class="elastislide-list">
	<li><a href="#"><img src="images/1.jpg" alt="image01" /></a></li>
	<li><a href="#"><img src="images/2.jpg" alt="image02" /></a></li>
	<li><a href="#"><img src="images/3.jpg" alt="image03" /></a></li>
	<!-- ... -->
</ul>

<script> $('#carousel').elastislide();</script>




<?php endwhile; ?>
