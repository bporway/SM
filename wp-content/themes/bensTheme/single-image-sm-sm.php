<?php while (have_posts()) : the_post(); ?>

<?php

$images = get_field('images');
$count = 0 ;
//echo count($images);

?>

     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->

       <div class="container homeCenter">
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

            </div>


    <!-- container to align main image -->

   <div class="sm-main-holder">
            <div class="sm-main-image">

                      <img class="mainImage" src ="../wp-content/themes/bensTheme/thumbPH.png">
            </div>
   </div>
    <!-- end container -->
           <!-- end main image -->
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
   // alert($clickedImage);

    //check if horizontal image, adjust vertical centering
    if ($(this).children('img').width()>$(this).children('img').height()) {
        $('.sm-main-image').css("bottom","11px");
    }
    else {

        $('.sm-main-image').css("bottom","40px");
    }
    $('.mainImage').attr("src", $clickedImage);
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
