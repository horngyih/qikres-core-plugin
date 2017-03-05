<?php

class Qikres_Core_Plugin_Admin{
    protected $version;

    public function __construct( $version ){
        $this->$version = $version;
    }

    public function show_qikres_core_plugin_admin(){
        ?>
        <table>
            <tr>
                <td>Qikres Core Plugin Administration</td>
                <td></td>
            </tr>
        </table>
        <?php
    }
}

?>