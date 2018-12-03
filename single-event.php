<?php
get_header();

$radioButtons = get_field('event_availability');
?>

<div class="container event-single">
  <div class="event">
    <h2 class="event-title"><?php the_title(); ?></h2>
    <div class="event-content">
      <p class="event-date"><?php the_field('event_date'); ?></p>
      <p><span><?php the_field('event_time_start'); ?></span> - <span><?php the_field('event_time_end'); ?></span></p>
      <p class="event-content"><?php the_field('event_description'); ?></p>
      <?php
      if (!isset($radioButtons['Unavailable'])) { ?>
        <button class="btn btn-available">Book your space</button>
      <?php } else { ?>
        <button class="btn btn-unavailable"></button>
      <?php }
      ?>
      <?php // TODO: Add contact ?>
      <div class="event-contact">
        <h4>Contact the event Organizer:</h4>
        <a class="contact-email"><?php the_field('event_organizer_email'); ?></a>
      </div>
    </div>
  </div>
</div>


<?php

get_footer();

?>
