<?php
/**
 * Displays the footer widgets.
 */
 ?>
 <div class="footer-widgets flex-auto">
    <div class="footer-widget-1">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>
    </div>
    <div class="footer-widget-2">
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>
    </div>
    <div class="footer-widget-3">
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>
    </div>
</div>