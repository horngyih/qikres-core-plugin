<?php
class Qikres_Room_Type extends Qikres_Custom_Type{
    public function __construct(){
        $this->custom_type_name = 'room_type';
        $this->custom_type_labels = array(
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
            'not_found'             =>  __( 'No Rooms Found', 'qikres-core-plugin-locale' ),
            'not_found_in_trash'    =>  __( 'No Rooms Found in Trash', 'qikres-core-plugin-locale' )
        );

        $this->custom_type_args = array(
            'label'                 =>  __( 'Rooms', 'qikres-core-plugin-locale' ),
            'description'           =>  __( 'Rooms', 'qikres-core-plugin-locale' ),
            'supports'              =>  array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions' ),
            'taxonomies'            =>  array( 'rooms' ),
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
            'capability_type'       =>  'post'
        );

        $this->add_custom_metadata( 'room_type_code', 'Room Type Code' );
        $this->add_custom_metadata( 'room_type_category', 'Room Type Category' );
        $this->add_custom_metadata( 'room_type_amenities', 'Room Type Amenities' );
        $this->add_custom_metadata( 'room_type_capacity', 'Room Type Capacity', 'number' );
    }
}
?>