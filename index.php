<?php
/**
 * The index file used for a blog list.
 */
get_header(); ?>

<main>
    
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            
                get_template_part('/template-parts/content/blog-content');

            endwhile;
            
            the_posts_navigation();
            
            else:
                
            endif;
        ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>