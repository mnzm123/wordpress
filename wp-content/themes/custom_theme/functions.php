<?php 
 register_nav_menus(
    array('primary menu' => 'Top Menu')
 );
//  add_theme_support('custom-header');
 add_theme_support('post-thumbnails');
 register_sidebar(
   array(
      'name'=> 'Sidebar Location',
      'id'=> 'sidebar'
   )
 );
?>