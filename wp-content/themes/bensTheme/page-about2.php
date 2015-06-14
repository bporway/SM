<?php while (have_posts()) : the_post(); ?>

<?php
//retrieve about info
$aboutTitle = get_field('aboutTitle');
$aboutDescription = get_field('aboutDescription');
$aboutImage = get_field('aboutImage');

?>
<div class = "container homeCenter">
    <div class="row">


        <div class="col-md-3">
            <div class="sm-about-image">
            <img src = "http://www.stevemarselstudio.com/web/images/html/about_centerpiece.jpg" >
            </div>
        </div>


        <div class="col-md-9">
            <div class="sm-page-title">
            <P>"title"</P>
            </div>

            <div class="sm-page-description">
            <P>"description"</P>
            </div>
        </div>

    </div>
</div>

     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->

<?php endwhile; ?>
