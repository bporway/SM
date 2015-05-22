<?php while (have_posts()) : the_post(); ?>



      <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1>
      <?php #get_template_part('templates/entry-meta'); ?>

       <div class="container homeCenter">
            <div class="row">
            <!-- <div class="col-md-6" style="border:solid;">
                <p>Thumbnails </p>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="col-md-3"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                         </div>  bootstrap thumbnail gallery -->

                <!-- desktop non bootstrap thumbnails -->

                 <p>Thumbnails Desktop </p>
                 <div class="thumbContainer" style="width:400px;overflow:scroll;">
                     <div class="thumbFullLength style=width:1000px;">
                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>
                          <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>

                      <div class="sm-thumb2"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></div>
                        </div>
                        </div>
                         </div>
                            </div>

                <!-- end desktop non bootstrap thumbnails -->


                  <div class="col-md-6" style="border:solid;">
                  <p>This is the main image</p>
                      <img class="mainImage" src ="/wp-content/themes/bensTheme/assets/images/thumbPH.png">
                  </div>

                     </div>


           </div>

</div>
           </div>
 <footer>
      <?php #wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
<?php endwhile; ?>
