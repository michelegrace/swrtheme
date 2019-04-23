<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/wp_bootstrap_navwalker.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

require_once('lib/multi-post-thumbnails.php');

//Add our new featured image types.
if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
					'label' => 'Featured Image (Mobile)',
					'id' => 'feature-image-xs',
					'post_type' => 'page'
			)
	);

	new MultiPostThumbnails(array(
					'label' => 'Featured Image (Retina)',
					'id' => 'feature-image-retina',
					'post_type' => 'page'
			)
	);
};

function swrtheme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
}
add_action( 'customize_register', 'swrtheme_customize_register' );

add_theme_support( 'custom-header' );