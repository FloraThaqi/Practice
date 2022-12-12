<?php get_header();?>

   <div class="row">
        <div class="col-12 col-md-8"> 
            <div class="row text-center">   
                
                        <?php 
                            if(have_posts() ): $i= 0;

                                while(have_posts()): the_post(); ?>
                                
                                    <?php if( $i== 0): $column = 12;
                                       elseif($i > 0 &&  $i <= 2): $column = 6; 
                                       elseif($i > 2 ): $column = 4; 
                                       endif;

                                    ?>
                                        <div class="col-<?php echo $column; ?>"> 
                                        
                                                <?php if (has_post_thumbnail()):
                                                  $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                                endif; ?>
                                            <div class="blog-element" style="background-image: url(<?php echo $url_img; ?>);">

                                                <?php the_title(sprintf('<h1 class="entry-tittle"><a href="%s">',esc_url(get_permalink()) ),'</a></h1>'); ?>
                                                <small><?php the_category(' '); ?></small>
                                           </div>
                                        </div>
                                    

                                <?php $i++; endwhile;
                            endif;
                        ?>
            </div> 
        </div>    
        <div class="col-12 col-md-4">
                <?php get_sidebar(); ?>
        </div>

        
    </div>

 <?php get_footer(); ?>