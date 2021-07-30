<?php
/**
 * Adds Layout Options section and sidebar position setting. Belongs to extras.php
 *
 * @param WP_Customize_Manager $wp_customize The Customizer object.
 */
function humberto_customize_register( $wp_customize ) {

	// Add layout options section.
	$wp_customize->add_section( 'humberto_layout_options', array(
		'title'    => esc_html__( 'Layout Options', 'humberto' ),
		'priority' => 120,
	) );

	// Add featured category setting and control.
	$wp_customize->add_setting( 'sidebar_position', array(
		'default'           => 'right',
		// 'sanitize_callback' => '_sanitize_select',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'sidebar_position', array(
		'label'    => esc_html__( 'Sidebar Position', 'humberto' ),
		'section'  => 'humberto_layout_options',
		'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			'left'   => esc_html__( 'Right Sidebar', 'humberto' ),
			'right'  => esc_html__( 'No Sidebar', 'humberto' ),
		),
	) );

}
add_action( 'customize_register', 'humberto_customize_register' );



