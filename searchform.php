<form class="search-widget" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" name="s" id="search" class="form-control" />
  <button type="submit" id="searchsubmit" value="search" class="input-group-btn"><img src="<?php echo get_theme_file_uri('assets/images/Icons/icon-search.svg'); ?>" alt="icon"></button>
</form>
