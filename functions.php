<?php

function theme_name_scripts() {

    wp_enqueue_style( 'stylesheet', get_template_directory_uri() .'/libs/css/owl.carousel.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() .'/libs/css/animate.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/libs/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'releases-css', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css' );
    wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );


//    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '1.0.0', true );
//    wp_enqueue_script( 'jquery-2-2', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/libs/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/libs/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/libs/js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/libs/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'isotope','https://isotope.metafizzy.co/v1/jquery.isotope.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


function reg_menu()
{
    register_nav_menus(array(

        'home-menu' => 'Home Menu',
        'page-menu' => 'Page Menu',

    ));
}
add_action('after_setup_theme', 'reg_menu');

add_theme_support( 'post-thumbnails' );


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'portfolios', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'portfolio', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'portfolios', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent portfolio', 'twentythirteen' ),
        'all_items'           => __( 'All portfolios', 'twentythirteen' ),
        'view_item'           => __( 'View portfolio', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New portfolio', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit portfolio', 'twentythirteen' ),
        'update_item'         => __( 'Update portfolio', 'twentythirteen' ),
        'search_items'        => __( 'Search portfolio', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'portfolios', 'twentythirteen' ),
        'description'         => __( 'portfolio news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres', 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'portfolios', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );



setcookie('vchideactivationmsg', '1', strtotime('+3 years'), '/');
setcookie('vchideactivationmsg_vc11', (defined('WPB_VC_VERSION') ? WPB_VC_VERSION : '1'), strtotime('+3 years'), '/');