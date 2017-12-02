<?php 
  function custom_login_css() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/assets/css/panel.css"/>';
  }
  
  add_action('login_head', 'custom_login_css');

?>