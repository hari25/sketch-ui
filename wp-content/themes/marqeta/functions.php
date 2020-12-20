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



/**
 * Get the current temperature for Zip Code 94612 using the Open Weather Map API.
 */
function show_temp() {
    // Do we have this information in our transients already?
    $transient = get_transient( 'show_temp');
    
    // Yep!  Just return it and we're done.
    if( ! empty( $transient )){
        echo $transient;
    }
    // Nope!  We gotta make a call to the API.
    else {
        $key = API_KEY;
        $url = 'http://api.openweathermap.org/data/2.5/weather?zip=94612,us&units=imperial&APPID=442264878912f4699d9935b5156037a7';

        $response = wp_remote_get( $url);
        // Take the JSON and select the temperature info. Round the temperature up or down.
        if( is_array($response) ) {
            $body = $response['body']; // use the content
            $resp = json_decode($body);
            $basetemp = $resp->main->temp;
            $temp = round($basetemp);
        }
        // Save the API response so we don't have to call again for 60 seconds. API limits to 60 calls per minute.
        set_transient( 'show_temp', $temp, MINUTE_IN_SECONDS );
    }
    // Return the temperature.  The function will return here the first time it is run, and then once again, each time the transient expires.
    echo $temp;
     
}


?>