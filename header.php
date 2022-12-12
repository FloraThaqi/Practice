<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awesome Theme</title>

    <?php wp_head();?>
   
</head>
<?php
  if( is_front_page()):
       $awesome_classes = array('awesome-class','my-class');
else:
    $awesome_classes = array('no-awesome-class');
endif;
?>
<body <?php body_class( $awesome_classes );?>>
        <div class="container">

                        <div class="row">
                          
                                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                               
                                   
                                        <a class="navbar-brand" href="#">Awesome Theme</a>
                                   
                                     
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse " id="collapsibleNavbar">
                                            <?php   wp_nav_menu(array('theme_location' => 'primary',
                                                                         'container'=> 'false',
                                                                          'menu_class'=>'navbar-nav me-auto'
                                                                     )
                                                                                    );
                                                                            ?>
                                        </div>
                                    
                                </nav>
                        
                        </div>
                       
                                                          
  <br>
   <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
    
