<?php while (have_posts()) : the_post(); ?>

<?php

$aboutTitle = get_field('abouttitle');
$aboutDescription = get_field('aboutdescription');
$aboutImage = get_field('aboutimage');

?>
<div class = "homeCenter">
    <div class="row">


        <div class="col-md-5">
            <div class="sm-about-image">
            <img src ="<?php echo $aboutImage; ?>" >
            </div>
        </div>


        <div class="col-md-7">
            <div class="sm-page-title">
            <P><?php echo $aboutTitle; ?></P>
            </div>

            <div class="sm-page-description">
            <P><?php echo $aboutDescription; ?></P>
            </div>
        </div>

    </div>
</div>

     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->

<?php endwhile; ?>
