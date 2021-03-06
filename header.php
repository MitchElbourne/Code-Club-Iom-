<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
  </head>
  <body id="page-top" <?php body_class('index'); ?>>
    <!-- Header Content -->
    <div class="header">
      <div class="header-container">
        <div class="clearfix top"></div>

        <!-- Navigation -->
        <nav class="navbar navbar-light navbar-expand-sm fixed-top" id="mainNav">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-controls="navbarResponsive" aria-label="Toggle Navigation">
                <span>More</span>
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand " href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_file_uri('assets/images/codeclub-iom-logo.svg'); ?>" alt="Logo"/></a>
            </div>
            <!-- Navigation Links and Box -->
              <?php
          		wp_nav_menu(array(
          			'menu'              => 'Menu 1',
          			'depth'             => 2,
          			'container'         => 'div',
          			'container_class'   => 'collapse navbar-collapse',
          			'container_id'      => 'navbarResponsive',
          			'menu_class'        => 'nav navbar-nav ml-auto',
                'walker'            => new WP_Bootstrap_Navwalker(),
          		));
          		?>
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
      <!-- /Header Content -->
