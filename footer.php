<?php
/**
 * The theme footer
 */
 ?>
 
 </div><!-- end content here -->
 
 <footer id="colophon" class="site-footer">
     <?php get_template_part('template-parts/footer/footer-widgets'); ?>
     <div class="site-info">
         <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humberto' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'humberto' ), 'WordPress' ); ?></a></p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>