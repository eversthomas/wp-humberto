<?php
/**
 * Belong to the loop: display a single blog article.
 */
 ?>
 <article>
    <?php the_title( '<h2>', '</h2>' );
          the_content();
    
    // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
    
</article>