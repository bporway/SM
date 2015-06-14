<?php while (have_posts()) : the_post(); ?>

<?php

$aboutTitle = get_field('abouttitle');
$aboutDescription = get_field('aboutdescription');
$aboutImage = get_field('aboutimage');

?>
<div class = "homeCenter">



        <div class="sm-image-col">
            <div class="sm-about-image">
            <img src ="<?php echo $aboutImage; ?>" >
            </div>
        </div>


        <div class="sm-desc-col">
            <div class="sm-page-title">
            <P><?php echo $aboutTitle; ?></P>
            </div>

            <div class="sm-page-description">
            <P><?php echo $aboutDescription; ?></P>
            </div>
        </div>




</div>

 <!-- footer -->
    <div align="center" class="sm-footer"><div style="text-align: center;"><img border="0" height="27" src="http://stevemarselstudio.com/web/images/html/footer_phone.gif" width="119"><a href="#" onmouseout="swapImgRestore();" onmouseover="swapImage('footerEmail','','web/images/html/footer_email_rollover.gif',1);"><img border="0" height="27" id="footerEmail" name="footerEmail" src="http://stevemarselstudio.com/web/images/html/footer_email.gif" width="188"></a></div>
</div>
     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->

<?php endwhile; ?>
