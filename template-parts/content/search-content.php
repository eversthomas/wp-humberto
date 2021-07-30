<?php
/**
 * Belong to the loop: display search results.
 */
 ?>
 <article>
    
    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

	<?php the_excerpt(); ?>

</article>