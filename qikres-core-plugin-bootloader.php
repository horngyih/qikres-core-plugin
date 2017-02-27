<?php
/*
 * Plugin Name:     Qikres Core Plugin
 * Plugin URI:      https://github.com/horngyih/qikres-core-plugin
 * Description:     A Wordpress plugin that sets up some basic core custom types typical of Qikres Wordpress sites
 * Version:         0.1.0
 * Author:          Horng Yih
 * Author:          https://github.com/horngyih
 * Text Domain:     qikres-core-plugin-locale 
 * Domain Path:     /languages
 *
 */

function create_room_custom_type(){
    $labels = array(
        'name'                  =>  _x( 'Rooms','Post Type General Name', 'qikres-core-plugin-locale' ),
        'singular_name'         =>  _x( 'Room', 'Post Type Singulare Name', 'qikres-core-plugin-locale' ),
        'menu_name'             =>  __( 'Rooms', 'qikres-core-plugin-locale' ),
        'parent_item_colon'     =>  __( 'Parent Room', 'qikres-core-plugin-locale' ),
        'all_items'             =>  __( 'All Rooms', 'qikres-core-plugin-locale' ),
        'view_item'             =>  __( 'View Room', 'qikres-core-plugin-locale' ),
        'add_new_item'          =>  __( 'Add New Room', 'qikres-core-plugin-locale' ),
        'add_new'               =>  __( 'Add New', 'qikres-core-plugin-locale' ),
        'edit_item'             =>  __( 'Edit Room', 'qikres-core-plugin-locale' ),
        'update_item'           =>  __( 'Update Room', 'qikres-core-plugin-locale' ),
        'search_item'           =>  __( 'Search Room', 'qikres-core-plugin-locale' ),
        'not_found'             =>  __( 'Room Not Found', 'qikres-core-plugin-locale' ),
        'not_found_in_trash'    =>  __( 'Room Not Found in Trasch', 'qikres-core-plugin-locale' )
    );

    $args = array(
        'label'                 =>  __( 'Rooms', 'qikres-core-plugin-locale' ),
        'description'           =>  __( 'Rooms', 'qikres-core-plugin-locale' ),
        'labels'                =>  $labels,
        'supports'              =>  array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
        'taxonomies'            =>  array( 'room_categories' ),
        'heirarchial'           =>  false,
        'public'                =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'show_in_nav_menus'     =>  true,
        'show_in_admin_bar'     =>  true,
        'menu_position'         =>  5,
        'can_export'            =>  true,
        'has_archive'           =>  false,
        'exclude_from_search'   =>  false,
        'publicly_queryable'    =>  true,
        'capability_type'       =>  'page'
    );

    register_post_type( 'rooms', $args );
}

add_action( 'init', 'create_room_custom_type', 0 );

 if( ! defined( "WPINC" ) ){
     die;
 }
?>