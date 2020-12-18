<?php 
/**
 * Registers a stylesheet.
 */
add_action('init', 'my_register_styles');

function my_register_styles() {
    wp_register_style( 'marqeta', get_template_directory_uri() . '/assets/css/marqeta.css' );
    
}

//enqueue style sheet
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

function my_enqueue_styles() {
    
        wp_enqueue_style( 'marqeta' );
}


function my_load_scripts($hook) {
 
    // 
    wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true);
 
}
add_action('wp_enqueue_scripts', 'my_load_scripts');


// =========================================
// ACF FIELDS SETUP
// =========================================
include_once( 'settings/acf-fields.php' );

// =========================================
//  INGEST MODULES
// =========================================

// Get a list of all the subdirectories in the Modules directory.
$dirs = array_filter(glob(get_template_directory() . '/modules/*'), 'is_dir');

foreach ( $dirs as $dir ) :
    // Get the last directory name.
    $moduleName = substr($dir, strrpos($dir, '/') + 1);
    // The directory name should match the name of the initializing php file
    $moduleInitFile = 'modules/' . $moduleName . '/' . $moduleName . '.php';
    include_once($moduleInitFile);
endforeach;


//Registering Menus

function marqeta_register_menus() 
    {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu' ),
                'footer-menu-one' => __( 'Footer Menu One' ),
                'footer-menu-two' => __( 'Footer Menu Two' ),
                'footer-menu-three' => __( 'Footer Menu Three' ),
                'footer-menu-four' => __( 'Footer Menu Four' ),
                'footer-menu-five' => __( 'Footer Menu Five' ), 
                'footer-menu-widget' => __( 'Footer Widget Menu' ), 
            )
        );
    }

add_action( 'init', 'marqeta_register_menus' );



//make api request
function make_api_request( $tag, $param ) {
	$name = strtoupper($tag);
 	$response = wp_remote_get ( $this->apiUrl .$param . $name .'?apikey='. API_KEY, array ( 'sslverify' => false ) );
    if (!is_wp_error ($response) ) {
        $body =  wp_remote_retrieve_body($response);
        $data = json_decode( $body );
        return $data;
        
    }
    else{
    	return null;
    }
} 


?>