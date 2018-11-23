<?php

function my_theme_enqueue_styles () {
  // WP enqueue styles
  wp_enqueue_style('nunitofont', get_stylesheet_directory_uri('https://fonts.googleapis.com/css?family=Nunito:400,700'));
  wp_enqueue_style('montserratfont', get_stylesheet_directory_uri('https://fonts.googleapis.com/css?family=Montserrat:400,700'));
  wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array('jquery'), false, true);
  wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js", array('jquery'), false, true);
  wp_enqueue_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array('jquery'), false, true);
  wp_enqueue_script('tether', "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js", array('jquery'), false, true);

  // Enqueue custom styles
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // TODO: Add JavaScript
  // Register custom scripts
  // wp_enqueue_script('main_script', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), microtime(), true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
get_template_part('wp-bootstrap-navwalker');
?>
