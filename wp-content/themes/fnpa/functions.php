<?php
	/**
 * Load All Required Files
 */

	$files_loader = array(
		'inc/setup.php',
		'inc/navwalker-menu.php',
		'inc/widgets.php',
		'inc/assets.php',
		'inc/custom-header.php',
		'inc/template-tags.php',
		'inc/template-functions.php',
		'inc/customizer.php',
		'inc/breadcrumb.php',
		'inc/helper.php',
		'inc/breadcrumb.php',
		'inc/ajax-functions.php'
	);

/**
 * Load The File
 */
foreach ( $files_loader as $file ) 
{
	if ( file_exists( get_template_directory() . '/' . $file ) ) 
	{
		locate_template( $file, true, true );
	}
}
unset( $file );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Removing cols and rows from text area
add_filter('wpcf7_form_elements', function($content) {
    $content = str_replace('cols="40"', '', $content);
    $content = str_replace('rows="10"', '', $content);
    return $content;
});

// adding class in input 
add_filter('wpcf7_form_elements', function($content) {
    // Add the custom class to the checkbox input
    $content = str_replace('<input type="checkbox" name="privacy_check[]"', '<input type="checkbox" name="privacy_check[]" class="form-check-input"', $content);
    return $content;
});

