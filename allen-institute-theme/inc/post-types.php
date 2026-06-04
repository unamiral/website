<?php
/**
 * Register Custom Post Types and Taxonomies
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function allen_institute_register_cpts() {
    // 1. CPT: Carousel Slides (slides)
    $slide_labels = array(
        'name'               => _x( 'Carousel Slides', 'post type general name', 'allen-institute' ),
        'singular_name'      => _x( 'Carousel Slide', 'post type singular name', 'allen-institute' ),
        'menu_name'          => _x( 'Carousel Slides', 'admin menu', 'allen-institute' ),
        'name_admin_bar'     => _x( 'Carousel Slide', 'add new on admin bar', 'allen-institute' ),
        'add_new'            => _x( 'Add New', 'slide', 'allen-institute' ),
        'add_new_item'       => __( 'Add New Carousel Slide', 'allen-institute' ),
        'new_item'           => __( 'New Carousel Slide', 'allen-institute' ),
        'edit_item'          => __( 'Edit Carousel Slide', 'allen-institute' ),
        'view_item'          => __( 'View Carousel Slide', 'allen-institute' ),
        'all_items'          => __( 'All Carousel Slides', 'allen-institute' ),
        'search_items'       => __( 'Search Carousel Slides', 'allen-institute' ),
        'not_found'          => __( 'No slides found.', 'allen-institute' ),
        'not_found_in_trash' => __( 'No slides found in Trash.', 'allen-institute' )
    );

    $slide_args = array(
        'labels'             => $slide_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slides' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-images-alt2',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );
    register_post_type( 'slides', $slide_args );

    // 2. CPT: Updates (updates)
    $update_labels = array(
        'name'               => _x( 'Explore Updates', 'post type general name', 'allen-institute' ),
        'singular_name'      => _x( 'Update', 'post type singular name', 'allen-institute' ),
        'menu_name'          => _x( 'Explore Updates', 'admin menu', 'allen-institute' ),
        'name_admin_bar'     => _x( 'Update', 'add new on admin bar', 'allen-institute' ),
        'add_new'            => _x( 'Add New', 'update', 'allen-institute' ),
        'add_new_item'       => __( 'Add New Update', 'allen-institute' ),
        'new_item'           => __( 'New Update', 'allen-institute' ),
        'edit_item'          => __( 'Edit Update', 'allen-institute' ),
        'view_item'          => __( 'View Update', 'allen-institute' ),
        'all_items'          => __( 'All Updates', 'allen-institute' ),
        'search_items'       => __( 'Search Updates', 'allen-institute' ),
        'not_found'          => __( 'No updates found.', 'allen-institute' ),
        'not_found_in_trash' => __( 'No updates found in Trash.', 'allen-institute' )
    );

    $update_args = array(
        'labels'             => $update_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'updates' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );
    register_post_type( 'updates', $update_args );

    // 3. Taxonomy: Update Type (update_type: News, Video, Science Images, Media, Events)
    $tax_labels = array(
        'name'              => _x( 'Update Types', 'taxonomy general name', 'allen-institute' ),
        'singular_name'     => _x( 'Update Type', 'taxonomy singular name', 'allen-institute' ),
        'search_items'      => __( 'Search Update Types', 'allen-institute' ),
        'all_items'         => __( 'All Update Types', 'allen-institute' ),
        'parent_item'       => __( 'Parent Update Type', 'allen-institute' ),
        'parent_item_colon' => __( 'Parent Update Type:', 'allen-institute' ),
        'edit_item'         => __( 'Edit Update Type', 'allen-institute' ),
        'update_item'       => __( 'Update Update Type', 'allen-institute' ),
        'add_new_item'      => __( 'Add New Update Type', 'allen-institute' ),
        'new_item_name'     => __( 'New Update Type Name', 'allen-institute' ),
        'menu_name'         => __( 'Update Types', 'allen-institute' ),
    );

    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'update-type' ),
        'show_in_rest'      => true,
    );
    register_taxonomy( 'update_type', array( 'updates' ), $tax_args );

    // 4. CPT: Accelerators (accelerators)
    $accel_labels = array(
        'name'               => _x( 'Accelerators', 'post type general name', 'allen-institute' ),
        'singular_name'      => _x( 'Accelerator', 'post type singular name', 'allen-institute' ),
        'menu_name'          => _x( 'Accelerators', 'admin menu', 'allen-institute' ),
        'name_admin_bar'     => _x( 'Accelerator', 'add new on admin bar', 'allen-institute' ),
        'add_new'            => _x( 'Add New', 'accelerator', 'allen-institute' ),
        'add_new_item'       => __( 'Add New Accelerator', 'allen-institute' ),
        'new_item'           => __( 'New Accelerator', 'allen-institute' ),
        'edit_item'          => __( 'Edit Accelerator', 'allen-institute' ),
        'view_item'          => __( 'View Accelerator', 'allen-institute' ),
        'all_items'          => __( 'All Accelerators', 'allen-institute' ),
        'search_items'       => __( 'Search Accelerators', 'allen-institute' ),
        'not_found'          => __( 'No accelerators found.', 'allen-institute' ),
        'not_found_in_trash' => __( 'No accelerators found in Trash.', 'allen-institute' )
    );

    $accel_args = array(
        'labels'             => $accel_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'accelerators' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-admin-site-alt3',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );
    register_post_type( 'accelerators', $accel_args );
}
add_action( 'init', 'allen_institute_register_cpts' );
