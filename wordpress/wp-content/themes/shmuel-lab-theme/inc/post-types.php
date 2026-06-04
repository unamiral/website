<?php
/**
 * Register Custom Post Types and Taxonomies
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function shmuel_lab_register_cpts() {
    
    // 1. CPT: Research Areas
    $research_labels = array(
        'name'               => _x( 'Research Areas', 'post type general name', 'shmuel-lab' ),
        'singular_name'      => _x( 'Research Area', 'post type singular name', 'shmuel-lab' ),
        'menu_name'          => _x( 'Research Areas', 'admin menu', 'shmuel-lab' ),
        'name_admin_bar'     => _x( 'Research Area', 'add new on admin bar', 'shmuel-lab' ),
        'add_new'            => _x( 'Add New', 'research area', 'shmuel-lab' ),
        'add_new_item'       => __( 'Add New Research Area', 'shmuel-lab' ),
        'new_item'           => __( 'New Research Area', 'shmuel-lab' ),
        'edit_item'          => __( 'Edit Research Area', 'shmuel-lab' ),
        'view_item'          => __( 'View Research Area', 'shmuel-lab' ),
        'all_items'          => __( 'All Research Areas', 'shmuel-lab' ),
        'search_items'       => __( 'Search Research Areas', 'shmuel-lab' ),
        'not_found'          => __( 'No research areas found.', 'shmuel-lab' ),
        'not_found_in_trash' => __( 'No research areas found in Trash.', 'shmuel-lab' )
    );

    $research_args = array(
        'labels'             => $research_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'research' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-chart-network',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );
    register_post_type( 'research_area', $research_args );

    // 2. CPT: Team Members
    $team_labels = array(
        'name'               => _x( 'Team Members', 'post type general name', 'shmuel-lab' ),
        'singular_name'      => _x( 'Team Member', 'post type singular name', 'shmuel-lab' ),
        'menu_name'          => _x( 'Team Members', 'admin menu', 'shmuel-lab' ),
        'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'shmuel-lab' ),
        'add_new'            => _x( 'Add New', 'team member', 'shmuel-lab' ),
        'add_new_item'       => __( 'Add New Team Member', 'shmuel-lab' ),
        'new_item'           => __( 'New Team Member', 'shmuel-lab' ),
        'edit_item'          => __( 'Edit Team Member', 'shmuel-lab' ),
        'view_item'          => __( 'View Team Member', 'shmuel-lab' ),
        'all_items'          => __( 'All Team Members', 'shmuel-lab' ),
        'search_items'       => __( 'Search Team Members', 'shmuel-lab' ),
        'not_found'          => __( 'No team members found.', 'shmuel-lab' ),
        'not_found_in_trash' => __( 'No team members found in Trash.', 'shmuel-lab' )
    );

    $team_args = array(
        'labels'             => $team_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team-member' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'thumbnail' ), // Name is title, photo is thumbnail
        'show_in_rest'       => true,
    );
    register_post_type( 'team_member', $team_args );

    // 3. CPT: Publications
    $pub_labels = array(
        'name'               => _x( 'Publications', 'post type general name', 'shmuel-lab' ),
        'singular_name'      => _x( 'Publication', 'post type singular name', 'shmuel-lab' ),
        'menu_name'          => _x( 'Publications', 'admin menu', 'shmuel-lab' ),
        'name_admin_bar'     => _x( 'Publication', 'add new on admin bar', 'shmuel-lab' ),
        'add_new'            => _x( 'Add New', 'publication', 'shmuel-lab' ),
        'add_new_item'       => __( 'Add New Publication', 'shmuel-lab' ),
        'new_item'           => __( 'New Publication', 'shmuel-lab' ),
        'edit_item'          => __( 'Edit Publication', 'shmuel-lab' ),
        'view_item'          => __( 'View Publication', 'shmuel-lab' ),
        'all_items'          => __( 'All Publications', 'shmuel-lab' ),
        'search_items'       => __( 'Search Publications', 'shmuel-lab' ),
        'not_found'          => __( 'No publications found.', 'shmuel-lab' ),
        'not_found_in_trash' => __( 'No publications found in Trash.', 'shmuel-lab' )
    );

    $pub_args = array(
        'labels'             => $pub_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'publication' ),
        'capability_type'    => 'post',
        'has_archive'        => false, // We will use a custom page template for better control
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array( 'title' ), // Rest is ACF
        'show_in_rest'       => true,
    );
    register_post_type( 'publication', $pub_args );
}
add_action( 'init', 'shmuel_lab_register_cpts' );
