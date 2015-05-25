<?php while (have_posts()) : the_post(); ?>

<?php

$images = get_field('images');
$count = 0 ;
echo count($images);

?>

     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->


       <div class="container homeCenter">
           
            <div class="innerContainer">
                <div class="thumb_table">

                <?php foreach($images as $image) : ?>

                        <?php if ($count % 4 == 0 ) {
                            echo "<div class=\"thumb_column\">";

}

                ?>


                        <div class="thumb_row"><img src="<?php echo $image['url'] ?>"></div>

                <?php $count++; ?>
                <?php if($count % 4 == 0 ) { echo "</div>";} ?>

                    
                <?php endforeach; ?>
                        </div>
                    

     
</div>
                
              
            </div>
            


            <div class="sm-main-image" style="border:solid;">

                      <img class="mainImage" src ="../wp-content/themes/bensTheme/thumbPH.png">
            </div>

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
