<?php // TODO: Pull menu items from WP menu ?>
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
          <div class="item resources">
            <h5 class="title">Resources</h5>
            <a href="<?php echo esc_url(home_url('/resources')); ?>">Resources</a>
            <a href="<?php echo esc_url(home_url('/frequently-asked-questions')); ?>">Frequently Asked Questions</a>
          </div><!-- resources -->
          <div class="item feed">
            <h5 class="title">Feed</h5>
            <a href="<?php echo esc_url('https://www.google.com/calendar/ical/1do5ep6up9hmu0hcejef2r8dfg%40group.calendar.google.com/public/basic.ics'); ?>">Calendar Feed</a>
            <?php // TODO: : Borken feed ?>
            <!-- <a href="<?php echo esc_url(home_url('/feed')); ?>">News RSS Feed</a> -->
          </div><!-- feed -->
        </div><!-- col -->
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <div class="item find-us">
            <h5 class="title">Where to find us</h5>
            <p class="sub-text">You can find us at: </p>
            <p><span>3 Prospect Hill, Douglas </span><br><span>Isle of Man, IM1 1ES</span></p>
          </div><!-- find-us -->
          <div class="item sign-up">
            <?php
              dynamic_sidebar('first-footer-widget-area');
            ?>
            </form>
          </div><!-- sign-up -->
        </div><!-- col -->
        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
          <div class="item help-us">
            <h5 class="title">Help us do more</h5>
            <span>Donate to Code Club:</span>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="6ZUQBC5TBLFAU">
              <button type="submit" class="cta cta-donate">
                <span>Donate</span>
              </button>
            </form>
            <?php // TODO: Fix paypal link ?>
            <ul class="icons-donate">
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-visa.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-visa-v2.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-mastercard.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-maestro.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-paypal.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-amazon.svg'); ?>" alt="icon"></li>
              <li><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-bitcoin.svg'); ?>" alt="icon"></li>
            </ul>
          </div><!-- help-us -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- SECTION : contact -->

<?php
wp_footer();
?>
</body>
</html>
