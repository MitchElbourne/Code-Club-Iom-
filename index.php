<?php
get_header();
?>

<!-- Splash Section -->
<section id="splash" class="splash-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="splash-content">
          <div class="splash-banner">
            <img class="small-screen" src="<?php echo get_theme_file_uri('assets/images/Splash Image/splash-image-small-top@2x.png'); ?>" alt="banner">
          </div>
          <h1 class="title">Come and learn to code</h1>
          <div class="splash-banner">
            <img class="large-screen" src="<?php echo get_theme_file_uri('assets/images/Splash Image/splash-image-large@2x.png'); ?>" alt="banner">
            <img class="medium-screen" src="<?php echo get_theme_file_uri('assets/images/Splash Image/splash-image-medium@2x.png'); ?>" alt="banner">
            <img class="small-screen" src="<?php echo get_theme_file_uri('assets/images/Splash Image/splash-image-small-bottom@2x.png'); ?>" alt="banner">
          </div>
        </div>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container-fluid -->
</section><!-- welcome to bni -->

<!-- News and Events Section -->
<section id="news-events" class="news-events-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8 news">
<?php
  $recentPosts = new WP_Query(array(
    'post_type' => 'post',
    'post_count' => 9,
    'post_order' => "ASC"
  ));


  // TODO: Use a better method for retreiving first post
  // Variable used fr retreiving the first post from the array
  $postcount = 0;
  while ($recentPosts->have_posts()) {
    $recentPosts->the_post();

    if ($postcount == 0) { ?>
      <article class="post-item first-post">
        <div class="post-thumbnail">
          <div class="ratio-container">
            <div class="ratio-content" style="background-image: url('imgs/lets-get-kids-coding.png');"></div>
          </div>
          <a href="javascript:;" class="post-overlay"></a>
        </div><!-- post-thumbnail -->
        <div class="post-categories">
          <a href="javascript:;">Classes</a> |
          <a href="javascript:;">News</a>
        </div><!-- post-categories -->
        <a href="javascript:;" class="post-title">New Scratch Season, Cybersecurity and lots more</a><!-- post-title -->
        <div class="post-content">
          <p>Everyone’s back from the Summer holidays and getting ready for the next scholastic year, so we though it would be a good time to organise a new Scratch class. This is a beginner’s class, starting Saturday 8th September at 16:00, aimed at 8 to 12 year olds who have never coded before and are looking for a fun way to start learning.</p>
        </div><!-- post-content -->

        <div class="post-meta">
          <a href="javascript:;" class="cta cta-read-more">Read more</a>
          <div class="post-meta-content float-right">
            <a href="javascript:;" class="post-author"><img src="imgs/Icons/icon-pen.svg" alt="icon"> Owen Cutajar</a>
            <a href="javascript:;" class="post-date"><img src="imgs/Icons/icon-calendar.svg" alt="icon"> 01.09.18</a>
            <a href="javascript:;" class="post-comments has-comment"><img src="imgs/Icons/icon-comment0.svg" alt="icon"> 12</a>
          </div>
        </div><!-- post-meta -->
      </article><!-- article -->
    <?php  $postcount++;
    } else {

    }
  }
?>

    </div><!-- row -->
  </div><!-- container -->
</section><!-- SECTION : News & Events -->

<?php
get_footer();
?>
