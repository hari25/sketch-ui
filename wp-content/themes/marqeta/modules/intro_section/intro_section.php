<?php
// =========================================
//   CUSTOM IMAGE SIZES
// =========================================
// If you need to add custom image sizes for this module, do so here.

// =========================================
//   REGISTER THE GUTENBERG BLOCK
// =========================================
function register_acf_block_intro_section() 
	{
	    acf_register_block_type(array(
	        'name'              => 'intro_section',
	        'title'             => __('Intro Section'),
	        'description'       => __('A section to go beneath the header that has a brief intro and animated text'),
	        'render_template'   => 'modules/intro_section/intro_section_render.php',
	        'category'          => 'formatting',
	        'keywords'			=> array('intro'),
	        'icon' 				=> 'megaphone',
	        'enqueue_assets'	=> function(){
				wp_register_style( 'intro-section-module-styles', get_template_directory_uri() . '/modules/intro_section/intro_section.css',array(), '', 'all' );
				wp_enqueue_style('intro-section-module-styles');
			},

	    ));
	}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) 
	{
	    add_action('acf/init', 'register_acf_block_intro_section');
	}

// =========================================
//   ADD THE FIELD GROUP
// =========================================

