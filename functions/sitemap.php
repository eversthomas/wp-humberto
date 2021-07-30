<?php
/**
 * Eine eigene sitemap.xml ohne Plugin erstellen
 * @author Andreas Hecht
 */
function humberto_create_sitemap() {
  $sitemap_posts = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'modified',
    'post_type'  => array('post','page', 'attachment'), // Deine Custom Post Types hier einfügen (z.B. Portfolio)
    'order'    => 'DESC'
  ));
  $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
  $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
  foreach($sitemap_posts as $post) {
    setup_postdata($post);
    $postdate = explode(" ", $post->post_modified);
    $sitemap .= '<url>'.

      '<loc>'. get_permalink($post->ID) .'</loc>'.

      '<lastmod>'. $postdate[0] .'</lastmod>'.

      '<changefreq>monthly</changefreq>'.

    '</url>';
  }
  $sitemap .= '</urlset>';
  $fp = fopen(ABSPATH . "sitemap.xml", 'w');
  fwrite($fp, $sitemap);
  fclose($fp);
}
add_action('publish_post', 'create_sitemap');
add_action('publish_page', 'humberto_create_sitemap');