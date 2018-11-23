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
    'posts_per_page' => 9,
    'post_order' => "ASC"
  ));


  // TODO: Use a better method for retreiving first post
  // Variable used for retreiving the first post from the array
  $postcount = 0;
  while ($recentPosts->have_posts()) {
    $recentPosts->the_post();

    if ($postcount == 0) { ?>
      <article class="post-item first-post">
        <div class="post-thumbnail">
          <div class="ratio-container">
            <div class="ratio-content" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="post-overlay"></a>
        </div><!-- post-thumbnail -->
        <div class="post-categories">
          <a href="javascript:;">Classes</a> |
          <a href="javascript:;">News</a>
          <?php $category = get_the_category();
          
          ?>
        </div><!-- post-categories -->
        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a><!-- post-title -->
        <div class="post-content">
          <p><?php echo wp_trim_words(get_the_content(), 55); ?></p>
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
      <div class="row">
    <?php  $postcount++;
    } else { ?>

    <?php }
  }
?>
      </div><!-- row -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- SECTION : News & Events -->

<?php
get_footer();
?>
