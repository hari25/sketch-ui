<?php
// =========================================
//   CUSTOM IMAGE SIZES
// =========================================


// =========================================
//   REGISTER THE GUTENBERG BLOCK
// =========================================
function register_acf_block_logo_wrapper() 
	{

	    acf_register_block_type(array(
	        'name'              => 'logo_wrapper',
	        'title'             => __('Logo wrapper'),
	        'description'       => __('A block with logos'),
	        'render_template'   => 'modules/logo_wrapper/logo_wrapper_render.php',
	        'category'          => 'formatting',
	        'keywords'			=> array('layout', 'Logo Wrapper'),
	        'icon' 				=> 'analytics',
	        'enqueue_assets'	=> function(){
				wp_enqueue_style( 'logo-wrapper-image-style', get_template_directory_uri() . '/modules/logo_wrapper/logo_wrapper.css' );
			},

	    ));
	}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) 
	{
	    add_action('acf/init', 'register_acf_block_logo_wrapper');
	}

// =========================================
//   ADD THE FIELD GROUP
// =========================================
if( function_exists('acf_add_local_field_group') ):



endif;
?>