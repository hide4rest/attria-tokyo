<?php
/**
 * Custom Header functionality for Superio
 *
 * @package WordPress
 * @subpackage Superio
 * @since Superio 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses superio_header_style()
 */
function superio_custom_header_setup() {
	$color_scheme        = superio_get_color_scheme();
	$default_text_color  = trim( $color_scheme[4], '#' );

	/**
	 * Filter Superio custom-header support arguments.
	 *
	 * @since Superio 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'superio_custom_header_args', array(
		'default-text-color'     => $default_text_color,
		'width'                  => 954,
		'height'                 => 1300,
		'wp-head-callback'       => 'superio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'superio_custom_header_setup' );

/**
 * Convert HEX to RGB.
 *
 * @since Superio 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */

if ( ! function_exists( 'superio_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @since Superio 1.0
 *
 * @see superio_custom_header_setup()
 */
function superio_header_style() {
	return '';
}
endif; // superio_header_style

