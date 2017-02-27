<?php

class Qikres_Core_Plugin_Admin{
    protected $version;

    public function __construct( $version ){
        $this->$version = $version;
    }
}

?>