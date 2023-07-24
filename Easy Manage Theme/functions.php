<?php
/*-------------------------------------------------------------------------*/
/*                        REGISTER CUSTOM NAVIGATION WALKER                */
/*-------------------------------------------------------------------------*/

if ( ! file_exists( get_template_directory() . '/inc/class-bootstrap-5-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-bootstrap-5-navwalker-missing', __( 'It appears the class-bootstrap-5-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-bootstrap-5-navwalker.php';
}

/*-------------------------------------------------------------------------*/
/*                        ENQUEUE ALL THE THINGS                           */
/*-------------------------------------------------------------------------*/

function wp_custom_styles(){
    wp_register_style('bootstrap5', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('bootstrap5');
    wp_register_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap', false ); 
    wp_enqueue_style('wpb-google-fonts' );
    wp_register_style('boxicons', 'https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('boxicons');
    wp_register_style('line-awesome', get_template_directory_uri().'/assets/css/line-awesome/dist/line-awesome/css/line-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('line-awesome');

    //dash
    wp_register_style('backend', get_template_directory_uri().'/assets/css/backend.css', array(), '1.0.0', 'all');
    wp_enqueue_style('backend');
    wp_register_style('backend-plugin', get_template_directory_uri().'/assets/css/backend-plugin.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('backend-plugin');
    wp_register_style('remixicon', get_template_directory_uri().'/assets/css/remixicon/fonts/remixicon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('remixicon');

    wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');
    wp_register_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'wp_custom_styles');

function wp_custom_scripts(){
    wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array(), '5.3.0', true);
    wp_enqueue_script('bootstrap-js');
    wp_register_script('bootstrap-bundle-js', get_template_directory_uri(). '/assets/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    wp_enqueue_script('bootstrap-bundle-js');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');
    wp_register_script('custom-js', get_template_directory_uri(). '/assets/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js');
    //dash
    wp_register_script('app-js', get_template_directory_uri(). '/assets/js/app.js', array(), '1.0.0', true);
    wp_enqueue_script('app-js');

    wp_register_script('treeview-js', get_template_directory_uri(). '/assets/js/table-treeview.js', array(), '1.0.0', true);
    wp_enqueue_script('treeview-js');
    wp_register_script('chart-js', get_template_directory_uri(). '/assets/js/chart-custom.js', array(), '1.0.0', true);
    wp_enqueue_script('chart-js');
    wp_register_script('slider-js', get_template_directory_uri(). '/assets/js/slider.js', array(), '1.0.0', true);
    wp_enqueue_script('slider-js');

    wp_register_script('circle-js', get_template_directory_uri(). '/assets/js/circle-progress.js', array(), '1.0.0', true);
    wp_enqueue_script('circle-js');    
    wp_register_script('backend-js', get_template_directory_uri(). '/assets/js/backend-bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('backend-js');
}
add_action('wp_enqueue_scripts', 'wp_custom_scripts');

//enqueue google maps
function add_google_maps_api() {
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDrgGXICRk_yPMowMpFJHWZLVlhXb7GCnQ', array(), null, true);
  }
  add_action('wp_enqueue_scripts', 'add_google_maps_api');
/*-------------------------------------------------------------------------*/
/*                        REGISTER WIDGETS AND MENUS                       */
/*-------------------------------------------------------------------------*/

function wp_custom_menus(){
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => 'Main Menu',
        'secondary' => 'Footer Menu'
    ));
}
add_action('init', 'wp_custom_menus');

function wp_register_sidebar(){
    add_theme_support('widgets');

    register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
        'description'   => __( 'A short description of the sidebar.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
        'description'   => __( 'A short description of the sidebar.' ),
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'wp_register_sidebar');

/*-------------------------------------------------------------------------*/
/*                        ADD THEME SUPPORT                                */
/*-------------------------------------------------------------------------*/
function custom_theme_setup() {
    add_theme_support( 'html5', array( 'comment-list' ) );
	
	add_theme_support('post-thumbnails');

	add_theme_support( 'title-tag' );

	add_theme_support('custom-header');

	add_theme_support('custom-background');

    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


/*-------------------------------------------------------------------------*/
/*                        ADD THEME SUPPORT                                */
/*-------------------------------------------------------------------------*/
function recent_posts_transient(){
	if(false!==get_transient('recent_posts')){
		delete_transient('recent_posts');
	}
}
add_action('save_post', 'recent_posts_transient');

/*-------------------------------------------------------------------------*/
/*                        LIMIT LOGIN ATTEMPTS                             */
/*-------------------------------------------------------------------------*/
function check_attempted_login( $user, $username, $password ) {
    if ( get_transient( 'attempted_login' ) ) {
        $datas = get_transient( 'attempted_login' );

        if ( $datas['tried'] >= 3 ) {
            $until = get_option( '_transient_timeout_' . 'attempted_login' );
            $time = time_to_go( $until );

            return new WP_Error( 'too_many_tried',  sprintf( __( '<strong>ERROR</strong>: You have reached authentication limit, you will be able to try again in %1$s.' ) , $time ) );
        }
    }

    return $user;
}

add_filter( 'authenticate', 'check_attempted_login', 30, 3 ); 

function login_failed( $username ) {
    if ( get_transient( 'attempted_login' ) ) {
        $datas = get_transient( 'attempted_login' );
        $datas['tried']++;

        if ( $datas['tried'] <= 3 )
            set_transient( 'attempted_login', $datas , 300 );
    } else {
        $datas = array(
            'tried'     => 1
        );
        set_transient( 'attempted_login', $datas , 300 );
    }
}

add_action( 'wp_login_failed', 'login_failed', 10, 1 ); 

function time_to_go($timestamp){

    // converting the mysql timestamp to php time
    $periods = array(
        "second",
        "minute",
        "hour",
        "day",
        "week",
        "month",
        "year"
    );
    $lengths = array(
        "60",
        "60",
        "24",
        "7",
        "4.35",
        "12"
    );
    $current_timestamp = time();
    $difference = abs($current_timestamp - $timestamp);
    for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths) - 1; $i ++) {
        $difference /= $lengths[$i];
    }
    $difference = round($difference);
    if (isset($difference)) {
        if ($difference != 1)
            $periods[$i] .= "s";
            $output = "$difference $periods[$i]";
            return $output;
    }
    
    
    
}
/*-------------------------------------------------------------------------*/
/*                        CREATE Custom Post-type Events                            */
/*-------------------------------------------------------------------------*/

// Register Custom Post Type
function create_events_post_type() {
    $labels = array(
        'name'                  => 'Events',
        'singular_name'         => 'Event',
        'menu_name'             => 'Events',
        'name_admin_bar'        => 'Event',
        'archives'              => 'Event Archives',
        'attributes'            => 'Event Attributes',
        'parent_item_colon'     => 'Parent Event:',
        'all_items'             => 'All Events',
        'add_new_item'          => 'Add New Event',
        'add_new'               => 'Add New',
        'new_item'              => 'New Event',
        'edit_item'             => 'Edit Event',
        'update_item'           => 'Update Event',
        'view_item'             => 'View Event',
        'view_items'            => 'View Events',
        'search_items'          => 'Search Event',
        'not_found'             => 'Event not found',
        'not_found_in_trash'    => 'Event not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into event',
        'uploaded_to_this_item' => 'Uploaded to this event',
        'items_list'            => 'Events list',
        'items_list_navigation' => 'Events list navigation',
        'filter_items_list'     => 'Filter events list',
    );
    $args = array(
        'label'                 => 'Event',
        'description'           => 'Custom post type for managing events',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'event', $args );
}
add_action( 'init', 'create_events_post_type', 0 );





  