<?php
/**
 * The 404 page
 */
 get_header(); ?>

<main>
    
        <section class="error-404 not-found">
            <h2 class="page-title"><?php _e( 'Oje, da ist wohl etwas schief gegangen?', 'humberto' ); ?></h2>
            
            <p><?php _e( 'Es sieht so aus, als ob die Seite, die Sie wollten, nicht verfügbar ist. Nutzen Sie doch stattdessen das Menü oder die Suche.', 'humberto' ); ?></p>
            
            <?php get_search_form(); ?>
        </section><!-- .error-404 -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>