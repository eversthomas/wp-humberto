<?php
/**
 * humberto Theme Options seo
 *
 */

/**
 * Register the form setting for our humberto_options array.
 *
 */
function humberto_theme_options_init() {
	register_setting(
		'humberto_options', // Options group, see settings_fields() call in humberto_theme_options_render_page()
		'humberto_theme_options', // Database option, see humberto_get_theme_options()
		'humberto_theme_options_validate' // The sanitization callback, see humberto_theme_options_validate()
	);

	// Register our settings field group
	add_settings_section(
		'general', // Unique identifier for the settings section
		'', // Section title (we don't want one)
		'__return_false', // Section callback (we don't want anything)
		'theme_options' // Menu slug, used to uniquely identify the page; see humberto_theme_options_add_page()
	);

	add_settings_field( 'blog_descr', __( 'Blog Description', 'humberto' ), 'humberto_settings_field_blog_descr', 'theme_options', 'general' );
	add_settings_field( 'blog_author', __( 'Blog Author', 'humberto' ), 'humberto_settings_field_blog_author', 'theme_options', 'general' );
	add_settings_field( 'blog_inf', __( 'Blog Information', 'humberto' ), 'humberto_settings_field_blog_inf', 'theme_options', 'general' );
}
add_action( 'admin_init', 'humberto_theme_options_init' );

/**
 * Change the capability required to save the 'humberto_options' options group.
 *
 */
function humberto_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_humberto_options', 'humberto_option_page_capability' );

/**
 * Add our theme options page to the admin menu.
 *
 */
function humberto_theme_options_add_page() {
	$theme_page = add_theme_page(
		__( 'SEO Options', 'humberto' ),   // Name of page
		__( 'SEO Options', 'humberto' ),   // Label in menu
		'edit_theme_options',          // Capability required
		'theme_options',               // Menu slug, used to uniquely identify the page
		'humberto_theme_options_render_page' // Function that renders the options page
	);
}
add_action( 'admin_menu', 'humberto_theme_options_add_page' );

/**
 * Returns the options array for humberto.
 *
 */
function humberto_get_theme_options() {
	$saved = (array) get_option( 'humberto_theme_options' );
	$defaults = array(
		'blog_descr'     => '',
		'blog_author'     => '',
		'blog_inf'     => ''
	);

	$defaults = apply_filters( 'humberto_default_theme_options', $defaults );

	$options = wp_parse_args( $saved, $defaults );
	$options = array_intersect_key( $options, $defaults );

	return $options;
}

/**
 * Renders the blog_descr setting field.
 */
function humberto_settings_field_blog_descr() {
	$options = humberto_get_theme_options();
	?>
	<input type="text" name="humberto_theme_options[blog_descr]" id="blog_descr" value="<?php echo esc_attr( $options['blog_descr'] ); ?>" />
	<label class="description" for="blog_descr"><?php _e( 'Blog Description', 'humberto' ); ?></label>
	<?php
}
/**
 * Renders the blog_author setting field.
 */
function humberto_settings_field_blog_author() {
	$options = humberto_get_theme_options();
	?>
	<input type="text" name="humberto_theme_options[blog_author]" id="blog_author" value="<?php echo esc_attr( $options['blog_author'] ); ?>" />
	<label class="description" for="blog_author"><?php _e( 'Blog Author', 'humberto' ); ?></label>
	<?php
}
/**
 * Renders the blog_info setting field.
 */
function humberto_settings_field_blog_inf() {
	$options = humberto_get_theme_options();
	?>
	<input type="text" name="humberto_theme_options[blog_inf]" id="blog_inf" value="<?php echo esc_attr( $options['blog_inf'] ); ?>" />
	<label class="description" for="blog_inf"><?php _e( 'Blog Info', 'humberto' ); ?></label>
	<?php
}

/**
 * Renders the Theme Options administration screen.
 *
 */
function humberto_theme_options_render_page() {
	?>
	<div class="wrap">
		<?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
		<h2><?php printf( __( '%s SEO Options', 'humberto' ), $theme_name ); ?></h2>
		<?php settings_errors(); ?>

		<form method="post" action="options.php">
			<?php
				settings_fields( 'humberto_options' );
				do_settings_sections( 'theme_options' );
				submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate form input. Accepts an array, return a sanitized array.
 *
 */
function humberto_theme_options_validate( $input ) {
	$output = array();

	// The sample text input must be safe text with no HTML tags
	if ( isset( $input['blog_descr'] ) && ! empty( $input['blog_descr'] ) )
		$output['blog_descr'] = wp_filter_nohtml_kses( $input['blog_descr'] );
	
	// The sample text input must be safe text with no HTML tags
	if ( isset( $input['blog_author'] ) && ! empty( $input['blog_author'] ) )
		$output['blog_author'] = wp_filter_nohtml_kses( $input['blog_author'] );
		
		// The sample text input must be safe text with no HTML tags
	if ( isset( $input['blog_inf'] ) && ! empty( $input['blog_inf'] ) )
		$output['blog_inf'] = wp_filter_nohtml_kses( $input['blog_inf'] );

	return apply_filters( 'humberto_theme_options_validate', $output, $input );
}

/**
 * output example
 * <?php echo get_option('humberto_theme_options')['blog-descr'] ?>
 */