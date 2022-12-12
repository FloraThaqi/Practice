<?php get_header();?>
    <div class="row">
        
      
             <!-- Carousel -->
<div id="awesome-carousel" class="carousel slide" data-bs-ride="carousel">


    <div class="col-12">
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

                <?php 
                        $args_cat = array(
                                'include' => '8,9,10'
                            );
                        $categories = get_categories($args_cat);
                        $count = 0;
                        $carouselbullets = '';
                        foreach( $categories as  $category ):
                        
                            $args = array(
                                'type' => 'post',
                                'posts_per_page' => 1,
                                'category__in' => $category->term_id,
                                'category__not_in '=> array(11),
                            
                            );
                            $lastBlog = new WP_Query( $args);

                            if($lastBlog->have_posts() ):                       

                                while($lastBlog->have_posts()): $lastBlog->the_post(); ?>

                                <div class="carousel-item <?php if($count == 0): echo 'active'; endif;?>">
                                    <?php the_post_thumbnail('full'); ?>
                                    <div class="carousel-caption">
                                            <?php the_title(sprintf('<h1 class="entry-tittle"><a href="%s">',esc_url(get_permalink()) ),'</a></h1>'); ?>
                                            <small><?php the_category(' '); ?></small>
                                    </div>  
                                          
                                </div> 
                               <?php  $carouselbullets .= '<button type="button" data-bs-target="#awesome-carousel" data-bs-slide-to="'.$count.'" class="'; ?>

                                 <?php if($count == 0):  $carouselbullets .= 'active'; endif;?>
                                 <?php  $carouselbullets .= '"></button>'; ?>
                                <?php endwhile;
                            endif;
                            wp_reset_postdata();

                            $count++;
                        endforeach;
                ?>
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <?php echo $carouselbullets; ?>
            </div >
               

        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#awesome-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#awesome-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon "></span>
        </button>
    </div>
</div>
    </div>
    <div class="row">   
        <div class="col-12 col-md-8">
                <?php 
                    if(have_posts() ):

                        while(have_posts()): the_post(); ?>
                        
                        <?php get_template_part('content', get_post_format()); ?>
                        
                        <?php endwhile;
                    endif;
                    // PRINT OTHER 2 POSTS NOT THE FIRST ONE
/*                    $args = array(
                        'type' => 'post',
                        'posts_per_page' => 2,
                        'offset' => 1,

                    );
                 $lastBlog = new WP_Query( $args);
                    if($lastBlog->have_posts() ):
      
                      while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
                      
                      <?php get_template_part('content', get_post_format()); ?>
                      
                      <?php endwhile;
                  endif;
                  wp_reset_postdata();

*/
                ?>
               
        <!--       <hr> -->
               

               <?php 
                   // PRINT ONLY TUTORIALS
 /*                  $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
                   if($lastBlog->have_posts() ):
     
                     while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
                     
                     <?php get_template_part('content', get_post_format()); ?>
                     
                     <?php endwhile;
                 endif;
                 wp_reset_postdata();
 */                
               ?>
        </div>
        <div class="col-12 col-md-4">
                <?php get_sidebar(); ?>
        </div>
    </div>   
<?php get_footer(); ?>