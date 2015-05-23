<?php while (have_posts()) : the_post(); ?>



     <!-- <h1 class="entry-title"><?php the_title(); ?> "this is the title "</h1> -->
      <?php #get_template_part('templates/entry-meta'); ?>

       <div class="container homeCenter">
           
            <div class="innerContainer">

                <div class="thumb_table">
                    <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        </div>
                    
                      
                   <div class="thumb_column">
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
                        
                        <div class="thumb_row"></div>
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
