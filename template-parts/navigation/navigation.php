<?php
/**
 * The main navigation code.
 */
 ?>
 <section class="navigation-bar">
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </label>
    <nav id="site-navigation" class="main-navigation top-menu">
      <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'header-menu',
                  'menu_id'        => 'primary-menu',
                  'container'      => 'ul',
                  )
            );
        ?>
    </nav><!-- #site-navigation -->
</section>