<?php
get_header();
?>
<!-- blog title -->
<div class="clear"></div>
<!-- blog title ends -->
<div class="blog_pages_wrapper default_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <!-- Start the Loop. -->
    				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $date = date('d.m.y', strtotime(get_the_date()));
            $image;
            if (!get_the_post_thumbnail_url()) {
              $image = get_theme_file_uri('2018-Digital-Marketing.jpeg');
            } else {
              $image = get_the_post_thumbnail_url();
            }
            ?>
            <article class="post-item">
            <div class="post-thumbnail">
              <div class="ratio-container">
                <div class="ratio-content" style="background-image: url('<?php echo $image; ?>')"></div>
              </div>
            </div><!-- post-thumbnail -->
            <div class="post-categories">
              <?php
              the_category();
              ?>
            </div><!-- post-categories -->
            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a><!-- post-title -->
            <div class="post-content">
              <p><?php echo get_the_content(); ?></p>
            </div><!-- post-content -->

            <?php // TODO: Configure Post-Meta ?>
            <div class="post-meta">
              <div class="post-meta-content pull-right">
                <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="post-author"><img src="<?php echo get_theme_file_uri('/assets/images/Icons/icon-pen.svg'); ?>" alt="icon"><?php the_author(); ?></a>
                <a class="post-date"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-calendar.svg'); ?>" alt="icon"><?php echo $date; ?></a>
              </div>
          </article><!--article end-->
						<?php
					endwhile;
				else:
					?>
					<div class="blogs_page_container">
						<p>
							<?php _e( 'Sorry, no posts matched your criteria.', 'one-page' ); ?>
						</p>
					</div>
				<?php endif; ?>
                <nav id="nav-single"> <span class="nav-previous">
						<?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous Post ', 'one-page' ) ); ?>
                    </span> <span class="nav-next">
						<?php next_post_link( '%link', __( 'Next Post <span class="meta-nav">&rarr;</span>', 'one-page' ) ); ?>
                    </span> </nav>
                <div class="clear"></div>
                <div class="comment_section">
	                   <?php comments_template( '', true ); ?>
                </div>
            </div>
            <!--Sidebar-->
            <div class="col-md-4 page-search">
              <div class="search-box">
                <div class="input-group">
                  <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                	  <input type="text" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" name="s" id="search" class="form-control" />
                		<button type="submit" id="searchsubmit" value="search" class="input-group-btn"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-search.svg'); ?>" alt="icon"></button>
                  </form>
                  <div class="clear"></div>
                </div>
              </div><!-- search-box -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
