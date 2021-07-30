<?php
/**
 * Display the header content on non front-pages after the header.php
 */
 ?>
 <header id="masthead" class="site-header">
    <div class="site-branding">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        } ?>
        <?php if ( get_header_image() ) : ?>
            <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>">
		<?php endif; ?>
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div><!-- .site-branding -->
</header><!-- #masthead -->