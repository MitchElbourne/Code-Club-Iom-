<?php
get_header();
?>

<div class="blog_pages_wrapper default_bg search-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <!--page start-->
  		<?php
  		if ( have_posts() ) :
  			while (have_posts()) {
          the_post();
          if (get_field('event_date')) {
            $date = date('d.m.y', strtotime(get_field('event_date')));
          } else {

            $date = date('d.m.y', strtotime(get_the_date()));
          }
          $image;
          if (!get_the_post_thumbnail_url()) {
            $image = get_theme_file_uri('/assets/Images/Coding-008.jpg');
          } else {
            $image = get_the_post_thumbnail_url();
          }
          ?>
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
              <?php if (get_field('event_description')) { ?>
                <p><?php echo wp_trim_words(get_field('event_description'), 55); ?></p>

              <?php } else { ?>
                <p><?php echo wp_trim_words(get_the_content(), 55); ?></p>
              <?php } ?>
            </div><!-- post-content -->

            <div class="post-meta">
              <a href="<?php echo the_permalink(); ?>" class="cta cta-read-more">Read more</a>
              <div class="post-meta-content pull-right">
                <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="post-author"><img src="<?php echo get_theme_file_uri('/assets/images/Icons/icon-pen.svg'); ?>" alt="icon"><?php the_author(); ?></a>
                <a class="post-date"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-calendar.svg'); ?>" alt="icon"><?php echo $date; ?></a>
                <a href="<?php echo the_permalink(); ?>" class="post-comments has-comment"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-comment0.svg'); ?>" alt="icon"><?php echo get_comments_number(); ?></a>
              </div>
            </div><!-- post-meta -->
          </article><!-- article -->
          <?php
        } ?>
        <div class="pagination">
        <div class="prev"><?php previous_posts_link('Previous posts', $postslist->max_num_pages); ?></div>
        <div class="next"><?php next_posts_link('Next posts', $postslist->max_num_pages); ?></div>
        </div>
        <?php
  		else :
  			?>
    		<article id="post-0" class="post no-results not-found">
    			<h1>We couldn't find what you were looking for!</h1>
    			<!-- .entry-header -->
    			<div class="entry-content">
    				<p>Nothing matched your search criteria, please try again with different keywords</p>
    			</div>
    			<!-- .entry-content -->
    		</article>
    	 <?php endif; ?>
        <!--End Page-->
      </div>
      <!--Sidebar-->
      <div class="col-md-4">
        <?php dynamic_sidebar('primary-widget-area'); ?>
      </div>
    </div>
  </div>
</div>

<div class="clear"></div>
<?php
get_footer();
?>
