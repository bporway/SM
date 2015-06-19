<!--load scripts -->
        <script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/jquery.elastislide.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/modernizr.custom.17475.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/js/jquerypp.custom"></script>

<!-- load styles -->

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>wp-content/themes/bensTheme/Elastislide/css/custom.css" />



<?php while (have_posts()) : the_post(); ?>

<?php

$images = get_field('images');
$count = 0 ;
//echo count($images);

?>
<div id="sm-mobile-check"></div>

<script>
    //check if mobile div is hidden
    $( document ).ready(function() {
    var is_mobile = false;

    if( $('#sm-mobile-check').css('display')=='none') {
        is_mobile = true;
    }

    // is_mobile to run javascript conditionally

    if (is_mobile == true) {
        alert("mobile");
        $('.homeCenter').hide();
        $('#sm-gallery-homeCenter').hide();
        $('.image-preview').show();
       // $('.elastislide-wrapper').find('.elastislide-horizontal').show();


    }
 });

</script>

<script> $(document).ready(function(){ $('#carousel').elastislide();

        //on click display preview image

                                      $('li').click(function() {

                                        $previewImageSrc =   $(this).find('img').attr("src");
                                        $('#sm-mobile-preview').attr("src",$previewImageSrc);


                                      });




                                     });</script>

<!-- alt mobile version main image -->


<div class="image-preview">
						<img id="sm-mobile-preview" src="<?php echo site_url(); ?>/wp-content/themes/bensTheme/Elastislide/images/small/3.jpg">
					</div>

<!-- alt mobile version thumbs -->
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


<!-- main gallery code -->
       <div id="sm-gallery-homeCenter" class="container homeCenter">
           <div class="clippingContainer">
            <div class="innerContainer">
                <div class="thumb_table">

                <?php foreach($images as $image) : ?>

                        <?php if ($count % 4 == 0 ) {
                            echo "<div class=\"thumb_column\">";

}

                ?>


                        <div class="thumb_row img-zoom"><img src="<?php echo $image['url'] ?>"></div>

                <?php $count++; ?>
                <?php if($count % 4 == 0 ) { echo "</div>";} ?>


                <?php endforeach; ?>
                        </div>



</div>
           </div>
<!-- footer -->
            </div>
<!-- container to align main image -->
      <div class="sm-main-holder">
            <div class="sm-main-image">

                      <img class="mainImage" src ="../wp-content/themes/bensTheme/thumbPH.png">
            </div>
   </div>
      </div>
 <!-- end container -->


<!-- footer -->
<div align="center" class="sm-footer"><div style="text-align: center;"><img border="0" height="27" src="http://stevemarselstudio.com/web/images/html/footer_phone.gif" width="119"><a href="#" onmouseout="swapImgRestore();" onmouseover="swapImage('footerEmail','','web/images/html/footer_email_rollover.gif',1);"><img border="0" height="27" id="footerEmail" name="footerEmail" src="http://stevemarselstudio.com/web/images/html/footer_email.gif" width="188"></a></div>
</div>

                            </div>

                <!-- end desktop non bootstrap thumbnails -->




                     </div>


           </div>

</div>
           </div>
 <footer>
      <?php #wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
<?php endwhile; ?>

<script>

$( document ).ready(function() {

    //set starter main image

    $('.mainImage').attr("src",$('.thumb_row').first().children('img').attr("src"));
    //click for main image script

$('.thumb_row').click(function(){
    var $clickedImage =$(this).children('img').attr("src");
   var $clickedImageObject = $(this).children('img');

    
    //fade in script
    
    $(".mainImage").fadeOut(function() { 
        
              //check if horizontal image, adjust vertical centering
    if ($clickedImageObject.width()>$clickedImageObject.height()) {
        $('.sm-main-image').css("bottom","11px");
    }
    else {

        $('.sm-main-image').css("bottom","38px");
    }
        
  $(".mainImage").load(function() { $(this).fadeIn(); }); 
        
  
        
  $(".mainImage").attr("src", $clickedImage); 
}); 
    
    
    
  //  $('.mainImage').attr("src", $clickedImage);
});
    //scrolling script on mouse
var $div = $('.innerContainer');
var $ul = $('.thumb_table');
//alert($ul.width());
// width of div
var width = $div.width();

// width of ul - width of div
var ulWidth = $ul.width() - width;

$div.on('mouseenter', function(e) {
        // get left offset of div on page
        var divLeft = $div.offset().left;


        $(window).on('mousemove', function(e) {
            var left = e.pageX - divLeft;
            // get percent of width the mouse position is at
            var percent = left / width;
           // alert($ul.css('margin-left'));
            // set margin-left on ul to achieve a 'scroll' effect

            $ul.css('margin-left', -(percent * ulWidth));



        });
    }).on('mouseleave', function() {
        // remove mousemove event
        $(window).off('mousemove');
    });


    //zoom script


    $('.img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });

 });
</script>
