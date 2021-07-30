<?php
/**
 * The singe file for your complete blog posts.
 */
get_header(); ?>

<main>
    
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part('/template-parts/content/single-content');

            endwhile;
            
            else:
                _e( 'Sorry, no pages matched your criteria.', 'humberto' );
            endif;
        ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>