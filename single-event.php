<?php
get_header();

$radioButtons = get_field('event_availability');
$date = date('j F, Y', strtotime(get_field('event_date')));
?>
  <div class="container upcoming-events single-event">
    <p>UPCOMING EVENT</p>
    <h2 class="event-title"><?php the_title(); ?></h2>
    <div class="event">
      <div class="event-datetime">
        <h3 class="event-date"><?php echo $date ?></h3>
        <span class="break"></span>
        <h3 class="event-time"><?php the_field('event_time_start'); ?> to <?php the_field('event_time_end'); ?></h3>
      </div>
      <?php if (get_field('event_availability') == 'Available Space' && get_field('event_description') != '') { ?>
        <a class="btn cta-read-more" target="_blank" href="<?php the_field('event_dojo_url'); ?>">Book your spot</a>
      <?php } ?>
      <hr />
      <div class="event-content"><?php echo get_field('event_description'); ?></div>

      <?php if (get_field('event_availability') == 'Available Space') { ?>
        <a class="btn cta-read-more" target="_blank" href="<?php the_field('event_dojo_url'); ?>">Book your spot</a>
      <?php } else { ?>
        <button class="btn cta-read-more unavailable">Book your spot</button>
        <span class="sorry-msg">Sorry, there's no more room in this event. You can <a target="_blank" href="<?php the_field('event_dojo_url'); ?>">view the dojo event here </a></span>
      <?php } ?>
    </div>
    <!-- Event Pagination -->
    <div class="pagination no-border">
      <?php
        $thisDate = date('Ymd', strtotime(get_field('event_date')));

        $nextEvent = new WP_Query(array(
          'post_type' => 'event',
          'posts_per_page' => 1,
          'order' => 'ASC',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
            'key' => 'event_date',
            'compare' => '>',
            'value' => $thisDate,
            'type' => 'numberic'
            )
          ),
        ));

        if ($nextEvent->have_posts()) {
          $nextEvent->the_post();
          ?>
          <a href="<?php the_permalink(); ?>">Next Event: <?php the_title(); ?></a>
        <?php } ?>
    </div>
  </div>


<?php
get_footer();

?>
