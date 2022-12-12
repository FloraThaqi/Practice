<?php
/* 
INCLUDE SCRIPTS
*/
function awesome_script_enqueue(){
 //css 
  wp_enqueue_style('bootstrapstyle', get_template_directory_uri(). '/css/bootstrap.min.css',array(),'','all');
  wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/awesome.css',array(),'1.0.0','all');
  //js 
  wp_enqueue_script('bootstrapjs', get_template_directory_uri(). '/js/bootstrap.min.js',array(),'','true');
  wp_enqueue_script('customjs', get_template_directory_uri(). '/js/awesome.js',array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/* 
ACTIVATE MENUS
*/ 
function awesome_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary','Primary Header Navigation');
  register_nav_menu('secondary','Footer Navigation');

}

add_action('init','awesome_theme_setup');
/*  
 THEME SUPPORT FUNCTION
*/ 
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

/* 
 ADD POST FORMAT
*/ 
add_theme_support('post-formats', array('aside','image','video'));
/* 
 SIDEBAR FUNCTION
*/
function awesome_widget_setup(){

    register_sidebar(
      array(
          'name' => 'Sidebar',
          'id' => 'sidebar-1',
          'class' => 'custom',
          'description' => 'Standard Sidebar',
          'before_widget'  => '<li id="%1$s" class="widget %2$s">',
          'after_widget'   => "</li>\n",
          'before_title'   => '<h2 class="widgettitle">',
          'after_title'    => "</h2>\n"
       
        
      )
    );
}

add_action('widgets_init','awesome_widget_setup');
