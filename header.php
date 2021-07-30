<?php
/**
 * The theme header
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_option('humberto_theme_options')['blog_descr'] ?>">
	<meta name="keywords" content="<?php echo get_option('humberto_theme_options')['blog_inf'] ?>">
    <meta name="author" content="<?php echo get_option('humberto_theme_options')['blog_author'] ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'humberto' ); ?></a>
    
    <?php get_template_part('template-parts/header/site-header'); ?>
    
    
    <script type="text/javascript">
        
        
    </script>
    
    <?php get_template_part('template-parts/navigation/navigation'); ?>
    
    <?php get_search_form(); ?>
	
	<!-- start content here -->
	<div id="content" class="content">