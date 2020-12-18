<?php
// =========================================
//   CUSTOM IMAGE SIZES
// =========================================

// =========================================
//   REGISTER THE GUTENBERG BLOCK
// =========================================
function register_acf_block_cards() 
	{

	    acf_register_block_type(array(
	        'name'              => 'cards',
	        'title'             => __('Cards'),
	        'description'       => __('A block with different card details'),
	        'render_template'   => 'modules/cards/cards_render.php',
	        'category'          => 'formatting',
	        'keywords'			=> array('layout', 'Cards'),
	        'icon' 				=> 'analytics',
	        'enqueue_assets'	=> function(){
				wp_enqueue_style( 'two-column-image-style', get_template_directory_uri() . '/modules/cards/cards.css' );
			},

	    ));
	}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) 
	{
	    add_action('acf/init', 'register_acf_block_cards');
	}

// =========================================
//   ADD THE FIELD GROUP
// =========================================
if( function_exists('acf_add_local_field_group') ):



endif;
?>