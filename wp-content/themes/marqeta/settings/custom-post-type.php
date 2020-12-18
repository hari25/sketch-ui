<?php 
/* Custom Post Types */
// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'fm_flush_rewrite_rules' );

// Flush your rewrite rules
function fm_flush_rewrite_rules() {
	flush_rewrite_rules();
}

function financial_modeling_cpt_init() {

	// =========================================
	//   ADD News Article CUSTOM POST TYPE 
	// =========================================

    register_post_type( 'news_articles',
        array(
            'labels' => array(
                'name' => __( 'NewsArticles' ),
                'singular_name' => __( 'News Article' ),
                'menu_name'           => __( 'NewsArticles', THEME_TD ),
				'parent_item_colon'   => __( 'Parent News Article', THEME_TD ),
				'all_items'           => __( 'All NewsArticles', THEME_TD ),
				'view_item'           => __( 'View NewsArticles', THEME_TD ),
				'add_new_item'        => __( 'Add News Article', THEME_TD ),
				'add_new'             => __( 'Add New', THEME_TD ),
				'edit_item'           => __( 'Edit News Article', THEME_TD ),
				'update_item'         => __( 'Update News Article', THEME_TD ),
				'search_items'        => __( 'Search News Article', THEME_TD ),
				'not_found'           => __( 'Not Found', THEME_TD ),
				'not_found_in_trash'  => __( 'Not found in Trash', THEME_TD ),
            ),
            'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'menu_icon'			  => 'dashicons-hammer',
            'has_archive'         => true,
            'rewrite'             => true,
			'show_in_rest'		  => true,
			'supports'            => array( 'title', 'page-attributes', 'editor' ),
			'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
			'hierarchical'        => false,
			'can_export'          => true,
			'capability_type'     => 'post',
			'rewrite' => [
				'slug'	=>	'news-article',
				'with_front' => false,
			],
        )
    );

    // =========================================
	//   ADD Stock Recommendation Article CUSTOM POST TYPE 
	// =========================================
    register_post_type( 'stock_articles',
        array(
            'labels' => array(
                'name' => __( 'stockArticles' ),
                'singular_name' => __( 'Stock Recommendation' ),
                'menu_name'           => __( 'stockArticles', THEME_TD ),
				'parent_item_colon'   => __( 'Parent stock Article', THEME_TD ),
				'all_items'           => __( 'All stockArticles', THEME_TD ),
				'view_item'           => __( 'View stockArticles', THEME_TD ),
				'add_new_item'        => __( 'Add stock Article', THEME_TD ),
				'add_new'             => __( 'Add New', THEME_TD ),
				'edit_item'           => __( 'Edit stock Article', THEME_TD ),
				'update_item'         => __( 'Update stock Article', THEME_TD ),
				'search_items'        => __( 'Search stock Article', THEME_TD ),
				'not_found'           => __( 'Not Found', THEME_TD ),
				'not_found_in_trash'  => __( 'Not found in Trash', THEME_TD ),
            ),
            'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'menu_icon'			  => 'dashicons-hammer',
            'has_archive'         => true,
            'rewrite'             => true,
			'show_in_rest'		  => true,
			'supports'            => array( 'title', 'page-attributes', 'editor' ),
			'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
			'hierarchical'        => false,
			'can_export'          => true,
			'capability_type'     => 'post',
			'rewrite' => [
				'slug'	=>	'stock-article',
				'with_front' => false,
			],
        )
    );

}
// Hooking up our function to theme setup
add_action( 'init', 'financial_modeling_cpt_init', 0 );


?>