<?php
/**
 * The search file.
 */
get_header(); ?>

<main>
        <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'humberto' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
    
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part('/template-parts/content/search-content');

            endwhile;
            
            the_posts_navigation();
            
            else:
                _e( 'Sorry, no pages matched your criteria.', 'humberto' );
            endif;
        ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>