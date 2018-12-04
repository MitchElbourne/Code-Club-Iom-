<?php
get_header();

$radioButtons = get_field('event_availability');
$date = date('l, F j, Y', strtotime(get_field('event_date')));
?>
  <div class="container upcoming-events single-event">
    <h1 class="event-title"><?php the_title(); ?></h1>
    <div class="event">
      <div class="event-datetime">
        <h3 class="event-date"><?php echo $date ?></h3>
        <h3 class="event-time"><?php the_field('event_time_start'); ?> to <?php the_field('event_time_end'); ?></h3>
      </div>
      <div class="event-content"><?php echo get_field('event_description'); ?></div>

      <?php if (get_field('event_availability') == 'Available Space') { ?>
        <a class="btn btn-reserve" href="mailto:<?php echo get_field('event_organizer_email'); ?>?subject=<?php echo get_the_title(); ?> <?php echo $date; ?>">Book your space</a>
      <?php } else { ?>
        <button class="btn btn-unavailable">Book your space</button>
      <?php } ?>
      <div class="event-contact">
        <h4>Contact the event Organizer:</h4>
        <a class="contact-email" href="mailto:<?php echo get_field('event_organizer_email'); ?>?subject=<?php echo get_the_title(); ?> <?php echo $date; ?>"><?php the_field('event_organizer_email'); ?></a>
      </div>
    </div>
  </div>



<?php

get_footer();

?>
