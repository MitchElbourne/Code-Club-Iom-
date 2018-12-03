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
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $recentPosts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'post_order' => "ASC",
    'paged' => $paged,
  ));


  // TODO: Use a better method for retreiving first post
  // Variable used for retreiving the first post from the array
  $postcount = 0;
  while ($recentPosts->have_posts()) {
    $recentPosts->the_post();
    $date = date('d.m.y', strtotime(get_the_date()));
    $image;
    if (!get_the_post_thumbnail_url()) {
      $image = get_theme_file_uri('/assets/images/2018-Digital-Marketing.jpg');
    } else {
      $image = get_the_post_thumbnail_url();
    }

    if ($postcount == 0) { ?>
      <article class="post-item first-post">
        <div class="post-thumbnail">
          <div class="ratio-container">
            <div class="ratio-content" style="background-image: url('<?php echo $image; ?>')"></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="post-overlay"></a>
        </div><!-- post-thumbnail -->
        <div class="post-categories">
          <?php
          the_category();
          ?>
        </div><!-- post-categories -->
        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a><!-- post-title -->
        <div class="post-content">
          <p><?php echo wp_trim_words(get_the_content(), 55); ?></p>
        </div><!-- post-content -->

        <?php // TODO: Configure Post-Meta ?>
        <div class="post-meta">
          <a href="<?php echo the_permalink(); ?>" class="cta cta-read-more">Read more</a>
          <div class="post-meta-content pull-right">
            <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="post-author"><img src="<?php echo get_theme_file_uri('/assets/images/Icons/icon-pen.svg'); ?>" alt="icon"><?php the_author(); ?></a>
            <a class="post-date"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-calendar.svg'); ?>" alt="icon"><?php echo $date; ?></a>
            <a href="<?php echo the_permalink(); ?>" class="post-comments has-comment"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-comment0.svg'); ?>" alt="icon"><?php echo get_comments_number(); ?></a>
          </div>
        </div><!-- post-meta -->
      </article><!-- article -->
      <div class="row blog-articles">
    <?php  $postcount++;
    } else { ?>

      <!-- Individual Blog Posts -->
      <div class="col-md-6">
        <article class="post-item">
          <div class="post-thumbnail">
            <div class="ratio-container">
              <div class="ratio-content" style="background-image: url('<?php echo $image; ?>');"></div>
            </div>
            <a href="<?php echo get_the_permalink(); ?>" class="post-overlay"></a>
          </div><!-- post-thumbnail -->
          <div class="post-categories">
            <?php
            the_category();
            ?>
          </div><!-- post-categories -->
          <a href="<?php echo get_the_permalink(); ?>" class="post-title"><?php the_title(); ?></a><!-- post-title -->
          <div class="post-meta">
            <div class="post-meta-content">
              <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="post-author"><img src="<?php echo get_theme_file_uri('/assets/images/Icons/icon-pen.svg'); ?>" alt="icon"><?php the_author(); ?></a>
              <a class="post-date"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-calendar.svg'); ?>" alt="icon"><?php echo $date; ?></a>
              <a href="<?php echo the_permalink(); ?>" class="post-comments has-comment"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-comment0.svg'); ?>" alt="icon"><?php echo get_comments_number(); ?></a>
            </div>
          </div><!-- post-meta -->
          <div class="post-content">
            <p><?php echo wp_trim_words(get_the_content(), 35); ?></p>
          </div><!-- post-content -->
        </article><!-- article -->
      </div>
    <?php }
  } ?>

      <div class="pagination">
        <div class="prev"><?php previous_posts_link('Previous posts', $postslist->max_num_pages); ?></div>
        <div class="next"><?php next_posts_link('Next posts', $postslist->max_num_pages); ?></div>
      </div>



        </div><!-- row -->
      </div><!-- row -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-4 upcoming-events">
            <?php dynamic_sidebar('primary-widget-area'); ?>
      </div><!-- col --><!-- upcoming-events -->
  </div><!-- container -->
</section><!-- SECTION : News & Events -->

<?php
get_footer();
?>
