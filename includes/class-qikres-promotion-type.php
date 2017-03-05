<?php
class Qikres_Promotion_Type extends Qikres_Custom_Type{
    public function __construct(){
        $this->custom_type_name = 'promotion_type';
        $this->custom_type_labels = array(
            'name'                  =>  _x( 'Promotions','Post Type General Name', 'qikres-core-plugin-locale' ),
            'singular_name'         =>  _x( 'Promotion', 'Post Type Singulare Name', 'qikres-core-plugin-locale' ),
            'menu_name'             =>  __( 'Promotions', 'qikres-core-plugin-locale' ),
            'parent_item_colon'     =>  __( 'Parent Promotion', 'qikres-core-plugin-locale' ),
            'all_items'             =>  __( 'All Promotions', 'qikres-core-plugin-locale' ),
            'view_item'             =>  __( 'View Promotion', 'qikres-core-plugin-locale' ),
            'add_new_item'          =>  __( 'Add New Promotion', 'qikres-core-plugin-locale' ),
            'add_new'               =>  __( 'Add New', 'qikres-core-plugin-locale' ),
            'edit_item'             =>  __( 'Edit Promotion', 'qikres-core-plugin-locale' ),
            'update_item'           =>  __( 'Update Promotion', 'qikres-core-plugin-locale' ),
            'search_item'           =>  __( 'Search Promotion', 'qikres-core-plugin-locale' ),
            'not_found'             =>  __( 'No Promotions Found', 'qikres-core-plugin-locale' ),
            'not_found_in_trash'    =>  __( 'No Promotions Found in Trash', 'qikres-core-plugin-locale' )
        );

        $this->custom_type_args = array(
            'label'                 =>  __( 'Promotions', 'qikres-core-plugin-locale' ),
            'description'           =>  __( 'Promotions', 'qikres-core-plugin-locale' ),
            'supports'              =>  array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions' ),
            'taxonomies'            =>  array( 'promotions' ),
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

        $this->add_custom_metadata( 'promotion_code', 'Promotion Code' );
        $this->add_custom_metadata( 'promotion_category', 'Promotion Category' );
        $this->add_custom_metadata( 'promotion_start_date', 'Promotion Start Date', 'date' );
        $this->add_custom_metadata( 'promotion_end_date', 'Promotion End Date', 'date' );
    }
}
?>