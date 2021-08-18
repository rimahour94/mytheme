<?php

/**
 * Theme Function
 * 
 * @package mytheme
 */

//  echo '<pre>';
//  print_r(get_template_directory_uri());
//  wp_die();


 function mytheme_enqueue_scripts(){
    //if we have dependency  wp_enqueue_style('main-css',get_stylesheet_uri(),['stylesheet']);

    // wp_enqueue_style('style-css',get_stylesheet_uri(),[],
    // filemtime(get_template_directory().'/style.css'),'all');

    // wp_enqueue_script('main-js',get_template_directory_uri().'/assets/main.js',[],
    // filemtime(get_template_directory().'/assets/main.js'),true);
 
   // register styles
     wp_register_style('style-css',get_stylesheet_uri(),[],
     filemtime(get_template_directory().'/style.css'),'all');

   // register bootstrap
     wp_register_style('bootstrap-css',get_template_directory_uri()
     .'/assets/src/library/css/bootstrap.min.css',[],false,'all');

   //   register Scripts
     wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',[],
     filemtime(get_template_directory().'/assets/main.js'),true);
     
     wp_register_script('bootstrap-js',get_template_directory_uri()
     .'/assets/src/library/bootstrap.min.js',['jquery'],false,true);
     

   // enqueue styles  
     wp_enqueue_style('style-css');
     wp_enqueue_style('bootstrap-css');
   
   // enqueue scripts
     wp_enqueue_script('main-js');
     wp_enqueue_script('bootstrap-js');
     
}

 add_action('wp_enqueue_scripts','mytheme_enqueue_scripts');

?>
