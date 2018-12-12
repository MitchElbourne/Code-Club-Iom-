<?php
get_header();
?>

<div class="blog_pages_wrapper default_bg search-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="404-page">
          <h1 class="page-title">404 Error!</h1>
          <h5>It seems like something went wrong</h5>
          <a href="javascript:history.back()">Click here to return to where you came from</a>
        </div>
      </div>
      <!--Sidebar-->
      <div class="col-md-4">
        <?php dynamic_sidebar('primary-widget-area'); ?>
      </div>

    </div>
  </div>
</div>

<?php
get_footer();
?>
