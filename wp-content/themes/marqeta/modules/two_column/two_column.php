<?php
// =========================================
//   CUSTOM IMAGE SIZES
// =========================================
// If you need to add custom image sizes for this module, do so here.
//add_image_size( THEME_NAME . '-two-column', 458, 531, true );

// Add image sizes to drop down list when adding an image in the CMS
// function two_column_custom_image_sizes( $sizes ) {
//     return array_merge( $sizes, array(
//         THEME_NAME . '-two-column' => __('555px by 605px (Two Column)'),
//     ) );
// }

// add_filter( 'image_size_names_choose', 'two_column_custom_image_sizes' );

// =========================================
//   REGISTER THE GUTENBERG BLOCK
// =========================================
function register_acf_block_two_column() 
	{

	    acf_register_block_type(array(
	        'name'              => 'two_column',
	        'title'             => __('Two Column'),
	        'description'       => __('A block with text on the left and image on right'),
	        'render_template'   => 'modules/two_column/two_column_render.php',
	        'category'          => 'formatting',
	        'keywords'			=> array('layout', 'Two column'),
	        'icon' 				=> 'analytics',
	        'enqueue_assets'	=> function(){
				wp_enqueue_style( 'two-column-image-style', get_template_directory_uri() . '/modules/two_column/two_column.css' );
			},

	    ));
	}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) 
	{
	    add_action('acf/init', 'register_acf_block_two_column');
	}

// =========================================
//   ADD THE FIELD GROUP
// =========================================
if( function_exists('acf_add_local_field_group') ):



endif;
?>