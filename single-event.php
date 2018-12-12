<?php
get_header();

$radioButtons = get_field('event_availability');
$date = date('F j, Y', strtotime(get_field('event_date')));
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
      <?php if (get_field('event_availability') == 'Available Space') { ?>
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
        echo next_post('%', 'Next Event: ');
      ?>
    </div>
  </div>


<?php
get_footer();

?>
