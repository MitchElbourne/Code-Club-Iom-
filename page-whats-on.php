<?php
get_header();
?>

<div class="blog_pages_wrapper default_bg search-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-title">Whats on</h1>
        <div class="upcoming-events">
          <h3>Upcoming and Past Events</h3>

          <?php
          // Php WP Query for pulling in the 4 most recent event dates
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $today = date('Ymd');
          $events = new WP_Query(array(
            'post_type' => 'event',
            'posts_per_page' => 0,
            'order' => 'ASC',
            'paged' => $paged
          ));

          if ($events) {
            while ($events->have_posts()) {
              $events->the_post();
              $eventdate = date('M d, Y', strtotime(get_field('event_date')));
              ?>

              <div class="event">
                <a href="<?php the_permalink(); ?>">
                  <h4 class="event-title"><?php the_title(); ?></h4>
                  <div class="event-datetime">
                    <p class="event-date"><?php echo $eventdate ?></p>
                  </div>
                  <p class="event-content"><?php echo wp_trim_words(get_field('event_description'), 20); ?></p>
                  <a class="h4" href="<?php the_permalink(); ?>">Read More</a>
                </a>
              </div>
            <?php }
          } else { ?>
          <p class="no-event-listings">
            Sorry, there don't seem to be any upcoming events. Keep your eye on this page though, there could be one soon!
          </p>
        <?php }
        wp_reset_query();
        ?>
        <a href="https://zen.coderdojo.com/dojos/im/douglas/douglas-iom-steam-lab" target="_blank">Check out our Dojo</a>
      </div><!-- upcoming events -->


      </div>
      <!--Sidebar-->
      <div class="col-md-4">
        <?php dynamic_sidebar('primary-widget-area'); ?>
      </div>

    </div>
  </div>
</div>

<?php
get_footer();
?>
