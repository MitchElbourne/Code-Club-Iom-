<?php

function enqueue_theme_scripts_styles () {
  // Enqueue custom styles
  wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('parent-style');

  // Register the styles
  wp_register_style('nunitofont', 'https://fonts.googleapis.com/css?family=Nunito:400,700', 'stylesheet');
  wp_register_style('montserratfont', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', 'stylesheet');
  wp_register_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'stylesheet');
  wp_register_style('stylesheet', get_theme_file_uri('/assets/css/stylesheet.css'));


  //Enqueue the styles
  wp_enqueue_style('nunitofont');
  wp_enqueue_style('montserratfont');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('stylesheet');

  // Register the scripts
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array('jquery'), false, true);
  wp_register_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js", array('jquery'), false, true);
  wp_register_script('tether', "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js", array('jquery'), false, true);


  // Enqueue the scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper');
  wp_enqueue_script('tether');
  wp_enqueue_script('bootstrapjs');

  // TODO: Add JavaScript
  // Register custom scripts
  // wp_enqueue_script('main_script', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), microtime(), true);
}
// Retrieve the NavWalker file and load as a template
get_template_part('navwalker4');
// Hide the admin bar
// TODO: Reintroduce after development
show_admin_bar(false);
// Action the scrips/styles to the page with priority 99 to place it after the main css
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts_styles', 99);

?>
