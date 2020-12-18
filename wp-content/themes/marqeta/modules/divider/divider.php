<?php
// =========================================
//   CUSTOM IMAGE SIZES

// =========================================
//   REGISTER THE GUTENBERG BLOCK
// =========================================
function register_acf_block_divider() 
	{

	    acf_register_block_type(array(
	        'name'              => 'divider',
	        'title'             => __('Divider'),
	        'description'       => __('A divider to divide blocks from rest of them'),
	        'render_template'   => 'modules/divider/divider_render.php',
	        'category'          => 'formatting',
	        'keywords'			=> array('layout', 'Divider'),
	        'icon' 				=> 'analytics',
	        'enqueue_assets'	=> function(){
				wp_enqueue_style( 'divider-style', get_template_directory_uri() . '/modules/divider/divider.css' );
			},

	    ));
	}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) 
	{
	    add_action('acf/init', 'register_acf_block_divider');
	}

// =========================================
//   ADD THE FIELD GROUP
// =========================================
if( function_exists('acf_add_local_field_group') ):



endif;
?>