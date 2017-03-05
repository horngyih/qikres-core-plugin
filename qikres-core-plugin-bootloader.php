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

/*
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

    register_post_type( 'room_type', $args );
}

function display_room_custom_type_metabox( $room_type ){
    $room_type_code = esc_html( get_post_meta( $room_type->ID, 'room_type_code', true ) );
    $room_type_category = esc_html( get_post_meta( $room_type->ID, 'room_type_category', true ) );
    $room_type_amenities = esc_html( get_post_meta( $room_type->ID, 'room_type_amenities', true ) );
    $room_type_guest_capacity = esc_html( get_post_meta( $room_type->ID, 'room_type_guest_capacity', true ) );

    ?>
    <table>
        <tr>
            <td><label for="room_type_code">Room Type Code</label></td>
            <td><input type="text" id="room_type_code" name="room_type_code" value="<?php echo $room_type_code;?>" /></td>
        </tr>
        <tr>
            <td><label for="room_type_category">Room Type Category</label></td>
            <td><input type="text" id="room_type_category" name="room_type_category" value="<?php echo $room_type_category; ?>" /></td>
        </tr>
        <tr>
            <td><label for="room_type_amenities">Room Type Amenities</label></td>
            <td><input type="text" id="room_type_amenities" name="room_type_amenities" value="<?php echo $room_type_amenities; ?>"></td>
        </tr>
        <tr>
            <td><label for="room_type_guest_capacity">Guest Capacity</label></td>
            <td><input type="number" id="room_type_guest_capacity" name="room_type_guest_capacity" value="<?php echo $room_type_guest_capacity; ?>" /></td>
        </tr>
    </table>
    <?php
}

function save_room_custom_type_metabox( $room_type_id, $room_type ){
    if( $room_type->post_type == 'room_type' ){
        if( isset( $_POST['room_type_code'] ) && $_POST['room_type_code'] != '' ){
            update_post_meta( $room_type_id, 'room_type_code', $_POST['room_type_code'] );
        }

        if( isset( $_POST['room_type_category'] ) && $_POST['room_type_category'] != '' ){
            update_post_meta( $room_type_id, 'room_type_category', $_POST['room_type_category'] );
        }

        if( isset( $_POST['room_type_amenities'] ) && $_POST['room_type_amenities'] != '' ){
            update_post_meta( $room_type_id, 'room_type_amenities', $_POST['room_type_amenities'] );
        }

        if( isset( $_POST['room_type_guest_capacity'] ) && $_POST['room_type_guest_capacity'] != '' ){
            update_post_meta( $room_type_id, 'room_type_guest_capacity', $_POST['room_type_guest_capacity'] );
        }
    }
}

function create_room_custom_type_admin(){
    add_meta_box( 
        'room_type_metabox', 
        __('Room Type Details', 'qikres-core-plugin-locale'), 
        'display_room_custom_type_metabox', 
        'room_type', 
        'normal', 
        'high' 
    );
}
*/

require_once( __DIR__ . '/includes/class-qikres-custom-type.php' );
require_once( __DIR__ . '/includes/class-qikres-room-type.php' );
require_once( __DIR__ . '/includes/class-qikres-promotion-type.php' );

function init_custom_types(){
    $room_type = new Qikres_Room_Type();
    $room_type->register();

    $promotion_type = new Qikres_Promotion_Type();
    $promotion_type->register();
};

add_action( 'init', 'init_custom_types', 0 );

 if( ! defined( "WPINC" ) ){
     die;
 }
?>