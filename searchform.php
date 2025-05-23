

<form method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search__form-in">
  <input type="search" class="search__input w-input" maxlength="256" name="s" placeholder="Search">
  <input type="submit" value="Search" class="search__btn w-button">
  <img src="<?php echo get_template_directory_uri();?>/images/nav-search-close.svg" alt="" class="nav__search-close-icon" data-ix="search-close">
</form>