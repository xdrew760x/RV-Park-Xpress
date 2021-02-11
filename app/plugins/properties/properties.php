<?php
/**
* Plugin Name:     Homes for Sale
* Plugin URI:
* Description:     Various client based functions: custom post types, shortcode, etc
* Version:         1.0.0
* Author:          Andrew Munoz
* Author URI:
* License:         MIT
* License URI:     http://opensource.org/licenses/MIT
*/




//
///
////
/////
//////
///////
//////// Registers Block Category for Gutenberg

function property_block_categories( $categories ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'property_blocks',
        'title' => __( 'Homes for Sales', 'brm' ),
        'icon'  => 'wordpress',
      ),
    )
  );
}

add_filter( 'block_categories', 'property_block_categories', 10, 2 );


//
///
////
/////
//////
///////
//////// Register Post type for Properties

function home_sale() {

  $labels = array(
    'name'                => __( 'Homes for Sale'),
    'singular_name'       => __( 'Homes for Sale' ),
    'menu_name'           => __( 'Homes for Sale'),
    'parent_item_colon'   => __( 'Parent Home'),
    'all_items'           => __( 'All Homes' ),
    'view_item'           => __( 'View Home'),
    'add_new_item'        => __( 'Add New Home'),
    'add_new'             => __( 'Add New Home' ),
    'edit_item'           => __( 'Edit Home' ),
    'update_item'         => __( 'Update Home' ),
    'search_items'        => __( 'Search Homes'),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
  );

  $args = array(
    'label'               => __( 'Homes for Sale'),
    'description'         => __( 'Listing of Homes for Sale'),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
    'taxonomies'          => array( 'genres' ),
    'hierarchical'        => false,
    'public'              => true,
    'has_archive'         => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 15,
    'can_export'          => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'menu_icon' => plugins_url( 'images/property.png', __FILE__ ),
    'rewrite'             => ['slug' => 'homes-for-sale', 'with_front' => false],
  );



  register_post_type( 'properties', $args );

  add_rewrite_rule( '(.?.+?)/page/?([0-9]{1,})/?$', 'index.php?pagename=$matches[1]&paged=$matches[2]', 'top' );

}

add_action( 'init', 'home_sale', 0 );



//
///
////
/////
//////
///////
//////// Register Post Taxonomy

add_action( 'init', 'properties_taxonomy', 0 );
function properties_taxonomy() {
  $labels = array(
    'name' => _x( 'Contract Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Contract Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Types' ),
    'edit_item' => __( 'Edit Contract Type' ),
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type' ),
    'menu_name' => __( 'Contact Type' ),
  );

// Now register the taxonomy
  register_taxonomy('property_type',array('properties'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'property_type' ),
  ));
}
