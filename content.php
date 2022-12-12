<article class="post-<?php the_ID();?>" <?php post_class(); ?>>
<header class="entry-header">
 <?php the_title(sprintf('<h1 class="entry-tittle"><a href="%s">',esc_url(get_permalink()) ),'</a></h1>'); ?>

  <small> Posted on: <?php the_time('F j, Y');?>, in<?php the_category();?></small>
</header>  


<div class="row">
  <div class="col-12 col-sm-4">
   <?php if (has_post_thumbnail()): ?>
      <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
  </div>
  <div class="col-12 col-sm-8">
       <?php the_content(); ?> 
  </div>
  <?php else: ?>
       <div class="col-12 ">
            <?php the_content(); ?> 
       </div>
   
  <?php endif;?>
</div> 

</article>