<?php
abstract class Qikres_Custom_Type{
    protected $custom_type_name;

    protected $custom_type_labels;
    protected $custom_type_args;

    protected $custom_metadatas = array();

    function __construct(){
    }

    //Public functions
    public function register(){
        $args = $this->custom_type_args;
        $args['labels'] = $this->custom_type_labels;
        register_post_type( $this->custom_type_name, $args );

        add_action( 'admin_init', array( $this, 'create_admin' ) );
        add_action( 'save_post', array( $this, 'save_metabox' ), 10, 2 );
    }

    public function create_admin(){
        add_meta_box(
            $this->custom_type_name . '_metabox',
            __( 'Details', 'qikres_core_plugin_locale' ),
            array( $this, 'display_metabox' ),
            $this->custom_type_name,
            'normal',
            'high'
        );
    }

    public function display_metabox( $custom_type ){
        ?>
        <table class="post-metadata-details">
        <?php
            foreach( $this->custom_metadatas as $metadata ){
                $metadata_value = esc_html( get_post_meta( $custom_type->ID, $metadata['id'], $metadata['single'] ) );
        ?>
            <tr>
                <td>
                    <label for="<?php echo $metadata['id']; ?>"><?php echo $metadata['label']?></label>
                </td>
                <td>
                    <input type="<?php echo $metadata['type'];?>" id="<?php echo $metadata['id'] ?>" name="<?php echo $metadata['id']; ?>" value="<?php echo $metadata_value; ?>" />
                </td>
            </tr>
        <?php
            }
        ?>
        </table>
        <?php
    }

    public function save_metabox( $custom_type_id, $custom_type ){
        if( $custom_type->post_type == $this->custom_type_name ){
            foreach( $this->custom_metadatas as $metadata ){
                $id = $metadata['id'];
                if( isset( $_POST[$id] ) && $_POST[$id] != '' ){
                    update_post_meta( $custom_type_id, $id, $_POST[$id] );
                }
            }
        }
    }
    
    public function get_custom_metadatas(){
        $result = array();
        if( !empty( $this->custom_metadatas ) ){
        foreach( $this->custom_metadatas as $custom_metadata ){
            $result[$custom_metadata['id']] = $custom_metadata;
        }
        }
        return $result;
    }

    //Protected functions
    protected function add_custom_metadata( $metadata_id, $label,$type = 'text', $single = TRUE){
        if( !isset($label) ){
            $label = $metadata_id;
        }
        
        if( empty($this->custom_metadatas ) ){
            $this->custom_metadatas = array();
        }
        
        if( isset($metadata_id) ){
            array_push( $this->custom_metadatas,
                array(
                'id'        =>  $metadata_id,
                'label'     =>  $label,
                'single'    =>  $single,
                'type'      =>  $type
                )
            );
        }
    }
}
?>