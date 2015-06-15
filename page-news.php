<?php while (have_posts()) : the_post(); ?>

<?php

$newsImage = get_field('newsImage');


?>
<div class = "homeCenter">
hello


        <div class="sm-image-col">
            <div class="sm-about-image">
            <img src ="<?php echo $newsImage; ?>" >
            </div>
        </div>


        <div class="sm-desc-col">
            <div class="sm-page-title">
            <P>news</P>
            </div>

            <div class="sm-page-description">

                <!-- rss feed -->

                <div id="divRss"><ul class="feedEkList"><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/chicks-with-guns/" target="_blank">Chicks with Guns – Seeing RED</a></div><div class="itemDate">2/9/2015</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/don-zimmer-one-hell-life/" target="_blank">Don Zimmer: “One Hell of a Life”</a></div><div class="itemDate">11/20/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/salute-to-our-bravest/" target="_blank">Our Bravest: A Salute to Veterans</a></div><div class="itemDate">11/11/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/ice-holes-alex-sledding/" target="_blank">ICE HOLES – Alex Sledding</a></div><div class="itemDate">6/29/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/steve-marsel-cinemagraph-of-poles/" target="_blank">Steve Marsel~Cinemagraph of Poles</a></div><div class="itemDate">6/28/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/ice-holes-two-wise-men/" target="_blank">ICE HOLES – Two Wise Men?</a></div><div class="itemDate">6/28/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/steve-marsel-cinemagraph-lights/" target="_blank">Steve Marsel~Cinemagraph of Lights</a></div><div class="itemDate">6/28/2014</div></li><li><div class="itemTitle"><a href="http://www.stevemarselstudio.com/blog/ice-holes-kahtoola-to-the-rescue/" target="_blank">ICE HOLES – Kahtoola to the Rescue</a></div><div class="itemDate">6/26/2014</div></li></ul></div>

            </div>
        </div>




</div>


     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->

<?php endwhile; ?>
