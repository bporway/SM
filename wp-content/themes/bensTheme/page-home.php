<?php while (have_posts()) : the_post(); ?>



      <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1>
      <?php #get_template_part('templates/entry-meta'); ?>

       <div class="container homeCenter">

            <div class="row">

                 <ul class="sm-thumb-container">

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>
                          <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                      <li class="sm-thumb-li"><img class ="thumb" src="/wp-content/themes/bensTheme/assets/images/thumbPH.png"></li>

                </ul>

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
